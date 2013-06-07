<?php

namespace Innova\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DrWatt\Bundle\BackBundle\Entity\Step;

/**
 * WorkspaceManagerController.
 *
 */
class TestController extends Controller
{
    /**
     * @Route("/test/")
     * @Template()
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getEntityManager();
        $repository = $entityManager->getRepository("InnovaLearningPathBundle:Step");

        $step = $repository->find('71');

        $htmlTree = $repository->childrenHierarchy(
            $step,
            false,
            array(
                'decorate' => true,
                'representationField' => 'name',
                'html' => true
            ),
            true
        );

        return array('htmlTree' => $htmlTree);
    }
}
