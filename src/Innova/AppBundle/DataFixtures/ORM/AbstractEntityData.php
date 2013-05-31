<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\AbstractEntity;

class LoadAbstractEntityData extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 4; // the order in which fixtures will be loaded
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $abstractEntity1 = new AbstractEntity();
        $abstractEntity1->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType1')));
        $abstractEntity1->addWorkspace($manager->merge($this->getReference('workspace1')));

        $manager->persist($abstractEntity1);

        $abstractEntity2 = new AbstractEntity();
        $abstractEntity2->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType1')));

        $manager->persist($abstractEntity2);

        $abstractEntity3 = new AbstractEntity();
        $abstractEntity3->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType1')));

        $manager->persist($abstractEntity3);


        $abstractEntity4 = new AbstractEntity();
        $abstractEntity4->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType2')));

        $manager->persist($abstractEntity4);

        $abstractEntity5 = new AbstractEntity();
        $abstractEntity5->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType2')));

        $manager->persist($abstractEntity5);

        $abstractEntity6 = new AbstractEntity();
        $abstractEntity6->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType2')));

        $manager->persist($abstractEntity6);

        $abstractEntity7 = new AbstractEntity();
        $abstractEntity7->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType3')));

        $manager->persist($abstractEntity7);

        $abstractEntity8 = new AbstractEntity();
        $abstractEntity8->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType3')));

        $manager->persist($abstractEntity8);

        $abstractEntity9 = new AbstractEntity();
        $abstractEntity9->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType3')));

        $manager->persist($abstractEntity9);

        $abstractEntity10 = new AbstractEntity();
        $abstractEntity10->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType4')));

        $manager->persist($abstractEntity10);

        $abstractEntity11 = new AbstractEntity();
        $abstractEntity11->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType4')));

        $manager->persist($abstractEntity11);

        $abstractEntity12 = new AbstractEntity();
        $abstractEntity12->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType5')));

        $manager->persist($abstractEntity12);

        $abstractEntity13 = new AbstractEntity();
        $abstractEntity13->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType6')));

        $manager->persist($abstractEntity13);

        $abstractEntity14 = new AbstractEntity();
        $abstractEntity14->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType6')));

        $manager->persist($abstractEntity14);

        $abstractEntity15 = new AbstractEntity();
        $abstractEntity15->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType6')));

        $manager->persist($abstractEntity15);

        $abstractEntity16 = new AbstractEntity();
        $abstractEntity16->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType7')));

        $manager->persist($abstractEntity16);

        $abstractEntity17 = new AbstractEntity();
        $abstractEntity17->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType7')));

        $manager->persist($abstractEntity17);

        $abstractEntity18 = new AbstractEntity();
        $abstractEntity18->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType8')));

        $manager->persist($abstractEntity18);

        $abstractEntity19 = new AbstractEntity();
        $abstractEntity19->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType8')));

        $manager->persist($abstractEntity19);

        $abstractEntity20 = new AbstractEntity();
        $abstractEntity20->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType9')));

        $manager->persist($abstractEntity20);

        $abstractEntity21 = new AbstractEntity();
        $abstractEntity21->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType10')));

        $manager->persist($abstractEntity21);

        $abstractEntity22 = new AbstractEntity();
        $abstractEntity22->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType10')));

        $manager->persist($abstractEntity22);

        $abstractEntity23 = new AbstractEntity();
        $abstractEntity23->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType10')));

        $manager->persist($abstractEntity23);

        $abstractEntity24 = new AbstractEntity();
        $abstractEntity24->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType11')));

        $manager->persist($abstractEntity24);

        $abstractEntity25 = new AbstractEntity();
        $abstractEntity25->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType12')));

        $manager->persist($abstractEntity25);

        $abstractEntity26 = new AbstractEntity();
        $abstractEntity26->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType13')));

        $manager->persist($abstractEntity26);

        $abstractEntity27 = new AbstractEntity();
        $abstractEntity27->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType14')));

        $manager->persist($abstractEntity27);

        $abstractEntity28 = new AbstractEntity();
        $abstractEntity28->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType15')));

        $manager->persist($abstractEntity28);

        $abstractEntity29 = new AbstractEntity();
        $abstractEntity29->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType16')));

        $manager->persist($abstractEntity29);

        $abstractEntity30 = new AbstractEntity();
        $abstractEntity30->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType17')));

        $manager->persist($abstractEntity30);

        $abstractEntity31 = new AbstractEntity();
        $abstractEntity31->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType18')));

        $manager->persist($abstractEntity31);

        $abstractEntity32 = new AbstractEntity();
        $abstractEntity32->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType19')));

        $manager->persist($abstractEntity32);

        $abstractEntity33 = new AbstractEntity();
        $abstractEntity33->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType20')));

        $manager->persist($abstractEntity33);

        $abstractEntity34 = new AbstractEntity();
        $abstractEntity34->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType21')));

        $manager->persist($abstractEntity34);

        $abstractEntity35 = new AbstractEntity();
        $abstractEntity35->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType22')));

        $manager->persist($abstractEntity35);

        $abstractEntity36 = new AbstractEntity();
        $abstractEntity36->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType23')));

        $manager->persist($abstractEntity36);

        $abstractEntity37 = new AbstractEntity();
        $abstractEntity37->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType24')));

        $manager->persist($abstractEntity37);

        $abstractEntity38 = new AbstractEntity();
        $abstractEntity38->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType25')));

        $manager->persist($abstractEntity38);

        $abstractEntity39 = new AbstractEntity();
        $abstractEntity39->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType26')));

        $manager->persist($abstractEntity39);

        $abstractEntity40 = new AbstractEntity();
        $abstractEntity40->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType27')));

        $manager->persist($abstractEntity40);

        $abstractEntity41 = new AbstractEntity();
        $abstractEntity41->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType28')));

        $manager->persist($abstractEntity41);

        $abstractEntity42 = new AbstractEntity();
        $abstractEntity42->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType29')));

        $manager->persist($abstractEntity42);

        $abstractEntity43 = new AbstractEntity();

        $abstractEntity43->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType30')));

        $manager->persist($abstractEntity43);

        $abstractEntity44 = new AbstractEntity();
        $abstractEntity44->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType31')));

        $manager->persist($abstractEntity44);

        $abstractEntity45 = new AbstractEntity();
        $abstractEntity45->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType32')));

        $manager->persist($abstractEntity45);

        $abstractEntity46 = new AbstractEntity();
        $abstractEntity46->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType33')));

        $manager->persist($abstractEntity46);

        $abstractEntity47 = new AbstractEntity();
        $abstractEntity47->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType34')));

        $manager->persist($abstractEntity47);

        $abstractEntity48 = new AbstractEntity();
        $abstractEntity48->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType35')));

        $manager->persist($abstractEntity48);

        $abstractEntity49 = new AbstractEntity();
        $abstractEntity49->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType36')));

        $manager->persist($abstractEntity49);

        $abstractEntity50 = new AbstractEntity();
        $abstractEntity50->setAbstractEntityType($manager->merge($this->getReference('abstractEntityType37')));

        $manager->persist($abstractEntity50);

        

        $this->addReference('abstractEntity1', $abstractEntity1);
        $this->addReference('abstractEntity2', $abstractEntity2);
        $this->addReference('abstractEntity3', $abstractEntity3);
        $this->addReference('abstractEntity4', $abstractEntity4);
        $this->addReference('abstractEntity5', $abstractEntity5);
        $this->addReference('abstractEntity6', $abstractEntity6);
        $this->addReference('abstractEntity7', $abstractEntity7);
        $this->addReference('abstractEntity8', $abstractEntity8);
        $this->addReference('abstractEntity9', $abstractEntity9);
        $this->addReference('abstractEntity10', $abstractEntity10);
        $this->addReference('abstractEntity11', $abstractEntity11);
        $this->addReference('abstractEntity12', $abstractEntity12);
        $this->addReference('abstractEntity13', $abstractEntity13);
        $this->addReference('abstractEntity14', $abstractEntity14);
        $this->addReference('abstractEntity15', $abstractEntity15);
        $this->addReference('abstractEntity16', $abstractEntity16);
        $this->addReference('abstractEntity17', $abstractEntity17);
        $this->addReference('abstractEntity18', $abstractEntity18);
        $this->addReference('abstractEntity19', $abstractEntity19);
        $this->addReference('abstractEntity20', $abstractEntity20);
        $this->addReference('abstractEntity21', $abstractEntity21);
        $this->addReference('abstractEntity22', $abstractEntity22);
        $this->addReference('abstractEntity23', $abstractEntity23);
        $this->addReference('abstractEntity24', $abstractEntity24);
        $this->addReference('abstractEntity25', $abstractEntity25);
        $this->addReference('abstractEntity26', $abstractEntity26);
        $this->addReference('abstractEntity27', $abstractEntity27);
        $this->addReference('abstractEntity28', $abstractEntity28);
        $this->addReference('abstractEntity29', $abstractEntity29);
        $this->addReference('abstractEntity30', $abstractEntity30);
        $this->addReference('abstractEntity31', $abstractEntity31);
        $this->addReference('abstractEntity32', $abstractEntity32);
        $this->addReference('abstractEntity33', $abstractEntity33);
        $this->addReference('abstractEntity34', $abstractEntity34);
        $this->addReference('abstractEntity35', $abstractEntity35);
        $this->addReference('abstractEntity36', $abstractEntity36);
        $this->addReference('abstractEntity37', $abstractEntity37);
        $this->addReference('abstractEntity38', $abstractEntity38);
        $this->addReference('abstractEntity39', $abstractEntity39);
        $this->addReference('abstractEntity40', $abstractEntity40);
        $this->addReference('abstractEntity41', $abstractEntity41);
        $this->addReference('abstractEntity42', $abstractEntity42);
        $this->addReference('abstractEntity43', $abstractEntity43);
        $this->addReference('abstractEntity44', $abstractEntity44);
        $this->addReference('abstractEntity45', $abstractEntity45);
        $this->addReference('abstractEntity46', $abstractEntity46);
        $this->addReference('abstractEntity47', $abstractEntity47);
        $this->addReference('abstractEntity48', $abstractEntity48);
        $this->addReference('abstractEntity49', $abstractEntity49);
        $this->addReference('abstractEntity50', $abstractEntity50);
		$manager->flush();
    }

}
