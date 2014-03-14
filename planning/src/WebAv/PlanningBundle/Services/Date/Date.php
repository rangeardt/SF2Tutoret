<?php


namespace Webav\PlanningBundle\Services\Date;
use \DateTime;
use \DateInterval;
class Date{
  public $days;
  public $mounth;
  public function __construct(){
    $this->days=array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
    $this->mounth=array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
  }
  public function getAll($year){
    $r=array();
    $date=new Datetime($year.'-01-01');
    while($date->format('Y')<=$year){
      $y=$date->format('Y');
      $m=$date->format('n');
      $d=$date->format('j');
      $w=str_replace('0', '7', $date->format('w'));
      $r[$y][$m][$d]=$d;
      $date->add(new DateInterval('P1D'));
    }
    return $r;
  }
  public function getAllJ($year){
    $r=array();
    $date=new Datetime($year.'-01-01');
    while($date->format('Y')<=$year){
      $y=$date->format('Y');
      $m=$date->format('n');
      $d=$date->format('j');
      $w=str_replace('0', '7', $date->format('w'));
      $r[$y][$m][$d]=$w;
      $date->add(new DateInterval('P1D'));
    }
    return $r;
  }
  

}
