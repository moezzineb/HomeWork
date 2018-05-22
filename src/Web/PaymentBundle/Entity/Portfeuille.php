<?php
/**
 * Created by PhpStorm.
 * User: Moez Zineb
 * Date: 30/05/2016
 * Time: 04:37
 */
namespace Web\PaymentBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="portfeuille")
 */
class Portfeuille
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPortfeuil;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Web\UserBundle\Entity\User", inversedBy="id", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="sold", type="integer", length=255)
     */
    private $sold;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="datetime", length=255)
     */
    private $date;

    /**
     * @return mixed
     */
    public function getIdPortfeuil()
    {
        return $this->idPortfeuil;
    }

    /**
     * @param mixed $idPortfeuil
     */
    public function setIdPortfeuil($idPortfeuil)
    {
        $this->idPortfeuil = $idPortfeuil;
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
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @param string $sold
     */
    public function setSold($sold)
    {
        $this->sold = $sold;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    
    
}
