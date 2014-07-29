<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Masdocumentos;
use Inventario\FrontBundle\Form\MasdocumentosType;

/**
 * Masdocumentos controller.
 *
 */
class MasdocumentosController extends Controller
{

    /**
     * Lists all Masdocumentos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Masdocumentos')->findAll();

        return $this->render('InventarioFrontBundle:Masdocumentos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Masdocumentos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Masdocumentos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('masdocumentos_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Masdocumentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Masdocumentos entity.
    *
    * @param Masdocumentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Masdocumentos $entity)
    {
        $form = $this->createForm(new MasdocumentosType(), $entity, array(
            'action' => $this->generateUrl('masdocumentos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Masdocumentos entity.
     *
     */
    public function newAction()
    {
        $entity = new Masdocumentos();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Masdocumentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Masdocumentos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Masdocumentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Masdocumentos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Masdocumentos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Masdocumentos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Masdocumentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Masdocumentos entity.
    *
    * @param Masdocumentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Masdocumentos $entity)
    {
        $form = $this->createForm(new MasdocumentosType(), $entity, array(
            'action' => $this->generateUrl('masdocumentos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Masdocumentos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Masdocumentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('masdocumentos_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Masdocumentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Masdocumentos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Masdocumentos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('masdocumentos'));
    }

    /**
     * Creates a form to delete a Masdocumentos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('masdocumentos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
