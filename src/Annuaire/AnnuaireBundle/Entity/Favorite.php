<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favorite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\FavoriteRepository")
 */
class Favorite
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
     * @var Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre", inversedBy="favorites")
     * @ORM\JoinColumn(name="membre_id", referencedColumnName="id")
     */
    private $membre;
    
    /**
     * @var Prestataire
     *
     * @ORM\ManyToOne(targetEntity="Prestataire", inversedBy="favorites")
     * @ORM\JoinColumn(name="prestataire_id", referencedColumnName="id")
     */
    
    private $prestataire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Favorite
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set membre
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Membre $membre
     *
     * @return Favorite
     */
    public function setMembre(\Annuaire\AnnuaireBundle\Entity\Membre $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Membre
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set prestataire
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire
     *
     * @return Favorite
     */
    public function setPrestataire(\Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire = null)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }
}
