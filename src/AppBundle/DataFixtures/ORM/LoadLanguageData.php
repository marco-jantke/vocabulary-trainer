<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Language;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

final class LoadLanguageData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $german = new Language();
        $german->setName('Deutsch');

        $english = new Language();
        $english->setName('English');

        $manager->persist($german);
        $manager->persist($english);
        $manager->flush();

        $this->addReference('language-german', $german);
        $this->addReference('language-english', $english);

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
