<?php

namespace App\Repository;

use App\Entity\Bottel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bottel>
 *
 * @method Bottel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bottel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bottel[]    findAll()
 * @method Bottel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BottelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bottel::class);
    }

//    /**
//     * @return Bottel[] Returns an array of Bottel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bottel
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
