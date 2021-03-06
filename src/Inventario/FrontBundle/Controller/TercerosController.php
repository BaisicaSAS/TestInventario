<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Inventario\FrontBundle\Entity\Terceros;
use Inventario\FrontBundle\Form\TercerosType;

/**
 * Terceros controller.
 *
 */
class TercerosController extends Controller
{

    /**
     * Lists all Terceros entities, para que sirva de lista seleccionable en la creacon de documentos.
     *
     */
    public function listTerGridAction($tipo)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idTercero, a.txNomTercero, a.txDescuento, a.txDiasDescuento, a.inTipoDesc, a.idListaPrecios "
                . "FROM Terceros a WHERE a.inTipoTer IN (:tipo,2,1,0) AND a.InActivo=1");
        
        $entities->bindParam('tipo',$tipo);
            
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
         */
        /*$response = '<select>';
        foreach($result as $td) {
              $response .= '<option value='.$td['idTercero'].'>'.$td['txNomTercero']."</option>";
         }            
        $response.='</select>';
        return $resp = new Response($response);        */
    }
    /**
     * Lists all Terceros entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Terceros')->findAll();

        return $this->render('InventarioFrontBundle:Terceros:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Terceros entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Terceros();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('terceros_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Terceros:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Terceros entity.
    *
    * @param Terceros $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Terceros $entity)
    {
        $form = $this->createForm(new TercerosType(), $entity, array(
            'action' => $this->generateUrl('terceros_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Terceros entity.
     *
     */
    public function newAction()
    {
        $entity = new Terceros();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Terceros:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Terceros entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Terceros')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terceros entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Terceros:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Terceros entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Terceros')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terceros entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Terceros:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Terceros entity.
    *
    * @param Terceros $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Terceros $entity)
    {
        $form = $this->createForm(new TercerosType(), $entity, array(
            'action' => $this->generateUrl('terceros_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Terceros entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Terceros')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terceros entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('terceros_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Terceros:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Terceros entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Terceros')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Terceros entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('terceros'));
    }

    /**
     * Creates a form to delete a Terceros entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('terceros_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
