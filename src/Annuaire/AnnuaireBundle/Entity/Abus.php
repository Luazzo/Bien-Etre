<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\AbusRepository")
 */
class Abus
{
    
    
    public function __construct() {
        $this->date = new \DateTime();        
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
     * @var Comment
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     */
    private $comment_id;    
    
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

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
     * Set description
     *
     * @param string $description
     *
     * @return Abus
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Abus
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
     * Set commentId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Comment $commentId
     *
     * @return Abus
     */
    public function setCommentId(\Annuaire\AnnuaireBundle\Entity\Comment $commentId = null)
    {
        $this->comment_id = $commentId;

        return $this;
    }

    /**
     * Get commentId
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Comment
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * Set userId
     *
     * @param \Annuaire\AnnuaireBundle\Entity\User $userId
     *
     * @return Abus
     */
    public function setUserId(\Annuaire\AnnuaireBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \Annuaire\AnnuaireBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
