<?php

namespace Projet\ReseauBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\ReseauBundle\Entity\Salle;
use Projet\ReseauBundle\Entity\ConfigSalle;
use Projet\ReseauBundle\Entity\Ordinateur;
class  ReseauController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetReseauBundle:Reseau:index.html.twig');
    }
    public function serviceAction()
    {
        $service=array(
          array(
            'titre'=>'Aperçu Réseau',
            'desc'=>'Donne un aperçu rapide du réseau ( chaque salle ) ...',
            'route'=>'Projet_reseauGlobal'

            ),
          );

        return $this->render('ProjetReseauBundle:Reseau:service.html.twig',array(
          'liste_service'=>$service

        ));
    }
       public function reseauGlobalAction()
    {
        
      $liste = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('ProjetReseauBundle:Salle')
                  ->findAll();
    return $this->render('ProjetReseauBundle:Reseau:reseauGlobal.html.twig', array(
                          'liste_salle' => $liste// C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
    }
    public function reseauSalleViewAction($salle)
    {
          $salle = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('ProjetReseauBundle:Salle')
                  ->findOneByNom($salle);
         $liste = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('ProjetReseauBundle:Ordinateur')
                        ->findById($salle->getId());
    return $this->render('ProjetReseauBundle:Reseau:reseauSalleView.html.twig', array(
      'salle'=>$salle,
      'liste_post' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));

    }

}
