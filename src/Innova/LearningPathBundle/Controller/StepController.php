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

/**
 * Class StepController
 *
 * @package Innova\LearningPathBundle\Controller
 */
class StepController extends Controller
{

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     * @Route("/redirectpathedit", name="redirectpathedit")
     * @Method({"POST"})
     */
    public function redirectPathEdit(Request $request)
    {
        return $this->redirect(
            $this->generateUrl(
                'pathedit',
                array(
                    'id' => $request->get('path-id')
                )
            )
        );
    }

    /**
     * @Route("/pathedit", name="patheditselect")
     * @Route("/pathedit/path/{id}", name="pathedit")
     * @Template()
     */
    public function pathEditAction(Path $path = null)
    {
        $params = array();
        $patternTrees = array();

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("InnovaLearningPathBundle:Path");

        // Add non-Pattern Paths for the select.
        $params['paths'] = $repository->findByPattern(false);

        // Add Pattern Paths for the right menu.
        $patterns = $repository->findByPattern(true);

        foreach ($patterns as $pattern) {
            $patternTrees[] = $pattern
                ->getSteps()
                ->first();
        }

        $params['patternTrees'] = $patternTrees;

        if ($path) {
            $params['root'] = $this->getPathRoot($path);
        }

        return $params;
    }

    /**
     * Creates a new Path entity.
     *
     * @Route("/ajax/step/delete", name="step_ajax_delete")
     * @Method("POST")
     */
    public function ajaxStepDeleteAction(Request $request)
    {

        $manager = $this
            ->getDoctrine()
            ->getManager();

        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        if ($request->getMethod() === 'POST') {
            $nodeIds = $request->get('node_ids');
            foreach ($nodeIds as $stepId) {
                $step = $manager
                    ->getRepository("InnovaLearningPathBundle:Step")
                    ->findOneById($stepId);

                $repository->removeFromTree($step);
            }

            $manager->clear();
            $manager->flush();
        }

        return new Response('OK', 200);
    }

    /**
     * Creates a new Path entity.
     *
     * @Route("/ajax/save", name="path_ajax_save")
     * @Method("POST")
     * @Template("InnovaLearningPathBundle:Step:includes/path-tree.html.twig")
     */
    public function ajaxSaveAction(Request $request)
    {
        $params = array();

        $manager = $this
            ->getDoctrine()
            ->getManager();

        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        if ($request->getMethod() == 'POST') {
            $json = $request->get('json');
            $json = json_decode(stripslashes($json));

            $rootId = $this->parseJsonUl(
                $json->step,
                null,
                $manager,
                $repository, 
                null
            );
            
            $manager->clear();
            $path = $repository->findOneById($rootId)->getPath();
            $params['root'] = $this->getPathRoot($path);
        }
        
        return $params;
    }


    /**
     * [parseJsonUl description]
     * @param  [type] $step       [description]
     * @param  [type] $parent     [description]
     * @param  [type] $manager    [description]
     * @param  [type] $repository [description]
     * @return [type] [description]
     */
    private function parseJsonUl($step, $parent, $manager, $repository, $rootId)
    {   
        if ($repository->find($step->id)) {
             $newStep = $repository->find($step->id);
        } else {
            $newStep = new Step();
        }

        $newStep
            ->setName($step->name)
            ->setParent($parent);

        $manager->persist($newStep);
        $manager->flush();

        if($parent != NULL){
            $repository->persistAsLastChildOf($newStep, $parent);
        } else {
            $rootId = $step->id;
        }

        $manager->persist($newStep);
        $manager->flush();

        if (isset($step->children)) {
            foreach ($step->children as $child) {
                $this->parseJsonUl(
                    $child->step,
                    $newStep,
                    $manager,
                    $repository, 
                    $rootId
                );
            }
        }
       
        return $rootId;
    }

    private function getPathRoot(Path $path)
    {
        return $path
            ->getSteps()
            ->first();
    }
}
