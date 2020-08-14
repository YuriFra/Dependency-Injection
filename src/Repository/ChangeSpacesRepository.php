<?php

namespace App\Repository;

use App\Entity\ChangeSpaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChangeSpaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChangeSpaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChangeSpaces[]    findAll()
 * @method ChangeSpaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChangeSpacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChangeSpaces::class);
    }

    // /**
    //  * @return ChangeSpaces[] Returns an array of ChangeSpaces objects
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
    public function findOneBySomeField($value): ?ChangeSpaces
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
