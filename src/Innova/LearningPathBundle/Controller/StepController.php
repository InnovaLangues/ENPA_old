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

class StepController extends Controller
{

    /**
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
        $params['paths'] = $repository->findByIsPattern(false);

        // Add Pattern Paths for the right menu.
        $patterns = $repository->findByIsPattern(true);

        foreach ($patterns as $pattern) {
            $patternTrees[] = $pattern
                ->getSteps()
                ->first();
        }

        $params['patternTrees'] = $patternTrees;

        if ($path) {
            // Add path selected
            $params['root'] = $path
                ->getSteps()
                ->first();
        }

        return $params;
    }

     /**
    * @Route("/ajax_savetree", name="ajax_savetree")
    * @Method({"POST"})
    */
    public function ajaxSaveTreeAction(Request $request)
    {
        $manager = $this
            ->getDoctrine()
            ->getManager();

        if ($request->getMethod() == 'POST') {
            $json = $request->get('json');
            $steps = json_decode($json);
            //echo($steps);
            $this->treeConstruct(
                $steps,
                $manager,
                null
            );

            $manager->flush();
        }
    }

    /**
     * [TreeConstruct description]
     * @param array  $steps
     * @param [type] $manager
     * @param Step   $stepParent
     */
    private function treeConstruct($steps, $manager, Step $stepParent = null)
    {
        $root = $steps->root;
        var_dump($steps);
        die();

        foreach ($steps->getChildren() as $step) {
            if ($step["id"] !== "") {
                $newStep = $manager
                    ->getRepository("InnovaLearningPathBundle:Step")
                    ->find($step["id"]);
            } else {
                $newStep = new Step();
            }

            $newStep
                ->setName($step['name']);
                ->setParent($stepParent);

            $manager->persist($newStep);

            $stepParent = $newStep->getParent();

            treeConstruct(
                $step,
                $manager,
                $stepParent
            );
        }

    }

    /**
     * Creates a new Path entity.
     *
     * @Route("/ajax/save", name="path_ajax_save")
     * @Method("POST")
     */
    public function ajaxSaveAction(Request $request)
    {
        $manager = $this
            ->getDoctrine()
            ->getManager();

        $repository = $manager->getRepository("InnovaLearningPathBundle:Step");

        if ($request->getMethod() == 'POST') {
            $json = $request->get('tab');
            $json = json_decode(stripslashes($json));

            $this->parseJsonUl(
                $json->step,
                NULL,
                $manager,
                $repository
            );
        }

        //TODO enregister dans la base
        $manager->flush();

        return new Response('OK', 200);
    }

    /**
     * [parseJsonUl description]
     * @param  [type] $step       [description]
     * @param  [type] $parent     [description]
     * @param  [type] $manager    [description]
     * @param  [type] $repository [description]
     * @return [type] [description]
     */
    private function parseJsonUl($step, $parent, $manager, $repository)
    {
        if ($step->id > 0) {
            $new_step = $repository->find(
                $step->id
            );
        } else {
            $new_step = new Step();
        }

        //echo $step->id."<br/>";

        $new_step
            ->setName($step->name)
            ->setParent($parent);

        $manager->persist($new_step);

        if (isset($step->children)) {
            foreach ($step->children as $child) {
                $this->parseJsonUl(
                    $child->step,
                    $new_step,
                    $manager,
                    $repository
                );
            }
        }
    }
}
