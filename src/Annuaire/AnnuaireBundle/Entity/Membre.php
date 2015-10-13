<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Membre extends User
{
    
    public function __construct() {
        $this->typeuser = "membre";       
        $this->comments = new ArrayCollection();   
        $this->notes = new ArrayCollection();    
        $this->favorites = new ArrayCollection();    
    }
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Favorite", mappedBy="membre")
     */
     private $favorites;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Comment", mappedBy="membre")
     */
     private $comments; 
     
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Note", mappedBy="membre")
     */
     private $notes; 

    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean")
     *
     */
    private $newsletter;



    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Membre
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Add comment
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Comment $comment
     *
     * @return Membre
     */
    public function addComment(\Annuaire\AnnuaireBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Comment $comment
     */
    public function removeComment(\Annuaire\AnnuaireBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add note
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Note $note
     *
     * @return Membre
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
     * Add favorite
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Favorite $favorite
     *
     * @return Membre
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
     * Set codepostId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Codepost $codepostId
     *
     * @return Membre
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
     * @return Membre
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
     * @return Membre
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
     * @return Membre
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
