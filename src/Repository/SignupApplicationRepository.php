<?php

namespace App\Repository;

use App\Entity\SignupApplication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SignupApplication|null find($id, $lockMode = null, $lockVersion = null)
 * @method SignupApplication|null findOneBy(array $criteria, array $orderBy = null)
 * @method SignupApplication[]    findAll()
 * @method SignupApplication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignupApplicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SignupApplication::class);
    }

    // /**
    //  * @return SignupApplication[] Returns an array of SignupApplication objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SignupApplication
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
