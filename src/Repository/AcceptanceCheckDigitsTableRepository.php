<?php

namespace App\Repository;

use App\Entity\AcceptanceCheckDigitsTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AcceptanceCheckDigitsTable>
 *
 * @method AcceptanceCheckDigitsTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcceptanceCheckDigitsTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcceptanceCheckDigitsTable[]    findAll()
 * @method AcceptanceCheckDigitsTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcceptanceCheckDigitsTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AcceptanceCheckDigitsTable::class);
    }

    public function save(AcceptanceCheckDigitsTable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AcceptanceCheckDigitsTable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AcceptanceCheckDigitsTable[] Returns an array of AcceptanceCheckDigitsTable objects
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

//    public function findOneBySomeField($value): ?AcceptanceCheckDigitsTable
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
