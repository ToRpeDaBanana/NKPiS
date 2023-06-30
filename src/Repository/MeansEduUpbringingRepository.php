<?php

namespace App\Repository;

use App\Entity\MeansEduUpbringing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MeansEduUpbringing>
 *
 * @method MeansEduUpbringing|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeansEduUpbringing|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeansEduUpbringing[]    findAll()
 * @method MeansEduUpbringing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeansEduUpbringingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MeansEduUpbringing::class);
    }

    public function save(MeansEduUpbringing $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(MeansEduUpbringing $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return MeansEduUpbringing[] Returns an array of MeansEduUpbringing objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MeansEduUpbringing
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
