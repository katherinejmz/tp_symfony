<?php

namespace App\Repository;

use App\Entity\KatherineJMZ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KatherineJMZ>
 *
 * @method KatherineJMZ|null find($id, $lockMode = null, $lockVersion = null)
 * @method KatherineJMZ|null findOneBy(array $criteria, array $orderBy = null)
 * @method KatherineJMZ[]    findAll()
 * @method KatherineJMZ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KatherineJMZRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KatherineJMZ::class);
    }

    public function add(KatherineJMZ $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(KatherineJMZ $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return KatherineJMZ[] Returns an array of KatherineJMZ objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?KatherineJMZ
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
