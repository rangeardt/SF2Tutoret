<?php

namespace Projet\ReseauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigSalle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ReseauBundle\Entity\ConfigSalleRepository")
 */
class ConfigSalle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbpctotal", type="integer")
     */
    private $nbpctotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbpcallume", type="integer")
     */
    private $nbpcallume;
    /**
     * @var integer
     *
     * @ORM\Column(name="nbpcoccuper", type="integer")
     */
    private $nbpcoccuper;

    public function __contruct(){
      $this->date=new Datetime();
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ConfigSalle
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbpctotal
     *
     * @param integer $nbpctotal
     * @return ConfigSalle
     */
    public function setNbpctotal($nbpctotal)
    {
        $this->nbpctotal = $nbpctotal;

        return $this;
    }

    /**
     * Get nbpctotal
     *
     * @return integer 
     */
    public function getNbpctotal()
    {
        return $this->nbpctotal;
    }

    /**
     * Set nbpcallume
     *
     * @param integer $nbpcallume
     * @return ConfigSalle
     */
    public function setNbpcallume($nbpcallume)
    {
        $this->nbpcallume = $nbpcallume;

        return $this;
    }

    /**
     * Get nbpcallume
     *
     * @return integer 
     */
    public function getNbpcallume()
    {
        return $this->nbpcallume;
    }

    /**
     * Set nbpcoccuper
     *
     * @param integer $nbpcoccuper
     * @return ConfigSalle
     */
    public function setNbpcoccuper($nbpcoccuper)
    {
        $this->nbpcoccuper = $nbpcoccuper;

        return $this;
    }

    /**
     * Get nbpcoccuper
     *
     * @return integer 
     */
    public function getNbpcoccuper()
    {
        return $this->nbpcoccuper;
    }
}
