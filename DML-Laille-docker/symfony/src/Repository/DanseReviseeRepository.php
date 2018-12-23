<?php

namespace App\Repository;

use App\Entity\DanseRevisee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DanseRevisee|null find($id, $lockMode = null, $lockVersion = null)
 * @method DanseRevisee|null findOneBy(array $criteria, array $orderBy = null)
 * @method DanseRevisee[]    findAll()
 * @method DanseRevisee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DanseReviseeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DanseRevisee::class);
    }

    // /**
    //  * @return DanseRevisee[] Returns an array of DanseRevisee objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DanseRevisee
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
