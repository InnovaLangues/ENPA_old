<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\NodeType;

class LoadNodeTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $nodeType = new NodeType();
        $nodeType->setName('operator');

        $manager->persist($nodeType);

        $nodeType = new NodeType();
        $nodeType->setName('workspace');

        $manager->persist($nodeType);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
