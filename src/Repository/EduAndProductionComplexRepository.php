<?php

namespace App\Repository;

use App\Entity\EduAndProductionComplex;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EduAndProductionComplex>
 *
 * @method EduAndProductionComplex|null find($id, $lockMode = null, $lockVersion = null)
 * @method EduAndProductionComplex|null findOneBy(array $criteria, array $orderBy = null)
 * @method EduAndProductionComplex[]    findAll()
 * @method EduAndProductionComplex[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EduAndProductionComplexRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EduAndProductionComplex::class);
    }

    public function save(EduAndProductionComplex $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EduAndProductionComplex $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EduAndProductionComplex[] Returns an array of EduAndProductionComplex objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EduAndProductionComplex
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
