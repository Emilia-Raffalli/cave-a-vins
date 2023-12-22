<?php

namespace App\Repository;

use App\Entity\DepartmentInStore;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DepartmentInStore>
 *
 * @method DepartmentInStore|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepartmentInStore|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepartmentInStore[]    findAll()
 * @method DepartmentInStore[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartmentInStoreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DepartmentInStore::class);
    }

//    /**
//     * @return DepartmentInStore[] Returns an array of DepartmentInStore objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DepartmentInStore
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
