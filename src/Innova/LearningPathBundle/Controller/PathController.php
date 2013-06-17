<?php

namespace Innova\LearningPathBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Innova\LearningPathBundle\Entity\Path;
use Innova\LearningPathBundle\Form\PathType;

/**
 * Path controller.
 *
 * @Route("/path")
 */
class PathController extends Controller
{
    /**
     * Lists all Path entities.
     *
     * @Route("/", name="path")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InnovaLearningPathBundle:Path')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Path entity.
     *
     * @Route("/", name="path_create")
     * @Method("POST")
     * @Template("InnovaLearningPathBundle:Path:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Path();
        $form = $this->createForm(new PathType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('path_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Path entity.
     *
     * @Route("/new", name="path_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Path();
        $form   = $this->createForm(new PathType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Path entity.
     *
     * @Route("/{id}", name="path_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InnovaLearningPathBundle:Path')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Path entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Path entity.
     *
     * @Route("/{id}/edit", name="path_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InnovaLearningPathBundle:Path')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Path entity.');
        }

        $editForm = $this->createForm(new PathType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Path entity.
     *
     * @Route("/{id}", name="path_update")
     * @Method("PUT")
     * @Template("InnovaLearningPathBundle:Path:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InnovaLearningPathBundle:Path')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Path entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PathType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('path_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Path entity.
     *
     * @Route("/{id}", name="path_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InnovaLearningPathBundle:Path')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Path entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('path'));
    }

    /**
     * Creates a form to delete a Path entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    /**
     * Finds and displays a Path entity.
     *
     * @Route("/ajax/find-by-name/{name}", name="path_ajax_find_by_name", options={"expose"=true})
     * @Method("GET")
     */
    public function ajaxFindByNameAction($name)
    {
        $manager = $this->getDoctrine()->getManager();

        $entities = $manager->getRepository("InnovaLearningPathBundle:Path")->createQueryBuilder('o')
            ->select('o.name')
            ->where('o.name like :name')
            ->setParameter('name', '%' . $name . '%')
            ->getQuery()
            ->getArrayResult();

        return  new Response(json_encode($entities), 200, array('Content-Type', 'text/json'));
    }
}
