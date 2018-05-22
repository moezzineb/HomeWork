<?php
/**
 * Created by PhpStorm.
 * User: Moez Zineb
 * Date: 06/05/2016
 * Time: 03:24
 */

namespace Web\ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="projet")
 */
class Projet {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Web\ProjectBundle\Entity\Offre", mappedBy="idProjet", cascade={"persist","remove"})
     */
    private $idProjet;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Web\UserBundle\Entity\User", inversedBy="id", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="integer", length=255)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="budget", type="string", length=255)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="dateDebut", type="datetime", length=255)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="freelancer", type="string", length=255)
     */
    private $freelancer;

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * @param mixed $idProjet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }

    /**
     * @return mixed
     */
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }

    /**
     * @param mixed $idAbonne
     */
    public function setIdAbonne($idAbonne)
    {
        $this->idAbonne = $idAbonne;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param string $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param string $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param string $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getFreelancer()
    {
        return $this->freelancer;
    }

    /**
     * @param string $freelancer
     */
    public function setFreelancer($freelancer)
    {
        $this->freelancer = $freelancer;
    }
    
    
}
