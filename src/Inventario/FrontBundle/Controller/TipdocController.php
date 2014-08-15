<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Tipdoc;
use Inventario\FrontBundle\Form\TipdocType;

/**
 * Tipdoc controller.
 *
 */
class TipdocController extends Controller
{

    /**
     * Lists all Tipdoc entities, para que sirva de lista seleccionable en la creacon de documentos.
     *
     */
    public function listTipDocGridAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idTipDoc, a.txTipdoc, a.txNomDoc, a.inAfecta, "
                . "a.inTipTer, a.txObservPlantilla "
                . "FROM Tipdoc a ");
        
        $entities->execute();
        $result = $entities->fetchAll();

        /*
         * DEVOLVER JSON
         */        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        
        
        /*
         * Devolver combo
         * $response = '<select>';
        foreach($result as $td) {
              $response .= '<option value="'.$td['idTipDoc'].'">'.$td['txTipdoc'].'-'.$td['txNomDoc']."</option>";
        }            
        return $resp = new Response($response);        */
        
        /*
         * Devolver text
        $response='"';
        foreach($result as $td) {
              $response .= $td['txTipdoc'].':'.$td['txTipdoc'].";";
        }            
        $response = substr($response, 0, strlen($response)-1 ).'"';*/
    }
    /**
     * Lists all Tipdoc entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Tipdoc')->findAll();

        return $this->render('InventarioFrontBundle:Tipdoc:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tipdoc entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tipdoc();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipdoc_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Tipdoc:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tipdoc entity.
    *
    * @param Tipdoc $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tipdoc $entity)
    {
        $form = $this->createForm(new TipdocType(), $entity, array(
            'action' => $this->generateUrl('tipdoc_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tipdoc entity.
     *
     */
    public function newAction()
    {
        $entity = new Tipdoc();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Tipdoc:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tipdoc entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Tipdoc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipdoc entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Tipdoc:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tipdoc entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Tipdoc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipdoc entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Tipdoc:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tipdoc entity.
    *
    * @param Tipdoc $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tipdoc $entity)
    {
        $form = $this->createForm(new TipdocType(), $entity, array(
            'action' => $this->generateUrl('tipdoc_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tipdoc entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Tipdoc')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipdoc entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipdoc_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Tipdoc:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tipdoc entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Tipdoc')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tipdoc entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipdoc'));
    }

    /**
     * Creates a form to delete a Tipdoc entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipdoc_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
