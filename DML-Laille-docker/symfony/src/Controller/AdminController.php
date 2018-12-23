<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

use App\Repository\DanseAppriseRepository;
use App\Repository\DanseReviseeRepository;
use App\Repository\NiveauRepository;
use App\Repository\ManifestationRepository;
use App\Repository\CoursSupplementaireRepository;

use App\Entity\DanseApprise;
use App\Entity\DanseRevisee;
use App\Entity\Manifestation;
use App\Entity\Niveau;
use App\Entity\CoursSupplementaire;

use App\Form\DanseReviseeType;
use App\Form\DanseAppriseType;
use App\Form\ManifestationType;
use App\Form\NiveauType;
use App\Form\CoursSupplementaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function logout(){ }

    /**
     * @Route("/admin/dashboard", name="dashboard")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function dashboard(DanseAppriseRepository $repo,
    NiveauRepository $repoNiveau, ManifestationRepository $repoMani,
    CoursSupplementaireRepository $repoCours)
    {
        /* Danses */
        $dansesParNiveau = array();
        $niveaux = $repoNiveau->findall();
        // Trier les danses par niveau
        foreach ($niveaux as $niveau){
          $dansesParNiveau[$niveau->getTitle()] = $repo->findby(['niveau'=>$niveau], ['danceDate' => 'DESC']);
        }

        /* Manifestations */
        $manifestations = array();
        $dml = $repoMani->findDML();
        for($i = 1; $i < 13; $i++){
          array_push($manifestations, $repoMani->findByMonth($i));
        }

        /* Niveau */
        $niveaux = $repoNiveau->findAll();

        /* Cours supplémentaire */
        $cours = $repoCours->findBy(array(), array("coursDate"=>"ASC"));

        return $this->render('admin/dashboard.html.twig', [
            "dansesParNiveau" => $dansesParNiveau,
            "manifestations" => $manifestations,
            "dml" => $dml,
            "niveaux" => $niveaux,
            "cours" => $cours
        ]);
    }

    /**
     * @Route("/admin/danse/modify/{id}", name="danceModify")
     * @Route("/admin/danse/add/{n}", name="danceCreate")
     */
    public function danceCreate(ObjectManager $manager,
    Request $request, $n = 1, DanseApprise $da = null)
    {
        if(!$da){
          $da = new DanseApprise();
          // Créer un tableau de danses révisées et lier à chacune d'ellle un formulaire
          $dr = array();

          for($i = 1; $i <= $n ; $i++){
            $dr[$i] = new DanseRevisee();
            $da->getDanseRevisees()->add($dr[$i]);
          }
        }


        $daForm = $this->createForm(DanseAppriseType::class, $da);
        $daForm->handleRequest($request);

        if($daForm->isSubmitted() && $daForm->isValid()){
          // Faire persister les danses révisées avant la danse apprise
          if(!$da->getId()){
            foreach($da->getDanseRevisees() as $j){
              $j->setDanseApprise($da);
              $manager->persist($j);
            }
            //$da->setDanceDate(new \DateTime());
          }

          $manager->persist($da);
          $manager->flush();

          return $this->redirectToRoute("dashboard");

          //return $this->redirectToRoute("danceCreate", ["id" => 2]);
        }

        return $this->render('admin/danceCreate.html.twig', [
          "da" => $daForm->createView()
        ]);
    }

    /**
     * @Route("/admin/manifestation/modify/{id}", name="manifestationModify")
     * @Route("/admin/manifestation/add", name="manifestationCreate")
     */
    public function manifestationCreate(ObjectManager $manager,
     Request $request, Manifestation $mani = null)
    {
        if(!$mani){
          $mani = new Manifestation();
        }

        $maniForm = $this->createForm(ManifestationType::class, $mani);
        $maniForm->handleRequest($request);

        if($maniForm->isSubmitted() && $maniForm->isValid()){

          $manager->persist($mani);
          $manager->flush();

          return $this->redirectToRoute("dashboard");

          //return $this->redirectToRoute("danceCreate", ["id" => 2]);
        }

        return $this->render('admin/manifestationCreate.html.twig', [
          "maniForm" => $maniForm->createView()
        ]);
    }

    /**
     * @Route("/admin/niveau/modify/{id}", name="niveauModify")
     * @Route("/admin/niveau/add", name="niveauCreate")
     */
    public function niveauCreate(ObjectManager $manager, Request $request, Niveau $niveau = null)
    {
        if(!$niveau){
          $niveau = new Niveau();
        }

        $niveauForm = $this->createForm(NiveauType::class, $niveau);
        $niveauForm->handleRequest($request);

        if($niveauForm->isSubmitted() && $niveauForm->isValid()){

          $manager->persist($niveau);
          $manager->flush();

          return $this->redirectToRoute("dashboard");

          //return $this->redirectToRoute("danceCreate", ["id" => 2]);
        }

        return $this->render('admin/niveauCreate.html.twig', [
          "niveauForm" => $niveauForm->createView()
        ]);
    }

    /**
     * @Route("/admin/cours/modify/{id}", name="coursSuppModify")
     * @Route("/admin/cours/add", name="coursSuppCreate")
     */
    public function coursSuppCreate(ObjectManager $manager, Request $request, CoursSupplementaire $cours = null)
    {
        if(!$cours){
          $cours = new CoursSupplementaire();
        }

        $coursForm = $this->createForm(CoursSupplementaireType::class, $cours);
        $coursForm->handleRequest($request);

        if($coursForm->isSubmitted() && $coursForm->isValid()){

          $manager->persist($cours);
          $manager->flush();

          return $this->redirectToRoute("dashboard");

          //return $this->redirectToRoute("danceCreate", ["id" => 2]);
        }

        return $this->render('admin/coursSupplementaireCreate.html.twig', [
          "coursForm" => $coursForm->createView()
        ]);
    }

    /**
     * @Route("/admin/danse/delete/{id}", name="danceDelete")
     */
    public function danceDelete(ObjectManager $manager, DanseApprise $da, DanseAppriseRepository $repo)
    {

        $manager->remove($da);
        $manager->flush();
        return $this->redirectToRoute("dashboard");
    }

    /**
     * @Route("/admin/manifestation/delete/{id}", name="manifestationDelete")
     */
    public function manifestationDelete(ObjectManager $manager, Manifestation $mani)
    {

        $manager->remove($mani);
        $manager->flush();
        return $this->redirectToRoute("dashboard");
    }

    /**
     * @Route("/admin/niveau/delete/{id}", name="niveauDelete")
     */
    public function niveauDelete(ObjectManager $manager, Niveau $niveau)
    {

        $manager->remove($niveau);
        $manager->flush();
        return $this->redirectToRoute("dashboard");
    }

    /**
     * @Route("/admin/coursSupp/delete/{id}", name="coursSuppDelete")
     */
    public function coursSuppDelete(ObjectManager $manager,
    CoursSupplementaire $cours)
    {

        $manager->remove($cours);
        $manager->flush();
        return $this->redirectToRoute("dashboard");
    }

}
/*
for($i = 1; $i <= $id ; $i++){
  $dr[$i] = new DanseRevisee();
  $drForm[$i] = $this->createForm(DanseReviseeType::class, $dr[$i]);
  $drFormView[$i] = $drForm[$i]->createView();
}
*/
