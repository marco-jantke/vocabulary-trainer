<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Word;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

final class LoadWordData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $gehen = new Word();
        $gehen->setTerm('gehen');
        $gehen->setLanguage($this->getReference('language-german'));

        $go = new Word();
        $go->setTerm('to walk');
        $go->setLanguage($this->getReference('language-english'));

        $manager->persist($gehen);
        $manager->persist($go);
        $manager->flush();

        $this->addReference('word-gehen', $gehen);
        $this->addReference('word-go', $go);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 2;
    }
}
