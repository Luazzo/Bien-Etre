<?php

    namespace Annuaire\AnnuaireBundle\Entity;
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     */
    class Membre extends User
    {

        public function __construct() {
            $this->typeUser = User::Type_MEMBRE;       

            $this->notes = new ArrayCollection();    
            $this->favorites = new ArrayCollection();    
            parent::__construct();
        }
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Favorite", mappedBy="membre")
     */
     private $favorites;
    
   
     
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

}
