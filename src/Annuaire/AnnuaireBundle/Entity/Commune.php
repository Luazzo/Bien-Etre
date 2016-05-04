<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity
 */
class Commune
{
    
    public function __construct() {
        $this->localites = new ArrayCollection();    
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Localite", mappedBy="commune")
     */
     private $localites; 

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255)
     */
    private $commune;


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
     * Set commune
     *
     * @param string $commune
     *
     * @return Commune
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Add localite
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Localite $localite
     *
     * @return Commune
     */
    public function addLocalite(\Annuaire\AnnuaireBundle\Entity\Localite $localite)
    {
        $this->localites[] = $localite;

        return $this;
    }

    /**
     * Remove localite
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Localite $localite
     */
    public function removeLocalite(\Annuaire\AnnuaireBundle\Entity\Localite $localite)
    {
        $this->localites->removeElement($localite);
    }

    /**
     * Get localites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocalites()
    {
        return $this->localites;
    }
}
