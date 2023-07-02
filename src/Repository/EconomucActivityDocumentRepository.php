<?php

namespace App\Repository;

use App\Entity\EconomucActivityDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EconomucActivityDocument>
 *
 * @method EconomucActivityDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method EconomucActivityDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method EconomucActivityDocument[]    findAll()
 * @method EconomucActivityDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EconomucActivityDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EconomucActivityDocument::class);
    }

    public function save(EconomucActivityDocument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EconomucActivityDocument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EconomucActivityDocument[] Returns an array of EconomucActivityDocument objects
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

//    public function findOneBySomeField($value): ?EconomucActivityDocument
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
