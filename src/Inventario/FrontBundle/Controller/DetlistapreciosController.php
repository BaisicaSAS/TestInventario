<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Detlistaprecios;
use Inventario\FrontBundle\Form\DetlistapreciosType;

/**
 * Detlistaprecios controller.
 *
 */
class DetlistapreciosController extends Controller
{

    /**
     * Lists all Detlistaprecios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Detlistaprecios')->findAll();

        return $this->render('InventarioFrontBundle:Detlistaprecios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Detlistaprecios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Detlistaprecios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('detlistaprecios_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Detlistaprecios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Detlistaprecios entity.
    *
    * @param Detlistaprecios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Detlistaprecios $entity)
    {
        $form = $this->createForm(new DetlistapreciosType(), $entity, array(
            'action' => $this->generateUrl('detlistaprecios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Detlistaprecios entity.
     *
     */
    public function newAction()
    {
        $entity = new Detlistaprecios();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Detlistaprecios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Detlistaprecios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Detlistaprecios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Detlistaprecios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Detlistaprecios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Detlistaprecios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Detlistaprecios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Detlistaprecios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Detlistaprecios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Detlistaprecios entity.
    *
    * @param Detlistaprecios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Detlistaprecios $entity)
    {
        $form = $this->createForm(new DetlistapreciosType(), $entity, array(
            'action' => $this->generateUrl('detlistaprecios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Detlistaprecios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Detlistaprecios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Detlistaprecios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('detlistaprecios_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Detlistaprecios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Detlistaprecios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Detlistaprecios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Detlistaprecios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('detlistaprecios'));
    }

    /**
     * Creates a form to delete a Detlistaprecios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detlistaprecios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
