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
    }
    
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="membre")
     */
     private $comments; 
     
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Note", mappedBy="membre")
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
}

