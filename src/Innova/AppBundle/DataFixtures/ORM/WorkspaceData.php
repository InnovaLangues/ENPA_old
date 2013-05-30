<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\Workspace;

class LoadWorkspaceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $workspace = new Workspace();
        $workspace->setName('Consulter un site web et discuter en groupe');
        $workspace->setIsPattern(true);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Créer une synthèse');
        $workspace->setIsPattern(true);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Tester une compétence');
        $workspace->setIsPattern(true);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Participer à un forum modéré');
        $workspace->setIsPattern(true);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Consulter un document vidéo');
        $workspace->setIsPattern(true);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Consulter un site web et discuter en groupe');
        $workspace->setIsPattern(false);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Tester le niveau B2');
        $workspace->setIsPattern(false);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Participer à un forum sur la culture italienne');
        $workspace->setIsPattern(false);

        $manager->persist($workspace);

        $workspace = new Workspace();
        $workspace->setName('Consulter une émission de la RAI');
        $workspace->setIsPattern(false);

        $manager->persist($workspace);

        $manager->flush();
    }

    public function getOrder()
    {
        return 6; // the order in which fixtures will be loaded
    }
}
