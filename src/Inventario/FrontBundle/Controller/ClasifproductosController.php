<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Clasifproductos;
use Inventario\FrontBundle\Form\ClasifproductosType;

/**
 * Clasifproductos controller.
 *
 */
class ClasifproductosController extends Controller
{

    /**
     * Lists all Clasifproductos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Clasifproductos')->findAll();

        return $this->render('InventarioFrontBundle:Clasifproductos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Clasifproductos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Clasifproductos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clasifproductos_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Clasifproductos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Clasifproductos entity.
    *
    * @param Clasifproductos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Clasifproductos $entity)
    {
        $form = $this->createForm(new ClasifproductosType(), $entity, array(
            'action' => $this->generateUrl('clasifproductos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Clasifproductos entity.
     *
     */
    public function newAction()
    {
        $entity = new Clasifproductos();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Clasifproductos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Clasifproductos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Clasifproductos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clasifproductos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Clasifproductos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Clasifproductos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Clasifproductos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clasifproductos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Clasifproductos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Clasifproductos entity.
    *
    * @param Clasifproductos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Clasifproductos $entity)
    {
        $form = $this->createForm(new ClasifproductosType(), $entity, array(
            'action' => $this->generateUrl('clasifproductos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Clasifproductos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Clasifproductos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clasifproductos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clasifproductos_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Clasifproductos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Clasifproductos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Clasifproductos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Clasifproductos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clasifproductos'));
    }

    /**
     * Creates a form to delete a Clasifproductos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clasifproductos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
