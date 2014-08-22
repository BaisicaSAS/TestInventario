<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * Lista todos los registros de clasificacion de productos en JSON.
     *
     */
    public function listGridAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
//        $entities = $connection->prepare("SELECT a.idClasifProductos as id, a.txDescripcion as txdescripcion, IF(a.inTipo=0, 'APLICACION', 'MARCA') as txtipo, "
//                    . "b.txdescripcion as txpadre FROM ClasifProductos a "
        $entities = $connection->prepare("SELECT a.idClasifProductos as id, a.txDescripcion as txdescripcion, IF(a.inTipo=0, 'APLICACION', 'MARCA') as txtipo, "
                      . "b.txdescripcion as txpadre , a.inTipo as intipo, a.inPadre as inpadre FROM ClasifProductos a "
                      . "LEFT JOIN ClasifProductos b ON a.inPadre = b.idClasifProductos "
//                    . "LEFT JOIN ClasifProductos b ON a.inPadre = b.idClasifProductos "
                    . "ORDER BY intipo, inpadre");
        
        $entities->execute();
        
        $result = $entities->fetchAll();
        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        
        
    }
   
    
    public function listPadreAction($intipo, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
//        $entities = $connection->prepare("SELECT a.idClasifProductos as id, a.txDescripcion as txdescripcion, IF(a.inTipo=0, 'APLICACION', 'MARCA') as txtipo, "
//                    . "b.txdescripcion as txpadre FROM ClasifProductos a "
        $entities = $connection->prepare("SELECT a.txDescripcion as txdescripcion, a.inTipo as intipo "
                      . "FROM ClasifProductos a "
                      . "WHERE a.idClasifProductos <> :id"
                      . " AND a.inTipo = :intipo"
                      . " ORDER BY txdescripcion");
        $entities->bindParam('id', $id);
        $entities->bindParam('intipo', $intipo);
        
        $entities->execute();
        
        $result = $entities->fetchAll();
        
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        
        $response = new Response($serializer->serialize($result, 'json')); 
        $response->headers->set('Content-Type', 'application/json');
        return $response;        
        
    }
    
    /**
     * Guarda cambios desde jqGrid.
     *
     */
    public function guardaGridAction()
    {
       $id = $_POST['id'];
       if ($_POST['inpadre'] == '') $inpadre = NULL;
       $em = $this->getDoctrine()->getManager();
       echo $inpadre;
       echo $_POST['txdescripcion'];
       echo $_POST['intipo'];
       echo $_POST['oper'];
       $clasiprod = new Clasifproductos;
       if ($_POST['oper']=='add') {
            //insert
            $clasiprod->setInpadre($inpadre);
            $clasiprod->setTxdescripcion($_POST['txdescripcion']);
            $clasiprod->setIntipo($_POST['intipo']);
            $em->persist($clasiprod);
        } elseif ($_POST['oper']=='edit') {
            $clasiprod = $em->getRepository('InventarioFrontBundle:Clasifproductos')->find($id);
            $clasiprod->setInpadre($inpadre);
            $clasiprod->setTxdescripcion($_POST['txdescripcion']);
            $clasiprod->setIntipo($_POST['intipo']);
        } elseif ($_POST['oper']=='del') {
            $clasiprod = $em->getRepository('InventarioFrontBundle:Clasifproductos')->find($id);
            $em->remove($clasiprod);
        }
        $em->flush();
        return $this->render('InventarioFrontBundle:Clasifproductos:index.html.twig');
    }
    /**
     * Lists all Clasifproductos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('InventarioFrontBundle:Clasifproductos')->findAll();
        $entities = $em->createQuery('SELECT l FROM Inventario\FrontBundle\Entity\Clasifproductos l');
        $jsonData = $entities->getArrayResult();
        $headers = array('Content-Type' => 'application/json');

        $response = new JsonResponse($jsonData, 200, $headers);
        
        return $this->render('InventarioFrontBundle:Clasifproductos:index.html.twig', array(
            'response' => $response,
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
