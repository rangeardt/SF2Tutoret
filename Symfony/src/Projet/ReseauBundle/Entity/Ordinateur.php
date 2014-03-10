<?php

namespace Projet\ReseauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordinateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ReseauBundle\Entity\OrdinateurRepository")
 */
class Ordinateur
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
   * @ORM\ManyToOne(targetEntity="Projet\ReseauBundle\Entity\Salle")
   * @ORM\JoinColumn(nullable=false)
   */
     private $salle;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;
    /**
    * @ORM\OneToOne(targetEntity="Projet\ReseauBundle\Entity\ConfigPost")
    */
    private $config;

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
     * Set nom
     *
     * @param string $nom
     * @return Ordinateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set salle
     *
     * @param \Projet\ReseauBundle\Entity\Salle $salle
     * @return Ordinateur
     */
    public function setSalle(\Projet\ReseauBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \Projet\ReseauBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Ordinateur
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set config
     *
     * @param \Projet\ReseauBundle\Entity\ConfigPost $config
     * @return Ordinateur
     */
    public function setConfig(\Projet\ReseauBundle\Entity\ConfigPost $config = null)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return \Projet\ReseauBundle\Entity\ConfigPost 
     */
    public function getConfig()
    {
        return $this->config;
    }
}
