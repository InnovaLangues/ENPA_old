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
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        //TODO WTF ?
        $step = $repository->find('1');

        $options = array(
            'decorate' => true,
            'rootOpen' => '<ul class="sortable ui-sortable">',
            'rootClose' => '</ul>',
            'childOpen' => '<li>',
            'childClose' => '</li>'
        );

        $htmlTree = $repository->childrenHierarchy(
            $step,
            false,
            $options,
            true
        );

        return array('htmlTree' => $htmlTree);
    }
}
