<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Vocabulary
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
     * @ORM\ManyToOne(targetEntity="Word")
     *
     * @var Word
     */
    private $wordOne;

    /**
     * @ORM\ManyToOne(targetEntity="Word")
     *
     * @var Word
     */
    private $wordTwo;

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
     * @return Word
     */
    public function getWordOne()
    {
        return $this->wordOne;
    }

    /**
     * @param Word $wordOne
     * @return $this
     */
    public function setWordOne(Word $wordOne)
    {
        $this->wordOne = $wordOne;

        return $this;
    }

    /**
     * @return Word
     */
    public function getWordTwo()
    {
        return $this->wordTwo;
    }

    /**
     * @param Word $wordTwo
     * @return $this
     */
    public function setWordTwo(Word $wordTwo)
    {
        $this->wordTwo = $wordTwo;

        return $this;
    }
}
