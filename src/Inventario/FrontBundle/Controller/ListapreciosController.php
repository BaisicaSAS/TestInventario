<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Listaprecios;
use Inventario\FrontBundle\Form\ListapreciosType;

/**
 * Listaprecios controller.
 *
 */
class ListapreciosController extends Controller
{

    /**
     * Lists all Listaprecios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Listaprecios')->findAll();

        return $this->render('InventarioFrontBundle:Listaprecios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Listaprecios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Listaprecios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('listaprecios_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Listaprecios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Listaprecios entity.
    *
    * @param Listaprecios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Listaprecios $entity)
    {
        $form = $this->createForm(new ListapreciosType(), $entity, array(
            'action' => $this->generateUrl('listaprecios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Listaprecios entity.
     *
     */
    public function newAction()
    {
        $entity = new Listaprecios();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Listaprecios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Listaprecios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Listaprecios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Listaprecios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Listaprecios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Listaprecios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Listaprecios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Listaprecios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Listaprecios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Listaprecios entity.
    *
    * @param Listaprecios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Listaprecios $entity)
    {
        $form = $this->createForm(new ListapreciosType(), $entity, array(
            'action' => $this->generateUrl('listaprecios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Listaprecios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Listaprecios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Listaprecios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('listaprecios_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Listaprecios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Listaprecios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Listaprecios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Listaprecios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('listaprecios'));
    }

    /**
     * Creates a form to delete a Listaprecios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listaprecios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
