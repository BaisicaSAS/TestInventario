<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Productos;
use Inventario\FrontBundle\Form\ProductosType;

/**
 * Productos controller.
 *
 */
class ProductosController extends Controller
{

    public function listProGridAction($pidter)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.txRefInterna as txrefinterna, a.txNomProducto as txnomproducto,  "
                . "b.dbvalor as dbvalor "
                . "FROM Productos a "
                . "LEFT JOIN Detlistaprecios b ON a.idProducto = b.Productos_idProducto "
                . "LEFT JOIN Terceros c ON b.ListaPrecios_idListaPrecios = c.idListaPrecios "
                . "WHERE c.idTercero = :pidter ");
        
        $entities->bindParam('pidter',$pidter);
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
     * Lists all Productos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('InventarioFrontBundle:Productos')->findAll();

        return $this->render('InventarioFrontBundle:Productos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Productos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Productos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('productos_show', array('id' => $entity->getId())));
        }

        return $this->render('InventarioFrontBundle:Productos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Productos entity.
    *
    * @param Productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Productos $entity)
    {
        $form = $this->createForm(new ProductosType(), $entity, array(
            'action' => $this->generateUrl('productos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Productos entity.
     *
     */
    public function newAction()
    {
        $entity = new Productos();
        $form   = $this->createCreateForm($entity);

        return $this->render('InventarioFrontBundle:Productos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Productos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Productos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Productos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('InventarioFrontBundle:Productos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Productos entity.
    *
    * @param Productos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Productos $entity)
    {
        $form = $this->createForm(new ProductosType(), $entity, array(
            'action' => $this->generateUrl('productos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Productos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('InventarioFrontBundle:Productos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Productos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('productos_edit', array('id' => $id)));
        }

        return $this->render('InventarioFrontBundle:Productos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Productos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('InventarioFrontBundle:Productos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Productos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('productos'));
    }

    /**
     * Creates a form to delete a Productos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
