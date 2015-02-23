<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\IndexCard;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

final class LoadIndexCardData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    function load(ObjectManager $manager)
    {
        $data = [
            [
                'frontSide' => 'Hallo Welt!',
                'backSide' => 'Hello World!',
                'tags' => [$this->getReference('tag-german-to-english')]
            ],
            [
                'frontSide' => 'Greetings',
                'backSide' => 'Grüße',
                'tags' => [$this->getReference('tag-english-to-german')]
            ]
        ];

        foreach ($data as $indexCardData) {
            $indexCard = new IndexCard();
            $indexCard->setFrontSide($indexCardData['frontSide']);
            $indexCard->setBackSide($indexCardData['backSide']);

            foreach ($indexCardData['tags'] as $tag) {
                $indexCard->addTag($tag);
            }

            $manager->persist($indexCard);
        }

        $manager->flush();
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
