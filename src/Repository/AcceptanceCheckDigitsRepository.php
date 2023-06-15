<?php

namespace App\Repository;

use App\Entity\AcceptanceCheckDigits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AcceptanceCheckDigits>
 *
 * @method AcceptanceCheckDigits|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcceptanceCheckDigits|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcceptanceCheckDigits[]    findAll()
 * @method AcceptanceCheckDigits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcceptanceCheckDigitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AcceptanceCheckDigits::class);
    }

    public function save(AcceptanceCheckDigits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AcceptanceCheckDigits $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AcceptanceCheckDigits[] Returns an array of AcceptanceCheckDigits objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AcceptanceCheckDigits
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
