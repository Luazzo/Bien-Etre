<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Localite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\LocaliteRepository")
 */
class Localite
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
     * @var Commune
     *
     * @ORM\ManyToOne(targetEntity="Commune", inversedBy="localites")
     * @ORM\JoinColumn(name="commune", referencedColumnName="id")
     */
    private $commune;
    
    /**
     * @var Codepost
     *
     * @ORM\ManyToOne(targetEntity="Codepost", inversedBy="localites")
     * @ORM\JoinColumn(name="codepost", referencedColumnName="id")
     */
    private $codepost;

    /**
     * @var 
     * @ORM\Column(name="localite", type="string", length=128)
     */
    private $localite;


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
     * Set localite
     *
     * @param string $localite
     *
     * @return Localite
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return string
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set commune
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Commune $commune
     *
     * @return Localite
     */
    public function setCommune(\Annuaire\AnnuaireBundle\Entity\Commune $commune = null)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Commune
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set codepost
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Codepost $codepost
     *
     * @return Localite
     */
    public function setCodepost(\Annuaire\AnnuaireBundle\Entity\Codepost $codepost = null)
    {
        $this->codepost = $codepost;

        return $this;
    }

    /**
     * Get codepost
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Codepost
     */
    public function getCodepost()
    {
        return $this->codepost;
    }
}
