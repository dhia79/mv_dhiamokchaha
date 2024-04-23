<?php

namespace App\Repository;

use App\Entity\VynilMix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VynilMix>
 *
 * @method VynilMix|null find($id, $lockMode = null, $lockVersion = null)
 * @method VynilMix|null findOneBy(array $criteria, array $orderBy = null)
 * @method VynilMix[]    findAll()
 * @method VynilMix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VynilMixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VynilMix::class);
    }

    //    /**
    //     * @return VynilMix[] Returns an array of VynilMix objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('v.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?VynilMix
    //    {
    //        return $this->createQueryBuilder('v')
    //            ->andWhere('v.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
