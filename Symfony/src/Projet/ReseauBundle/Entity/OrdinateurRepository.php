<?php

namespace Projet\ReseauBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Projet\ReseauBundle\Entity\Ordinateur;
use Projet\ReseauBundle\Entity\Salle;
/**
 * OrdinateurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrdinateurRepository extends EntityRepository
{

public function findById($id)
{
  // On utilise le QueryBuilder créé par le repository directement pour gagner du temps
  // Plus besoin de faire le select() ni le from() par la suite donc

$qb = $this->createQueryBuilder('p');

  $qb->where('p.salle = :salle')
      ->setParameter('salle', $id);


  return $qb->getQuery()
            ->getResult();
}
}