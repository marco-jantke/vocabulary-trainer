<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Tag
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="IndexCard", inversedBy="tags")
     * @ORM\JoinTable(name="index_cards_tags")
     *
     * @var IndexCard[]
     */
    private $indexCards;

    public function __construct()
    {
        $this->indexCards = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return IndexCard[]
     */
    public function getIndexCards()
    {
        return $this->indexCards;
    }

    /**
     * @param IndexCard[] $indexCards
     */
    public function setIndexCards($indexCards)
    {
        $this->indexCards = $indexCards;
    }

    /**
     * @param IndexCard $indexCard
     * @return $this
     */
    public function addIndexCard(IndexCard $indexCard)
    {
        $this->indexCards[] = $indexCard;
        return $this;
    }
}
