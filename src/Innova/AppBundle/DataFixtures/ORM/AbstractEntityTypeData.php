<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\AbstractEntityType;


class LoadAbstractEntityTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
      public function load(ObjectManager $manager)
      {
            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Salle de classe');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass1')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Salle de langues');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Labo de langue');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Nimporte où');
            $abstractEntityType->setIsDigital(0);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass2')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Forum');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Chat');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Collecticiel');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Editeur de texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Editeur de son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Traitement de texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Générateur de Quiz');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass3')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document image');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document video');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass4')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document image');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document video');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass5')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document texte');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document son');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document image');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Document video');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Quiz');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass6')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Apprenant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Tuteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Enseignant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Concepteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Gestionnaire');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Rôle spécifique');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass7')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Apprenant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Tuteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Enseignant');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Concepteur');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Gestionnaire');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $abstractEntityType = new AbstractEntityType();
            $abstractEntityType->setName('Rôle spécifique');
            $abstractEntityType->setIsDigital(1);
            $abstractEntityType->setAbstractEntityClass($manager->merge($this->getReference('abstractEntityClass8')));

            $manager->persist($abstractEntityType);

            $manager->flush();
      }

      public function getOrder()
      {
            return 5; // the order in which fixtures will be loaded
      }
}
