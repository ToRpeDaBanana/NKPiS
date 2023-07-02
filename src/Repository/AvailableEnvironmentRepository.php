<?php

namespace App\Repository;

use App\Entity\AvailableEnvironment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AvailableEnvironment>
 *
 * @method AvailableEnvironment|null find($id, $lockMode = null, $lockVersion = null)
 * @method AvailableEnvironment|null findOneBy(array $criteria, array $orderBy = null)
 * @method AvailableEnvironment[]    findAll()
 * @method AvailableEnvironment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvailableEnvironmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AvailableEnvironment::class);
    }

    public function save(AvailableEnvironment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AvailableEnvironment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AvailableEnvironment[] Returns an array of AvailableEnvironment objects
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

//    public function findOneBySomeField($value): ?AvailableEnvironment
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
