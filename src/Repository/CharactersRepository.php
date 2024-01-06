<?php

namespace App\Repository;

use App\Entity\Characters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Characters>
 *
 * @method Characters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Characters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Characters[]    findAll()
 * @method Characters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharactersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Characters::class);
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEm(): EntityManagerInterface
    {
        return $this->_em;
    }
}
