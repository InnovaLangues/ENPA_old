<?php

namespace Innova\LearningPathBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StepController extends Controller
{
    /**
     * @Route("/step")
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
            'rootOpen' => '<ul id="cible" class="tree sortable droppable ui-droppable ui-sortable">',
            'rootClose' => '</ul>',
            'childClose' => '</li>',
            'childOpen' => function($child) {
                if(count($child)){
                    return '<li class="editable-item" id="' . $child["id"] . '"><i class="icon-trash delete-item"></i> <i class="icon-briefcase"></i>';
                }
             }
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
