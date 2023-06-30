<?php

namespace App\Repository;

use App\Entity\InformOfRealizeEduProgram;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InformOfRealizeEduProgram>
 *
 * @method InformOfRealizeEduProgram|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformOfRealizeEduProgram|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformOfRealizeEduProgram[]    findAll()
 * @method InformOfRealizeEduProgram[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformOfRealizeEduProgramRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformOfRealizeEduProgram::class);
    }

    public function save(InformOfRealizeEduProgram $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InformOfRealizeEduProgram $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InformOfRealizeEduProgram[] Returns an array of InformOfRealizeEduProgram objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InformOfRealizeEduProgram
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
