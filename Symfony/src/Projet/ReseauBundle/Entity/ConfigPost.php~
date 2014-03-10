<?php

namespace Projet\ReseauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigPost
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\ReseauBundle\Entity\ConfigPostRepository")
 */
class ConfigPost
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
     * @ORM\OneToOne(targetEntity="Projet\ReseauBundle\Entity\Etudiant")
    */
    private $etudiant;

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
     * Set post
     *
     * @param \Projet\ReseauBundle\Entity\Ordinateur $post
     * @return ConfigPost
     */
    public function setPost(\Projet\ReseauBundle\Entity\Ordinateur $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Projet\ReseauBundle\Entity\Ordinateur 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set etudiant
     *
     * @param \Projet\ReseauBundle\Entity\Etudiant $etudiant
     * @return ConfigPost
     */
    public function setEtudiant(\Projet\ReseauBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Projet\ReseauBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}
