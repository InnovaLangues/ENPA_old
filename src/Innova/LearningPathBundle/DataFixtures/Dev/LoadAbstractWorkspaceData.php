<?php

namespace Innova\AppBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\LearningPathBundle\Entity\AbstractWorkspace;

/**
 * Class LoadAbstractWorkspaceData
 *
 * @package Innova\AppBundle\DataFixtures\Dev
 */
class LoadAbstractWorkspaceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        
        $abstractWorkspace1 = new AbstractWorkspace();
        $abstractWorkspace1->setName('blablaWorkspace');
        $abstractWorkspace1->setStep($this->getReference('blabla'));
        $abstractWorkspace1->addAbstractRessource($this->getReference('Professeur'));
        $this->getReference('Professeur')->addAbstractWorkspace($abstractWorkspace1);
        $abstractWorkspace1->addAbstractRessource($this->getReference('Eleve'));
        $this->getReference('Eleve')->addAbstractWorkspace($abstractWorkspace1);
        $abstractWorkspace1->addAbstractRessource($this->getReference('Classe'));
        $this->getReference('Classe')->addAbstractWorkspace($abstractWorkspace1);
        $abstractWorkspace1->addAbstractRessource($this->getReference('Binome'));
        $this->getReference('Binome')->addAbstractWorkspace($abstractWorkspace1);
        $abstractWorkspace1->addAbstractRessource($this->getReference('Labo'));
        $this->getReference('Labo')->addAbstractWorkspace($abstractWorkspace1);
        $abstractWorkspace1->addAbstractRessource($this->getReference('Dehors'));
        $this->getReference('Dehors')->addAbstractWorkspace($abstractWorkspace1);


        $manager->persist($abstractWorkspace1);

        $manager->flush();
    }
}