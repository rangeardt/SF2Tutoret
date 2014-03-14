<?php

namespace WebAv\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($year)
    {

    	 $ServiceDate = $this->container->get('webav_planning.date');

   		$dates=$ServiceDate->getAll($year);
		$datesJ=$ServiceDate->getAllJ($year);
        $mois=$this->getRequest()->query->get('mois');
        if( $mois == null ) $mois=date('n')-1;
        return $this->render('WebAvPlanningBundle:Default:index.html.twig', array(
        	'dates' => $dates ,
        	'datesJ' => $datesJ,
            'year'=>$year,
            'mois'=>$mois,
            'mounth'=>$ServiceDate->mounth,
            'days'=>$ServiceDate->days,
        	));
    }
}
