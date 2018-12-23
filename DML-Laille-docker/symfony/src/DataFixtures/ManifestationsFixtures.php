<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Repository\NiveauRepository;

use App\Entity\Manifestation;
use App\Entity\DanseApprise;
use App\Entity\DanseRevisee;

class ManifestationsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create("fr_FR");
        //Autres clubs
        for ($i=0; $i <=20 ; $i++){
          $mani = new Manifestation();

          $mani->setTitle(join($faker->words(),' '))
                ->setEventDate($faker->dateTimeBetween('-12 months'))
                ->setVille($faker->city())
                ->setCp($faker->departmentNumber())
                ->setClub(join($faker->words(),' '));

          $manager->persist($mani);

        }
        //Club DML
        for ($i=0; $i <=5 ; $i++){
          $mani = new Manifestation();

          $mani->setTitle(join($faker->words(),' '))
                ->setEventDate($faker->dateTimeBetween('-12 months'))
                ->setVille($faker->city())
                ->setCp($faker->departmentNumber())
                ->setClub('DML')
                ->setDescription('<p>'.join($faker->paragraphs(), '</p><p>').'</p>');
          $manager->persist($mani);

        }


        $manager->flush();
    }
}
