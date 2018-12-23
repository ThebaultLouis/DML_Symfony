<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ManifestationRepository;
use App\Repository\NiveauRepository;
use App\Repository\DanseAppriseRepository;
use App\Repository\CoursSupplementaireRepository;

use App\Entity\DanseApprise;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(NiveauRepository $repoNiveau)
    {
        $niveaux = $repoNiveau->findall();
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
            "niveaux" => $niveaux
        ]);
    }

    /**
     * @Route("/danse", name="danse")
     */
    public function danse(DanseAppriseRepository $repo, NiveauRepository $repoNiveau)
    {

        $dansesParNiveau = array();
        $niveaux = $repoNiveau->findall();

        foreach ($niveaux as $niveau){
          $dansesParNiveau[$niveau->getTitle()] = $repo->findby(['niveau'=>$niveau], ['danceDate' => 'DESC']);
        }
        return $this->render('public/danse.html.twig', [
          "dansesParNiveau" => $dansesParNiveau
        ]);
    }

    /**
     * @Route("/danse/{id}", name="danseShow")
     */
    public function danseShow(DanseAppriseRepository $repo, DanseApprise $da)
    {

        return $this->render('public/danseShow.html.twig', [
          "da" => $da
        ]);
    }

    /**
     * @Route("/manifestation", name="manifestation")
     */
    public function manifestation(ManifestationRepository $repo)
    {
        //$manifestations = $repo->findBy(array(), array("eventDate" => "DESC"));

        $manifestations = array();
        $dml = $repo->findDML();
        // Trouver les manifesations par mois (il y a 12  mois dans l'année)
        for($i = 1; $i < 13; $i++){
          array_push($manifestations, $repo->findByMonth($i));
        }
        return $this->render('public/manifestation.html.twig', [
          "manifestations" => $manifestations,
          "dml" => $dml
        ]);
    }

    /**
     * @Route("/adherent", name="adherent")
     */
    public function adherent(CoursSupplementaireRepository $repo)
    {

        $cours = $repo->findBy(array(), array("coursDate"=>"ASC"));

        return $this->render('public/adherent.html.twig', [
          "cours" => $cours
        ]);
    }

    /**
     * @Route("/{id}", name="redirection")
     * @Route("/{id}/{iid}", name="redirection")
     */
    public function redirection()
    {
        return $this->redirectToRoute("index");
    }

}
