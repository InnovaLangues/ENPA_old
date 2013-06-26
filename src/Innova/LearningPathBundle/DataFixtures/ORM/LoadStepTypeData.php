<?php

namespace Innova\LearningPathBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\LearningPathBundle\Entity\StepType;

/**
 * Class LoadStepTypeData
 * @package Innova\LearningPathBundle\DataFixtures\ORM
 */
class LoadStepTypeData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $stepType = new StepType();
        $stepType->setName('ordered_sequence');

        $manager->persist($stepType);

        $stepType = new StepType();
        $stepType->setName('non_ordered_sequence');

        $manager->persist($stepType);

        $stepType = new StepType();
        $stepType->setName('parallel');

        $manager->persist($stepType);

        $stepType = new StepType();
        $stepType->setName('interlace');

        $manager->persist($stepType);

        $stepType = new StepType();
        $stepType->setName('alternative');

        $manager->persist($stepType);

        $stepType = new StepType();
        $stepType->setName('iteration');

        $manager->persist($stepType);

        $manager->flush();
    }
}
