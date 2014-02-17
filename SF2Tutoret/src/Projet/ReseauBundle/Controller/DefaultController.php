<?php

namespace Projet\ReseauBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProjetReseauBundle:Default:index.html.twig', array('name' => $name));
    }
}
