<?php

namespace App\Repository;

use App\Entity\DataDPO;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DataDPO>
 *
 * @method DataDPO|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataDPO|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataDPO[]    findAll()
 * @method DataDPO[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataDPORepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataDPO::class);
    }

    //    /**
    //     * @return DataDPO[] Returns an array of DataDPO objects
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

    //    public function findOneBySomeField($value): ?DataDPO
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
