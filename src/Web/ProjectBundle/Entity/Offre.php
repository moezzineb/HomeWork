<?php
/**
 * Created by PhpStorm.
 * User: Moez Zineb
 * Date: 07/05/2016
 * Time: 18:03
 */

namespace Web\ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="offre")
 */
class Offre {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="delai", type="integer", length=255)
     */
    private $delai;

    /**
     * @var string
     *
     * @ORM\Column(name="cout", type="float", length=255)
     */
    private $cout;

    /**
     * @var string
     *
     * @ORM\Column(name="dateOffre", type="datetime", length=255)
     */
    private $dateOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255)
     */
    private $details;

    /**
     * @ORM\ManyToOne(targetEntity="Web\UserBundle\Entity\User", inversedBy="id", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAbonne;

    /**
     * @ORM\ManyToOne(targetEntity="Web\ProjectBundle\Entity\Projet", inversedBy="idProjet", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id_projet", onDelete="CASCADE")
     *
     */
    private $idProjet;



    /**
     * Get idOffre
     *
     * @return integer 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Set delai
     *
     * @param integer $delai
     * @return Offre
     */
    public function setDelai($delai)
    {
        $this->delai = $delai;

        return $this;
    }

    /**
     * Get delai
     *
     * @return integer 
     */
    public function getDelai()
    {
        return $this->delai;
    }

    /**
     * Set cout
     *
     * @param float $cout
     * @return Offre
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return float 
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set dateOffre
     *
     * @param \DateTime $dateOffre
     * @return Offre
     */
    public function setDateOffre($dateOffre)
    {
        $this->dateOffre = $dateOffre;

        return $this;
    }

    /**
     * Get dateOffre
     *
     * @return \DateTime 
     */
    public function getDateOffre()
    {
        return $this->dateOffre;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Offre
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Offre
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set idAbonne
     *
     * @param \Web\UserBundle\Entity\User $idAbonne
     * @return Offre
     */
    public function setIdAbonne(\Web\UserBundle\Entity\User $idAbonne)
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

    /**
     * Get idAbonne
     *
     * @return \Web\UserBundle\Entity\User 
     */
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }

    /**
     * Set idProjet
     *
     * @param \Web\ProjectBundle\Entity\Projet $idProjet
     * @return Offre
     */
    public function setIdProjet(\Web\ProjectBundle\Entity\Projet $idProjet)
    {
        $this->idProjet = $idProjet;
    }

    /**
     * Get idProjet
     *
     * @return \Web\ProjectBundle\Entity\Projet
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }
    

}
