<?php

namespace App\Repository;

use App\Entity\InformAboutWorkPrograms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InformAboutWorkPrograms>
 *
 * @method InformAboutWorkPrograms|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformAboutWorkPrograms|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformAboutWorkPrograms[]    findAll()
 * @method InformAboutWorkPrograms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformAboutWorkProgramsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformAboutWorkPrograms::class);
    }

    public function save(InformAboutWorkPrograms $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InformAboutWorkPrograms $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InformAboutWorkPrograms[] Returns an array of InformAboutWorkPrograms objects
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

//    public function findOneBySomeField($value): ?InformAboutWorkPrograms
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
