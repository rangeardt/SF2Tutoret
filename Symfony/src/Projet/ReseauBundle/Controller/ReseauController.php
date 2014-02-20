<?php

namespace Projet\ReseauBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\ReseauBundle\Entity\Salle;
use Projet\ReseauBundle\Entity\ConfigSalle;
class  ReseauController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjetReseauBundle:Reseau:index.html.twig');
    }
     public function apercuAction()
    {
        return $this->render('ProjetReseauBundle:Reseau:apercu.html.twig');
    }
    public function voirSalleAction($id)
    {

        return $this->render('ProjetReseauBundle:Reseau:voirSalle.html.twig',array('id'=>$id));
    }
    public function menuApercuSalleAction()
    {
    	$liste = $this->getDoctrine()
                  ->getManager()
                  ->getRepository('ProjetReseauBundle:Salle')
                  ->findAll();
    return $this->render('ProjetReseauBundle:Reseau:menuApercuSalle.html.twig', array(
										      'liste_salle' => $liste// C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
    }


     public function voirDonneeSalleAction($id)
    {
    	$salle= array(
    		'id'=>$id,
    		'nom'=>'info21'

    		);
    	$liste = array(
    		array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>0
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>0
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>1
    		),array(
    			'id'=>1,
    			'user'=>'thomas',
    			'allumer'=>0
    		));
    return $this->render('ProjetReseauBundle:Reseau:salle.html.twig', array(
      'salle'=>$salle,
      'liste_post' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
    }
}
