<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codepost
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\CodepostRepository")
 */
class Codepost
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
    
    
}
