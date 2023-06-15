<?php

namespace App\Repository;

use App\Entity\PsychologicalSupport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PsychologicalSupport>
 *
 * @method PsychologicalSupport|null find($id, $lockMode = null, $lockVersion = null)
 * @method PsychologicalSupport|null findOneBy(array $criteria, array $orderBy = null)
 * @method PsychologicalSupport[]    findAll()
 * @method PsychologicalSupport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PsychologicalSupportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PsychologicalSupport::class);
    }

    public function save(PsychologicalSupport $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PsychologicalSupport $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PsychologicalSupport[] Returns an array of PsychologicalSupport objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PsychologicalSupport
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
