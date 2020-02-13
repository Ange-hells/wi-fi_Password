<?php

namespace App\Repository;

use App\Entity\Cles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cles[]    findAll()
 * @method Cles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cles::class);
    }

    // /**
    //  * @return Cles[] Returns an array of Cles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cles
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
