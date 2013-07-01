<?php

namespace Innova\LearningPathBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Innova\LearningPathBundle\Entity\AbstractWorkspace;
use Innova\LearningPathBundle\Entity\Path;
use Innova\LearningPathBundle\Entity\Step;

/**
 * Class AbstractWorkspaceController
 *
 * @package Innova\LearningPathBundle\Controller
 */
class AbstractWorkspaceController extends Controller
{
    /**
     * Creates a new Path entity.
     *
     * @Route("/ajax/render-abstract-ressource", name="abstract_workspace_ajax_render_abstract_ressource")
     * @Method("POST")
     * @Template("InnovaLearningPathBundle:AbstractWorkspace:includes/abstract-ressource.html.twig")
     */
    public function ajaxRenderAbstractRessourceAction(Request $request)
    {
        $manager = $this
            ->getDoctrine()
            ->getManager();

        
        if ($request->getMethod() == 'POST') {
            $step = $manager->getRepository("InnovaLearningPathBundle:Step")->find($request->get('stepId'));

            $abstractWorkspace = $manager->getRepository("InnovaLearningPathBundle:AbstractWorkspace")->findOneByStep($step);
            $abstractRessources = $abstractWorkspace->getAbstractRessources();

            return array('abstractRessources' => $abstractRessources);
        }
    }
}
