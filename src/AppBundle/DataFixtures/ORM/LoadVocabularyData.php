<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Vocabulary;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

final class LoadVocabularyData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $vocabularyOne = new Vocabulary();
        $vocabularyOne->setWordOne($this->getReference('word-gehen'));
        $vocabularyOne->setWordTwo($this->getReference('word-go'));

        $manager->persist($vocabularyOne);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 3;
    }
}
