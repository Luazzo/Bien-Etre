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
    private $membre_id;
    

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
     * Set membreId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Membre $membreId
     *
     * @return Favorite
     */
    public function setMembreId(\Annuaire\AnnuaireBundle\Entity\Membre $membreId = null)
    {
        $this->membre_id = $membreId;

        return $this;
    }

    /**
     * Get membreId
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Membre
     */
    public function getMembreId()
    {
        return $this->membre_id;
    }
}
