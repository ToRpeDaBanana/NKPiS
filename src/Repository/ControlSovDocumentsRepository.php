<?php

namespace App\Repository;

use App\Entity\ControlSovDocuments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlSovDocuments>
 *
 * @method ControlSovDocuments|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlSovDocuments|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlSovDocuments[]    findAll()
 * @method ControlSovDocuments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlSovDocumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlSovDocuments::class);
    }

    public function save(ControlSovDocuments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControlSovDocuments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControlSovDocuments[] Returns an array of ControlSovDocuments objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ControlSovDocuments
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
