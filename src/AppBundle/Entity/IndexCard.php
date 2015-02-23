<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class IndexCard
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
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $frontSide;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $backSide;

    /**
     * @ORM\ManyToMany(targetEntity="Tag", mappedBy="indexCards")
     *
     * @var Tag[]
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
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
    public function getFrontSide()
    {
        return $this->frontSide;
    }

    /**
     * @param string $frontSide
     * @return $this
     */
    public function setFrontSide($frontSide)
    {
        $this->frontSide = $frontSide;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackSide()
    {
        return $this->backSide;
    }

    /**
     * @param string $backSide
     * @return $this
     */
    public function setBackSide($backSide)
    {
        $this->backSide = $backSide;

        return $this;
    }

    /**
     * @return Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Tag[] $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @param Tag $tag
     * @return $this
     */
    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }
}
