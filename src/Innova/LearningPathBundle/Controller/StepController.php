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
    	$htmlTree = $this->drawTree();
        return array('htmlTree' => $htmlTree);
    }



 	/**
    * @Route("/ajax_savetree", name="ajax_savetree")
    * @Method({"POST"})
    */
    public function ajaxSaveTreeAction(Request $request)
    {
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        if ($request->getMethod() == 'POST') {
            $json = $request->get('json');
            $steps = json_decode($json);
            TreeConstruct($steps, $manager, null)
            $manager->flush();
        }

        return array('htmlTree' => $htmlTree);
    }


    /**
     * [TreeConstruct description]
     * @param array  $steps
     * @param [type] $manager
     * @param Step   $stepParent
     */
    private function TreeConstruct(array $steps, $manager, Step $stepParent = null){
        foreach ($steps->children() as $step){
            
            if ($step["id"] != ""){
                $newStep = $manager->getRepository("InnovaLearningPathBundle:Step")->find($step["id"]);
            }
            else{
                $newStep = new Step();
            }

            $newStep->setName($step['name']);
            $newStep->setParent($stepParent);

            $manager->persist($newStep);

            $stepParent = $newStep->getParent();
            
            TreeConstruct($steps, $manager, $stepParent);
        }

    }




    public function drawTree()
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

        return $htmlTree;
    }
}
