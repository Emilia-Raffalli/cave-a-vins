<?php

namespace App\Repository;

use App\Entity\WineType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WineType>
 *
 * @method WineType|null find($id, $lockMode = null, $lockVersion = null)
 * @method WineType|null findOneBy(array $criteria, array $orderBy = null)
 * @method WineType[]    findAll()
 * @method WineType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WineTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WineType::class);
    }

//    /**
//     * @return WineType[] Returns an array of WineType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WineType
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
