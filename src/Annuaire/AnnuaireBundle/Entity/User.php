<?php

namespace Annuaire\AnnuaireBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use \Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type_user", type="string")
 * @ORM\DiscriminatorMap({"admin" = "User", "membre" = "Membre", "prestataire" = "Prestataire"})
 */
class User extends BaseUser
{
    const Type_USER = 'admin';
    const Type_PRESTATAIRE = 'prestataire';
    const Type_MEMBRE = 'membre';
    
    
    public function __construct() {
        parent::__construct();
        $this->typeUser = User::Type_USER;
        $this->dateInscr = new DateTime();
        $this->confInscr = false;  
        $this->banni = false;
        $this->nmbEssais = null;  
        $this->images = new ArrayCollection();
    }
        
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Image", mappedBy="user")
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $prenom;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateInscr", type="datetime", nullable=true)
     */
    protected $dateInscr;

    /**
     * @var string
     *
     */
    protected $typeUser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confInscr", type="boolean", options={"default" : false})
     */
    protected $confInscr = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="banni", type="boolean", options={"default" : false})
     */
    protected $banni = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="nmbEssais", type="integer", nullable=true)
     */
    protected $nmbEssais = null;        

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
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateInscr
     *
     * @param \DateTime $dateInscr
     *
     * @return User
     */
    public function setDateInscr($dateInscr)
    {
        $this->dateInscr = $dateInscr;

        return $this;
    }

    /**
     * Get dateInscr
     *
     * @return \DateTime
     */
    public function getDateInscr()
    {
        return $this->dateInscr;
    }

    /**
     * Set confInscr
     *
     * @param boolean $confInscr
     *
     * @return User
     */
    public function setConfInscr($confInscr)
    {
        $this->confInscr = $confInscr;

        return $this;
    }

    /**
     * Get confInscr
     *
     * @return boolean
     */
    public function getConfInscr()
    {
        return $this->confInscr;
    }

    /**
     * Set banni
     *
     * @param boolean $banni
     *
     * @return User
     */
    public function setBanni($banni)
    {
        $this->banni = $banni;

        return $this;
    }

    /**
     * Get banni
     *
     * @return boolean
     */
    public function getBanni()
    {
        return $this->banni;
    }

    /**
     * Set nmbEssais
     *
     * @param integer $nmbEssais
     *
     * @return User
     */
    public function setNmbEssais($nmbEssais)
    {
        $this->nmbEssais = $nmbEssais;

        return $this;
    }

    /**
     * Get nmbEssais
     *
     * @return integer
     */
    public function getNmbEssais()
    {
        return $this->nmbEssais;
    }

    /**
     * Add image
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Image $image
     *
     * @return User
     */
    public function addImage(\Annuaire\AnnuaireBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Image $image
     */
    public function removeImage(\Annuaire\AnnuaireBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
    
    function getTypeuser() {
        return $this->typeUser;
    }

    function setTypeuser($typeuser) {
        $this->typeUser = $typeuser;
    }
    
    public function getFullName(){
	return sprintf("%s %s", $this->getFirstname(), $this->getLastname());
    }


}
