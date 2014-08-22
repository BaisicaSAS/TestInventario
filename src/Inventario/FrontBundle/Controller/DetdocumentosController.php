<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Detdocumentos;
use Inventario\FrontBundle\Form\DetdocumentosType;

/**
 * Detdocumentos controller.
 *
 */
class DetdocumentosController extends Controller
{

    /**
     * Lists all Detdocumentos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Detdocumentos')->findAll();

        return $this->render('InventarioFrontBundle:Detdocumentos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Detdocumentos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Detdocumentos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('detdocumentos_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Detdocumentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Detdocumentos entity.
    *
    * @param Detdocumentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Detdocumentos $entity)
    {
        $form = $this->createForm(new DetdocumentosType(), $entity, array(
            'action' => $this->generateUrl('detdocumentos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Detdocumentos entity.
     *
     */
    public function newAction()
    {
        $entity = new Detdocumentos();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Detdocumentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Detdocumentos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Detdocumentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Detdocumentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Detdocumentos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Detdocumentos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Detdocumentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Detdocumentos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Detdocumentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Detdocumentos entity.
    *
    * @param Detdocumentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Detdocumentos $entity)
    {
        $form = $this->createForm(new DetdocumentosType(), $entity, array(
            'action' => $this->generateUrl('detdocumentos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Detdocumentos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Detdocumentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Detdocumentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('detdocumentos_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Detdocumentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Detdocumentos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Detdocumentos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Detdocumentos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('detdocumentos'));
    }

    /**
     * Creates a form to delete a Detdocumentos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detdocumentos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
