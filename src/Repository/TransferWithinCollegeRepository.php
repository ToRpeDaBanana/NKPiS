<?php

namespace App\Repository;

use App\Entity\TransferWithinCollege;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TransferWithinCollege>
 *
 * @method TransferWithinCollege|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransferWithinCollege|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransferWithinCollege[]    findAll()
 * @method TransferWithinCollege[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransferWithinCollegeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransferWithinCollege::class);
    }

    public function save(TransferWithinCollege $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TransferWithinCollege $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TransferWithinCollege[] Returns an array of TransferWithinCollege objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TransferWithinCollege
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
