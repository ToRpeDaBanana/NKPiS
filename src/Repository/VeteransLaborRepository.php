<?php

namespace App\Repository;

use App\Entity\VeteransLabor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VeteransLabor>
 *
 * @method VeteransLabor|null find($id, $lockMode = null, $lockVersion = null)
 * @method VeteransLabor|null findOneBy(array $criteria, array $orderBy = null)
 * @method VeteransLabor[]    findAll()
 * @method VeteransLabor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeteransLaborRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VeteransLabor::class);
    }

    public function save(VeteransLabor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VeteransLabor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VeteransLabor[] Returns an array of VeteransLabor objects
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

//    public function findOneBySomeField($value): ?VeteransLabor
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
