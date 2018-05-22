<?php

namespace Web\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
*@ORM\Entity
 *@ORM\HasLifecycleCallbacks
 *
*@ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\OneToMany(targetEntity="Web\ProjectBundle\Entity\Projet", mappedBy="idAbonne", cascade={"persist","remove"})
    * @ORM\OneToMany(targetEntity="Web\ProjectBundle\Entity\Offre", mappedBy="idAbonne", cascade={"persist","remove"})
    * @ORM\OneToMany(targetEntity="Web\TagBundle\Entity\Skill", mappedBy="id", cascade={"persist","remove"})
    * @ORM\OneToMany(targetEntity="Web\PortfolioBundle\Entity\Portfolio", mappedBy="idAbonne", cascade={"persist","remove"})
    * @ORM\OneToMany(targetEntity="Web\PaymentBundle\Entity\Portfeuille", mappedBy="idAbonne", cascade={"persist","remove"})
    * @ORM\OneToMany(targetEntity="Web\MessageBundle\Entity\Message", mappedBy="idAbonne", cascade={"persist","remove"})
    */
   protected $id;

    /**
     * @return mixed
     */


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    
    
    protected $nom;

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */

    protected $prenom;

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=true)
     */
    protected $telephone;

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="biolographie", type="text", length=500, nullable=true)
     */
    protected $biolographie;

    /**
     * @return string
     */
    public function getBiolographie()
    {
        return $this->biolographie;
    }

    /**
     * @param string $biolographie
     */
    public function setBiolographie($biolographie)
    {
        $this->biolographie = $biolographie;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    protected $country;

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    protected $city;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=255, nullable=true)
     */
    protected $speciality;

    /**
     * @return string
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param string $speciality
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=255, nullable=true)
     */
    protected $societe;

    /**
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    protected $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */
    public $path;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename . '.' . $this->file->guessExtension();
        }
    }
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }


    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file)
        {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->path);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($this->file)
        {
            if (file_exists($this->file) &&
                is_writable($this->file))
            {
                unlink ( $this->file );
            }
        }


    }

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->id.'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir().'/'.$this->id;
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/profile';
    }



    public function __construct()
    {
        parent::__construct();

    }
    public function getExpiresAt() {
        return $this->expiresAt;
    }
    

    /**
     * Set path
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
