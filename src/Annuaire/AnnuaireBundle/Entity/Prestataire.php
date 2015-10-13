<?php

namespace Annuaire\AnnuaireBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Prestataire extends User
{
    public function __construct() {
        $this->typeuser = "prestataire";    
        
        $this->stages = new ArrayCollection();  
        
        $this->promos = new ArrayCollection();  
    }
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Stage", mappedBy="prest_id")
     */
    protected $stages;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Promo", mappedBy="prest_id")
     */
    protected $promos;

    /**
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist"})     * 
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    protected $logo;
    
    /**
     * @var string
     */
    private $nomprest;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $emailContact;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $tva;



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
     * Set emailContact
     *
     * @param string $emailContact
     *
     * @return Prestataire
     */
    public function setEmailContact($emailContact)
    {
        $this->emailContact = $emailContact;

        return $this;
    }

    /**
     * Get emailContact
     *
     * @return string
     */
    public function getEmailContact()
    {
        return $this->emailContact;
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
     * Add category
     *
     * @param \Annuaire\AnnuaireBundle\Entity\User $category
     *
     * @return Prestataire
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

    /**
     * Set logo
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Image $logo
     *
     * @return Prestataire
     */
    public function setLogo(\Annuaire\AnnuaireBundle\Entity\Image $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Image
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
