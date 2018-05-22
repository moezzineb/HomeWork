<?php
/**
 * Created by PhpStorm.
 * User: Moez Zineb
 * Date: 30/05/2016
 * Time: 05:12
 */
namespace Web\MessageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="message")
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idMsg;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Web\UserBundle\Entity\User", inversedBy="id", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $idAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="recepteur", type="string", length=255)
     */
    private $recepteur;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

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
    public function getIdMsg()
    {
        return $this->idMsg;
    }

    /**
     * @param mixed $idMsg
     */
    public function setIdMsg($idMsg)
    {
        $this->idMsg = $idMsg;
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
    public function getRecepteur()
    {
        return $this->recepteur;
    }

    /**
     * @param string $recepteur
     */
    public function setRecepteur($recepteur)
    {
        $this->recepteur = $recepteur;
    }

    /**
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param string $objet
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
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