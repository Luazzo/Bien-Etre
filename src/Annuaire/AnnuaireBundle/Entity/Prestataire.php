<?php

    namespace Annuaire\AnnuaireBundle\Entity;
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\PrestataireRepository")
     */
    class Prestataire extends User
    {
        public function __construct() {
            $this->typeUser = User::Type_PRESTATAIRE;    
            $this->stages = new ArrayCollection();  
            $this->promos = new ArrayCollection();  
            $this->categories = new ArrayCollection();
            $this->favorites = new ArrayCollection();
            parent::__construct();
        }
    
    /**
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="prestataires")
     * @ORM\JoinTable(name="prestataires_categories")
     */
    protected $categories;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Favorite", mappedBy="prestataire")
     */
    private $favorites;
     
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Note", mappedBy="prestataire")
     */
    private $notes; 
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Stage", mappedBy="prestataire")
     */
    private $stages;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Promo", mappedBy="prestataire")
     */
    private $promos;
    
    /**
     * @ORM\OneToOne(targetEntity="Codepost")
     * @ORM\JoinColumn(name="codepost_id", referencedColumnName="id")
     */
    private $codepost_id;
    
    /**
     * @ORM\OneToOne(targetEntity="Commune")
     * @ORM\JoinColumn(name="commune_id", referencedColumnName="id")
     */
    private $commune_id;
    
    /**
     * @ORM\OneToOne(targetEntity="Localite")
     * @ORM\JoinColumn(name="localite_id", referencedColumnName="id")
     */
    private $localite_id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom_prest", type="string", length=255, nullable=true)
     */
    private $nomprest;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=255, nullable=true)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=true)
     */
    private $numero;

    /**
     * @var string
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var string
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     * @ORM\Column(name="tva", type="string", length=255, nullable=true)
     */
    private $tva;


    /**
     * Set rue
     *
     * @param string $rue
     *
     * @return Prestataire
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
     * @return Prestataire
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
     * Set site
     *
     * @param string $site
     *
     * @return Prestataire
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Prestataire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Prestataire
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }


    /**
     * Add favorite
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Favorite $favorite
     *
     * @return Prestataire
     */
    public function addFavorite(\Annuaire\AnnuaireBundle\Entity\Favorite $favorite)
    {
        $this->favorites[] = $favorite;

        return $this;
    }

    /**
     * Remove favorite
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Favorite $favorite
     */
    public function removeFavorite(\Annuaire\AnnuaireBundle\Entity\Favorite $favorite)
    {
        $this->favorites->removeElement($favorite);
    }

    /**
     * Get favorites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Add note
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Note $note
     *
     * @return Prestataire
     */
    public function addNote(\Annuaire\AnnuaireBundle\Entity\Note $note)
    {
        $this->notes[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Note $note
     */
    public function removeNote(\Annuaire\AnnuaireBundle\Entity\Note $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add stage
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Stage $stage
     *
     * @return Prestataire
     */
    public function addStage(\Annuaire\AnnuaireBundle\Entity\Stage $stage)
    {
        $this->stages[] = $stage;

        return $this;
    }

    /**
     * Remove stage
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Stage $stage
     */
    public function removeStage(\Annuaire\AnnuaireBundle\Entity\Stage $stage)
    {
        $this->stages->removeElement($stage);
    }

    /**
     * Get stages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStages()
    {
        return $this->stages;
    }

    /**
     * Add promo
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Promo $promo
     *
     * @return Prestataire
     */
    public function addPromo(\Annuaire\AnnuaireBundle\Entity\Promo $promo)
    {
        $this->promos[] = $promo;

        return $this;
    }

    /**
     * Remove promo
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Promo $promo
     */
    public function removePromo(\Annuaire\AnnuaireBundle\Entity\Promo $promo)
    {
        $this->promos->removeElement($promo);
    }

    /**
     * Get promos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromos()
    {
        return $this->promos;
    }

    /**
     * Set codepostId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Codepost $codepostId
     *
     * @return Prestataire
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
     * @return Prestataire
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
     * @return Prestataire
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
     * Set nomprest
     *
     * @param string $nomprest
     *
     * @return Prestataire
     */
    public function setNomprest($nomprest)
    {
        $this->nomprest = $nomprest;

        return $this;
    }

    /**
     * Get nomprest
     *
     * @return string
     */
    public function getNomprest()
    {
        return $this->nomprest;
    }

    /**
     * Add categorie
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Categorie $categorie
     *
     * @return Prestataire
     */
    public function addCategorie(\Annuaire\AnnuaireBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Categorie $categorie
     */
    public function removeCategory(\Annuaire\AnnuaireBundle\Entity\Categorie $categorie)
    {
        $this->categories->removeElement($categorie);
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