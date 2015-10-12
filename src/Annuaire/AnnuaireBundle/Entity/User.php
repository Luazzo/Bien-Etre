<?php

namespace Annuaire\AnnuaireBundle\Entity;


/**
 * @ORM\Table()
 * @ORM\Entity()
 * @ORM\MappedSuperclass
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type_user", type="string")
 * @DiscriminatorMap({"admin" = "User", "membre" = "Membre", "prestataire" = "Prestataire"})
 */
class User
{
    public function __construct() {
        $this->dateInscr = new \DateTime();        
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
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255)
     */
    protected $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="motPass", type="string", length=255)
     */
    protected $motPass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscr", type="datetime")
     */
    protected $dateInscr;

    /**
     * @var string
     *
     * @ORM\Column(name="type_user", type="string", length=255)
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
}

