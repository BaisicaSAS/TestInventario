<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * Lista todos los registros de Maestro Listas de Precios en JSON para JQGRID.
     *
     */
    public function listMasLPGridAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idListaPrecios as id, a.txnomlista as txnomlista, IF(a.inActiva=0, 'INACTIVA', 'ACTIVA') as txactiva "
                      . "FROM ListaPrecios a "
                    . "ORDER BY id");
        
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
     * Lista todos los registros de Detalle Listas de Precios en JSON para JQGRID.
     *
     */

    public function listDetLPGridAction($pidlista)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idDetListaPrecioscol as id, a.dbvalor as dbvalor, a.ListaPrecios_idListaPrecios as idlista, "
                      . "a.Productos_idProducto as idproducto , b.txnomproducto as txnomproducto, b.txRefInterna as txrefinterna FROM Detlistaprecios a "
                      . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                      . "WHERE a.ListaPrecios_idListaPrecios = :pidlista "
                      . "ORDER BY idlista, id");
        
        $entities->bindParam('pidlista',$pidlista);
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
    public function guardaMasLPGridAction()
    {
                            {name:'id',index:'id', editable:false,search:true,editoptions:{readonly:true,size:10}},
                            {name:'txnomlista',index:'txnomlista',search:true,editable:true,editoptions:{size:30}},
                            {name:'txactiva',index:'txactiva',search:true,sortable:false,editable: true, edittype:'select', formatter:'select', editoptions:{value: "ACTIVA:ACTIVA;ACTIVA:INACTIVA"} }		
       $id = $_POST['id']; aqui voy
       if ($_POST['txactiva'] == 'ACTIVA') {$inactiva = 1} else {$inactiva = 0};
       $txnomlista = $_POST['txactiva'];
       $em = $this->getDoctrine()->getManager();
       $listaprecio = new Listaprecios;
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
