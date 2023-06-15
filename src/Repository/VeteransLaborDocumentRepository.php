<?php

namespace App\Repository;

use App\Entity\VeteransLaborDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VeteransLaborDocument>
 *
 * @method VeteransLaborDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method VeteransLaborDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method VeteransLaborDocument[]    findAll()
 * @method VeteransLaborDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeteransLaborDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VeteransLaborDocument::class);
    }

    public function save(VeteransLaborDocument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VeteransLaborDocument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VeteransLaborDocument[] Returns an array of VeteransLaborDocument objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VeteransLaborDocument
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
