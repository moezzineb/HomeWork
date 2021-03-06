<?php
/**
 * Created by PhpStorm.
 * User: Moez Zineb
 * Date: 12/05/2016
 * Time: 18:43
 */

namespace Web\TagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="competance")
 */
class Skill
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Web\UserBundle\Entity\User", inversedBy="id", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idAbonne;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



    /**
     * Set idAbonne
     *
     * @param \Web\UserBundle\Entity\User $idAbonne
     * @return Skill
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
}
