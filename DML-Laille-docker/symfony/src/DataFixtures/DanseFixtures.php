<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Repository\NiveauRepository;

use App\Entity\Manifestation;
use App\Entity\Niveau;
use App\Entity\DanseApprise;
use App\Entity\DanseRevisee;
use app\Entity\CoursSupplementaire;

class DanseFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = \Faker\Factory::create("fr_FR");


        for($k=0;$k<3;$k++){

          $niveau = new Niveau();
          $timeStart = $faker->dateTime();

          $niveau->setTitle($faker->word())
                  ->setHoraire($timeStart)
                  ->setHoraireFin($timeStart)
                  ->setDescription($faker->paragraph());

          $manager->persist($niveau);
          for ($i=0; $i <= 5; $i++){

            $da = new DanseApprise();
            $da->setTitle(join($faker->words(), ' '))
                ->setDanceDate($faker->dateTimeBetween('-2 months'))
                ->setNiveau($niveau)
                ->setYoutubeLink("https://ytroulette.com");

            $timeStart = $faker->dateTime();
            $coursSupp = new CoursSupplementaire();
            $coursSupp->setTitle(join($faker->words(), ' '))
                      ->setCoursDate($faker->dateTimeBetween('-2 months'))
                      ->setHoraireDebut($timeStart)
                      ->setHoraireFin($timeStart)
                      ->addNiveau($niveau);

            $manager->persist($da);
            $manager->persist($coursSupp);

            for($j=0; $j < 5; $j++){

              $dr = new DanseRevisee();
              $dr->setTitle(join($faker->words(), ' '))
                  ->setYoutubeLink("https://ytroulette.com")
                  ->setDanseApprise($da);

              $manager->persist($dr);
            }
          }
        }
        $manager->flush();
    }
}
