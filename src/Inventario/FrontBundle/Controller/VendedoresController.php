<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Vendedores;
use Inventario\FrontBundle\Form\VendedoresType;

/**
 * Vendedores controller.
 *
 */
class VendedoresController extends Controller
{

    /**
     * Lists all Vendedores entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Vendedores')->findAll();

        return $this->render('InventarioFrontBundle:Vendedores:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Vendedores entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Vendedores();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vendedores_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Vendedores:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Vendedores entity.
    *
    * @param Vendedores $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Vendedores $entity)
    {
        $form = $this->createForm(new VendedoresType(), $entity, array(
            'action' => $this->generateUrl('vendedores_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vendedores entity.
     *
     */
    public function newAction()
    {
        $entity = new Vendedores();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Vendedores:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Vendedores entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Vendedores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendedores entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Vendedores:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Vendedores entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Vendedores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendedores entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Vendedores:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Vendedores entity.
    *
    * @param Vendedores $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vendedores $entity)
    {
        $form = $this->createForm(new VendedoresType(), $entity, array(
            'action' => $this->generateUrl('vendedores_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vendedores entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Vendedores')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vendedores entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vendedores_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Vendedores:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Vendedores entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Vendedores')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vendedores entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vendedores'));
    }

    /**
     * Creates a form to delete a Vendedores entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vendedores_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
