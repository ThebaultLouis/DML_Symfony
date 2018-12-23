<?php

namespace App\Repository;

use App\Entity\DanseApprise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DanseApprise|null find($id, $lockMode = null, $lockVersion = null)
 * @method DanseApprise|null findOneBy(array $criteria, array $orderBy = null)
 * @method DanseApprise[]    findAll()
 * @method DanseApprise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DanseAppriseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DanseApprise::class);
    }

    // /**
    //  * @return DanseApprise[] Returns an array of DanseApprise objects
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
    public function findOneBySomeField($value): ?DanseApprise
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
