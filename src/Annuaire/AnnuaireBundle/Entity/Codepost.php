<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Codepost
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\CodepostRepository")
 */
class Codepost
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
     * @ORM\OneToMany(targetEntity="Annuaire\AnnuaireBundle\Entity\Localite", mappedBy="codepost")
     */
     private $localites; 

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;


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
     * Set code
     *
     * 
     * @param string $code
     *
     * @return Codepost
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    

    /**
     * Add localite
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Localite $localite
     *
     * @return Codepost
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
