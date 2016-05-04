<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\CategorieRepository")
 */
class Categorie
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Prestataire", mappedBy="categories")
     * 
     */
    private $prestataires;

    public function __construct() {
        $this->prestataires = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @Gedmo\Slug(fields={"nom"})
     * @ORM\Column(length=128, unique=true)
     
    private $slug;*/

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enavant", type="boolean")
     */
    private $enavant;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    /**
     * @ORM\OneToOne(targetEntity="Image", cascade={"persist"})     * 
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    private $image;


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
     * @return Categorie
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
     * Set description
     *
     * @param string $description
     *
     * @return Categorie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set enavant
     *
     * @param boolean $enavant
     *
     * @return Categorie
     */
    public function setEnavant($enavant)
    {
        $this->enavant = $enavant;

        return $this;
    }

    /**
     * Get enavant
     *
     * @return boolean
     */
    public function getEnavant()
    {
        return $this->enavant;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     *
     * @return Categorie
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Add prestataire
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire
     *
     * @return Categorie
     */
    public function addPrestataire(\Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire)
    {
        $this->prestataires[] = $prestataire;

        return $this;
    }

    /**
     * Remove prestataire
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire
     */
    public function removePrestataire(\Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire)
    {
        $this->prestataires->removeElement($prestataire);
    }

    /**
     * Get prestataires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrestataires()
    {
        return $this->prestataires;
    }

    /**
     * Set image
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Image $image
     *
     * @return Categorie
     */
    public function setImage(\Annuaire\AnnuaireBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
