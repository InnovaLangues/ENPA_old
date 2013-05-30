<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\AbstractEntityType;


class LoadAbstractEntityTypeData extends AbstractFixture implements OrderedFixtureInterface
{

      public function getOrder()
      {
            return 2; // the order in which fixtures will be loaded
      }

      /**
      * {@inheritDoc}
      */
      public function load(ObjectManager $manager)
      {
            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Consigne');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass1')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType1', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Salle de classe');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType2', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Salle de langues');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType3', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Labo de langue');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType4', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Nimporte où');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType5', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Forum');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType6', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Chat');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType7', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Collecticiel');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType8', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Editeur de texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType9', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Editeur de son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType10', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Traitement de texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType11', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Générateur de Quiz');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType12', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType13', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType14', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document image');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType15', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document video');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType16', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType17', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType18', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document image');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType19', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document video');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType20', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType21', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType22', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document image');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType23', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document video');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType24', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Quiz');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType25', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Apprenant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType26', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Tuteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType27', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Enseignant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType28', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Concepteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType29', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Gestionnaire');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType30', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Rôle spécifique');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType31', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Apprenant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType32', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Tuteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType33', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Enseignant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType34', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Concepteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType35', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Gestionnaire');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType36', $abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Rôle spécifique');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $this->addReference('abstractEntityType37', $abstractEntityType);

            $manager->flush();
      }
}
