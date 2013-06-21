<?php

namespace Innova\LearningPathBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Innova\LearningPathBundle\Entity\Step;
use Innova\LearningPathBundle\Entity\Path;
use Symfony\Component\Serializer\Encoder\JsonDecode;

class StepController extends Controller
{
    
    /**
     * @Route("/redirectpathedit", name="redirectpathedit")
     * @Method({"POST"})
     */
    public function redirectPathEdit(Request $request) {
        $id = $request->get('path-id');
        return $this->redirect($this->generateUrl('pathedit', array('id' => $id)));
    }

    /**
     * @Route("/pathedit/path/{id}", name="pathedit")
     * @Template()
     */
    public function pathEditAction(Path $path = null)
    {
        $params = array();
        $manager = $this->getDoctrine()->getManager();
        
        $paths = $manager->getRepository("InnovaLearningPathBundle:Path")->findByIsPattern(false);
        $params['paths'] = $paths;

        if ($path){
            $patterns = $manager->getRepository("InnovaLearningPathBundle:Path")->findByIsPattern(true);
            $htmlTree = $this->drawTree($path);

            foreach ($patterns as $pattern) {
                $patternTrees[] = $this->drawTree($pattern);
            }

            $params['htmlTree'] = $htmlTree;
            $params['patternTrees'] = $patternTrees;
        }

        return $params;
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
            echo($steps);
            $this->treeConstruct($steps, $manager, null);
            $manager->flush();
        }

        //return array('htmlTree' => $htmlTree);
        //echo $htmlTree;
    }


    /**
     * [TreeConstruct description]
     * @param array  $steps
     * @param [type] $manager
     * @param Step   $stepParent
     */
    private function treeConstruct($steps, $manager, Step $stepParent = null){
        $root = $steps->root;
        var_dump($steps);
        die();
        foreach ($steps->getChildren() as $step){

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

            treeConstruct($step, $manager, $stepParent);
        }

    }


    public function drawTree(Path $path)
    {
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        //TODO WTF ?
        //$root = $repository->findOneByPath($path)->getRoot();
        $root = $repository->findOneByPath($path);

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
            $root,
            false,
            $options,
            true
        );

        return $htmlTree;
    }


    /**
     * Creates a new Path entity.
     *
     * @Route("/ajax/save", name="path_ajax_save")
     * @Method("POST")
     */
    public function ajaxSaveAction(Request $request)
    {   
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");
 
        if ($request->getMethod() == 'POST'){
            $json = $request->get('tab');
            $json = json_decode(stripslashes($json)); 

            $this->parseJsonUl($json->step, NULL, $manager, $repository);

        }

        //TODO enregister dans la base
        $manager->flush();
        return new Response('OK', 200);
    }

    private function parseJsonUl($step, $parent, $manager, $repository){
        if ($step->id > 0){
            $new_step = $repository->find($step->id);
        }
        else{
            $new_step = new Step();
        }
        echo $step->id."<br/>";

        $new_step->setName($step->name);
        $new_step->setParent($parent);
        $manager->persist($new_step);

        if (isset($step->children)){
            foreach ($step->children as $child){
                $this->parseJsonUl($child->step, $new_step, $manager, $repository);
            }
        }
    }
}
