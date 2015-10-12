<?php

namespace Annuaire\AnnuaireBundle\Entity;

/**
 * Localite
 */
class Localite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
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
}

