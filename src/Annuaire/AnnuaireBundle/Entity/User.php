<?php

namespace Annuaire\AnnuaireBundle\Entity;

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
class User
{
    public function __construct() {
        $this->dateInscr = new DateTime(); 
        $this->categories = new ArrayCollection();       
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
     * @ORM\ManyToOne(targetEntity="Codepost")
     * @ORM\JoinColumn(name="codepostal_id", referencedColumnName="id")
     */
    protected $codepost_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Commune")
     * @ORM\JoinColumn(name="commune_id", referencedColumnName="id")
     */
    protected $commune_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Localite")
     * @ORM\JoinColumn(name="localite_id", referencedColumnName="id")
     */
    protected $localite_id;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", cascade={"persist"})
     */
    protected $categories;

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
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist"})     * 
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    protected $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="motPass", type="string", length=255)
     */
    protected $motPass;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateInscr", type="datetime")
     */
    protected $dateInscr;

    /**
     * @var string
     *
     */
    protected $typeuser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confInscr", type="boolean")
     */
    protected $confInscr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="banni", type="boolean")
     */
    protected $banni;

    /**
     * @var integer
     *
     * @ORM\Column(name="nmbEssais", type="integer")
     */
    protected $nmbEssais;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255)
     */
    protected $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    protected $numero;
        

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
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set motPass
     *
     * @param string $motPass
     *
     * @return User
     */
    public function setMotPass($motPass)
    {
        $this->motPass = $motPass;

        return $this;
    }

    /**
     * Get motPass
     *
     * @return string
     */
    public function getMotPass()
    {
        return $this->motPass;
    }

    /**
     * Set dateInscr
     *
     * @param DateTime $dateInscr
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
     * @return DateTime
     */
    public function getDateInscr()
    {
        return $this->dateInscr;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     *
     * @return User
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    /**
     * Get typeuser
     *
     * @return string
     */
    public function getTypeuser()
    {
        return $this->typeuser;
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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return User
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return User
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set codepostId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Codepost $codepostId
     *
     * @return User
     */
    public function setCodepostId(\Annuaire\AnnuaireBundle\Entity\Codepost $codepostId = null)
    {
        $this->codepost_id = $codepostId;

        return $this;
    }

    /**
     * Get codepostId
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Codepost
     */
    public function getCodepostId()
    {
        return $this->codepost_id;
    }

    /**
     * Set communeId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Commune $communeId
     *
     * @return User
     */
    public function setCommuneId(\Annuaire\AnnuaireBundle\Entity\Commune $communeId = null)
    {
        $this->commune_id = $communeId;

        return $this;
    }

    /**
     * Get communeId
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Commune
     */
    public function getCommuneId()
    {
        return $this->commune_id;
    }

    /**
     * Set localiteId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Localite $localiteId
     *
     * @return User
     */
    public function setLocaliteId(\Annuaire\AnnuaireBundle\Entity\Localite $localiteId = null)
    {
        $this->localite_id = $localiteId;

        return $this;
    }

    /**
     * Get localiteId
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Localite
     */
    public function getLocaliteId()
    {
        return $this->localite_id;
    }

    /**
     * Add category
     *
     * @param \Annuaire\AnnuaireBundle\Entity\User $category
     *
     * @return User
     */
    public function addCategory(\Annuaire\AnnuaireBundle\Entity\User $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Annuaire\AnnuaireBundle\Entity\User $category
     */
    public function removeCategory(\Annuaire\AnnuaireBundle\Entity\User $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
