<?php

namespace Innova\LearningPathBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\LearningPathBundle\Entity\OrganizationMode;

class LoadOrganizationModeData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $organizationMode = new OrganizationMode();
        $organizationMode->setName('ordered_sequence');

        $manager->persist($organizationMode);

        $organizationMode = new OrganizationMode();
        $organizationMode->setName('non_ordered_sequence');

        $manager->persist($organizationMode);

        $organizationMode = new OrganizationMode();
        $organizationMode->setName('parallel');

        $manager->persist($organizationMode);

        $organizationMode = new OrganizationMode();
        $organizationMode->setName('interlace');

        $manager->persist($organizationMode);

        $organizationMode = new OrganizationMode();
        $organizationMode->setName('alternative');

        $manager->persist($organizationMode);

        $organizationMode = new OrganizationMode();
        $organizationMode->setName('iteration');

        $manager->persist($organizationMode);

        $manager->flush();
    }
}
