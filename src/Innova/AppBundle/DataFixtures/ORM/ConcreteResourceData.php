<?php

namespace Innova\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\AppBundle\Entity\ConcreteResource;

class ConcreteResourceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Site web Stendhal');
        $concreteResource->setUrl('http://www.u-grenoble3.fr');
        $concreteResource->setDescription("Il s'agit ici du site institutionnel de l'université Stendhal");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource1', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource2', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource3', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource4', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource5', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource6', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource7', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource8', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource9', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource10', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource11', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource12', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource13', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource14', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource15', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource16', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource17', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource18', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource19', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource20', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource21', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource22', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource23', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource24', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource25', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource26', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource27', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource28', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource29', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource30', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource31', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource32', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource33', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource34', $concreteResource);

        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource35', $concreteResource);
        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource36', $concreteResource);
        $concreteResource = new ConcreteResource();
        $concreteResource->setName('Exemple de ressource url');
        $concreteResource->setUrl('http://jeanphilippe.pernin.net/ressources/exemple_url.html');
        $concreteResource->setDescription("XXX");

        $manager->persist($concreteResource);

        $this->addReference('concreteResource37', $concreteResource);

        $manager->flush();

    }

    public function getOrder()
    {
        return 10; // the order in which fixtures will be loaded
    }
}
