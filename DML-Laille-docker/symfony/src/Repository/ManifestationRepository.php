<?php

namespace App\Repository;

use App\Entity\Manifestation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * @method Manifestation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Manifestation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Manifestation[]    findAll()
 * @method Manifestation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ManifestationRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Manifestation::class);
    }

    public function findByMonth($i = 1)
    {
      $rawSql = "SELECT * FROM manifestation WHERE club != 'DML' AND MONTH(event_date) =".$i;

       $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
       $stmt->execute([]);

       return $stmt->fetchAll();
        ;
    }

    public function findDML(){
      /*
      Pourquoi pas: enlever les manifestations qui sont passés
      ->andWhere('m.eventDate >= :vol')
      ->setParameter('vol', new \DateTime())
      */

      return $this->createQueryBuilder('m')
          ->andWhere('m.club = :val')
          ->setParameter('val', 'DML')
          ->orderBy('m.eventDate', 'ASC')
          ->getQuery()
          ->getResult()
      ;
    }


    // /**
    //  * @return Manifestation[] Returns an array of Manifestation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Manifestation
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
