<?php

namespace Innova\AppBundle\DataFixtures\Dev;

use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping as ORM;
use Innova\LearningPathBundle\Entity\Step;

class LoadStepData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }


    public function load(ObjectManager $manager)
    {
        // FIRST TREE.
        $step1 = new Step();
        $step1->setName('Séquence');
        $step1->setPath($this->getReference('path1'));

        $manager->persist($step1);
        
        $step2 = new Step();
        $step2->setName('blabla');
        $step2->setParent($step1);
        $step2->setPath($this->getReference('path1'));

        $manager->persist($step2);

        $step3 = new Step();
        $step3->setName('Parcours INP');
        $step3->setParent($step1);

        $manager->persist($step3);
        $step3->setPath($this->getReference('path1'));

        $step4 = new Step();
        $step4->setName('Parcours INP vierge');
        $step4->setParent($step3);

        $manager->persist($step4);
        $step4->setPath($this->getReference('path1'));

        $step5 = new Step();
        $step5->setName('Exercide d\'entrainement');
        $step5->setParent($step1);

        $manager->persist($step5);
        $step5->setPath($this->getReference('path1'));

        $step6 = new Step();
        $step6->setName('parallèle');
        $step6->setParent($step1);

        $manager->persist($step6);
        $step6->setPath($this->getReference('path1'));

        $step7 = new Step();
        $step7->setName('Recherche et sélection');
        $step7->setParent($step6);

        $manager->persist($step7);
        $step7->setPath($this->getReference('path1'));

        $step8 = new Step();
        $step8->setName('Personnelles');
        $step8->setParent($step6);

        $manager->persist($step8);
        $step8->setPath($this->getReference('path1'));

        $step9 = new Step();
        $step9->setName('Parcours XXX');
        $step9->setParent($step6);

        $manager->persist($step9);
        $step9->setPath($this->getReference('path1'));

        $step10 = new Step();
        $step10->setName('...');
        $step10->setParent($step9);

        $manager->persist($step10);
        $step10->setPath($this->getReference('path1'));

        $step11 = new Step();
        $step11->setName('Production collective');
        $step11->setParent($step6);

        $manager->persist($step11);
        $step11->setPath($this->getReference('path1'));


        // SECOND TREE.
        $step12 = new Step();
        $step12->setName('Source');
        $step12->setPath($this->getReference('path2'));
      
        $manager->persist($step12);
        $step12->setPath($this->getReference('path2'));

        $step13 = new Step();
        $step13->setName('Innova');
        $step13->setParent($step12);

        $manager->persist($step13);
        $step13->setPath($this->getReference('path2'));

        $step14 = new Step();
        $step14->setName('Parcours CAA');
        $step14->setParent($step13);

        $manager->persist($step14);
        $step14->setPath($this->getReference('path2'));

        $step15 = new Step();
        $step15->setName('Parcours CAA vierge');
        $step15->setParent($step14);

        $manager->persist($step15);
        $step15->setPath($this->getReference('path2'));

        $step16 = new Step();
        $step16->setName('Espagnol B1');
        $step16->setParent($step14);

        $manager->persist($step16);
        $step16->setPath($this->getReference('path2'));

        $step17 = new Step();
        $step17->setName('Espagnol B2');
        $step17->setParent($step14);

        $manager->persist($step17);
        $step17->setPath($this->getReference('path2'));


        $step19 = new Step();
        $step19->setName('Parcours INP vierge');
        $step19->setParent($step13);

        $manager->persist($step19);
        $step19->setPath($this->getReference('path2'));

        $step20 = new Step();
        $step20->setName('Paroours XXX');
        $step20->setParent($step13);

        $manager->persist($step20);
        $step20->setPath($this->getReference('path2'));

        $step21 = new Step();
        $step21->setName('...');
        $step21->setParent($step20);

        $manager->persist($step21);
        $step21->setPath($this->getReference('path2'));

        $step22 = new Step();
        $step22->setName('Personnelles');
        $step22->setParent($step13);

        $manager->persist($step22);
        $step22->setPath($this->getReference('path2'));

        $manager->flush();
    }
}