<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\PathStatusType;

class LoadPathStatusTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $pathStatusType = new PathStatusType();
        $pathStatusType->setName('public');

        $manager->persist($pathStatusType);

        $this->addReference('pathStatusType1', $pathStatusType);

        $pathStatusType = new PathStatusType();
        $pathStatusType->setName('private');

        $manager->persist($pathStatusType);

        $this->addReference('pathStatusType2', $pathStatusType);

        $manager->flush();
    }

    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}
