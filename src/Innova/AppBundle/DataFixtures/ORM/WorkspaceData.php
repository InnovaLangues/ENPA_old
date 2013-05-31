<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\Workspace;

class LoadWorkspaceData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $workspace1 = new Workspace();
        $workspace1->setName('Consulter un site web et discuter en groupe');
        $workspace1->setIsPattern(true);

        $manager->persist($workspace1);

        $workspace2 = new Workspace();
        $workspace2->setName('Créer une synthèse');
        $workspace2->setIsPattern(true);

        $manager->persist($workspace2);

        $workspace3 = new Workspace();
        $workspace3->setName('Tester une compétence');
        $workspace3->setIsPattern(true);

        $manager->persist($workspace3);

        $workspace4 = new Workspace();
        $workspace4->setName('Participer à un forum modéré');
        $workspace4->setIsPattern(true);

        $manager->persist($workspace4);

        $workspace5 = new Workspace();
        $workspace5->setName('Consulter un document vidéo');
        $workspace5->setIsPattern(true);

        $manager->persist($workspace5);

        $workspace6 = new Workspace();
        $workspace6->setName('Consulter un site web et discuter en groupe');
        $workspace6->setIsPattern(false);

        $manager->persist($workspace6);

        $workspace7 = new Workspace();
        $workspace7->setName('Créer une synhèse du texte');
        $workspace7->setIsPattern(false);

        $manager->persist($workspace7);

        $workspace8 = new Workspace();
        $workspace8->setName('Tester le niveau B2');
        $workspace8->setIsPattern(false);

        $manager->persist($workspace8);

        $workspace9 = new Workspace();
        $workspace9->setName('Participer à un forum sur la culture italienne');
        $workspace9->setIsPattern(false);

        $manager->persist($workspace9);

        $workspace10 = new Workspace();
        $workspace10->setName('Consulter une émission de la RAI');
        $workspace10->setIsPattern(false);

        $manager->persist($workspace10);

        $this->addReference('workspace1', $workspace1);
        $this->addReference('workspace2', $workspace2);
        $this->addReference('workspace3', $workspace3);
        $this->addReference('workspace4', $workspace4);
        $this->addReference('workspace5', $workspace5);
        $this->addReference('workspace6', $workspace6);
        $this->addReference('workspace7', $workspace7);
        $this->addReference('workspace8', $workspace8);
        $this->addReference('workspace9', $workspace9);
        $this->addReference('workspace10', $workspace10);
		
		$manager->flush();
    }
}
