<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Tag;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

final class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $germanToEnglish = new Tag();
        $germanToEnglish->setName('german-to-english');

        $englishToGerman = new Tag();
        $englishToGerman->setName('english-to-german');

        $manager->persist($germanToEnglish);
        $manager->persist($englishToGerman);
        $manager->flush();

        $this->addReference('tag-german-to-english', $germanToEnglish);
        $this->addReference('tag-english-to-german', $englishToGerman);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1;
    }
}
