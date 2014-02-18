<?php

namespace Projet\ReseauBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Projet\ReseauBundle\Entity\Salle;
class Salles implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {

    $noms = array('info12', 'info21', 'info22','info23','info24','info25','info26','info27');
    $identificateur = array('info12', 'info21', 'info22','info23','info24','info25','info26','info27');
    foreach($noms as $i => $nom)
    {
  
      $liste_Salle[$i] = new Salle();
      $liste_Salle[$i]->setNom($nom);  
  
    }
     foreach($identificateur as $i => $iden)
    {
      $liste_Salle[$i]->setIdentificateur($iden);  
      $manager->persist($liste_Salle[$i]);
    }


    $manager->flush();
  }
}