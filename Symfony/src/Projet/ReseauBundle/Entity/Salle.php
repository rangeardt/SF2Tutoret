<?php

namespace Projet\ReseauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ReseauBundle\Entity\SalleRepository")
 */
class Salle
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
     * @var string
     *
     * @ORM\Column(name="identificateur", type="string", length=255)
     */
    private $identificateur;
  /**
   * @ORM\OneToOne(targetEntity="Projet\ReseauBundle\Entity\ConfigSalle", cascade={"persist"})
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
     * @return Salle
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
     * Set identificateur
     *
     * @param string $identificateur
     * @return Salle
     */
    public function setIdentificateur($identificateur)
    {
        $this->identificateur = $identificateur;

        return $this;
    }

    /**
     * Get identificateur
     *
     * @return string 
     */
    public function getIdentificateur()
    {
        return $this->identificateur;
    }

    /**
     * Set config
     *
     * @param \Projet\ReseauBundle\Entity\ConfigSalle $config
     * @return Salle
     */
    public function setConfig(\Projet\ReseauBundle\Entity\ConfigSalle $config = null)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return \Projet\ReseauBundle\Entity\ConfigSalle 
     */
    public function getConfig()
    {
        return $this->config;
    }
}
