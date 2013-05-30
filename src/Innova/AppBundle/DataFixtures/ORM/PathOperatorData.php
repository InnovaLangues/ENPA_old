<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\PathOperator;

class LoadPathOperatorData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $pathOperator = new PathOperator();
        $pathOperator->setName('sequence');

        $manager->persist($pathOperator);

        $pathOperator = new PathOperator();
        $pathOperator->setName('non_ordered_sequence');

        $manager->persist($pathOperator);

        $pathOperator = new PathOperator();
        $pathOperator->setName('parallel');

        $manager->persist($pathOperator);

        $pathOperator = new PathOperator();
        $pathOperator->setName('alternative');

        $manager->persist($pathOperator);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
     }
}
