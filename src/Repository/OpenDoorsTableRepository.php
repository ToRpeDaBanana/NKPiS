<?php

namespace App\Repository;

use App\Entity\OpenDoorsTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OpenDoorsTable>
 *
 * @method OpenDoorsTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpenDoorsTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpenDoorsTable[]    findAll()
 * @method OpenDoorsTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpenDoorsTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpenDoorsTable::class);
    }

    public function save(OpenDoorsTable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OpenDoorsTable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OpenDoorsTable[] Returns an array of OpenDoorsTable objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OpenDoorsTable
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
