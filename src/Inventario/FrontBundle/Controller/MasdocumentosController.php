<?php

namespace Inventario\FrontBundle\Controller;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use  Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inventario\FrontBundle\Entity\Masdocumentos;
use Inventario\FrontBundle\Entity\Detdocumentos;
use Inventario\FrontBundle\Entity\Tipdoc;
use Inventario\FrontBundle\Entity\Terceros;
use Inventario\FrontBundle\Entity\Vendedores;
use Inventario\FrontBundle\Form\MasdocumentosType;
use Inventario\FrontBundle\Entity\Productos;
/**
 * Masdocumentos controller.....
 *
 */
class MasdocumentosController extends Controller
{
    /**
     * Lista todos los registros de Maestro de Documentos en JSON para JQGRID.
     *
     */
    public function listMasDocGridAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idMasDocumento as id, a.txNumDoc as txnumdoc, "
                . "a.feFecha as fefecha, a.feVencimiento as fevencimiento, a.txObservaciones as txobservaciones, "
                . "txCondPago as txcondPago, dbValNeto as dbvalneto, a.dbValIva as dbvaliva, a.dbTotal as dbtotal, "
                . "c.txNomdoc as txnomdoc, b.txNomTercero as txnomtercero, d.txNomVendedor as txnomvendedor "
                //. "b.txNomTercero as txnomtercero, c.txTipDoc as txtipdoc, d.txNomVendedor as txnomvendedor "
                . "FROM MasDocumentos a "
                . "LEFT JOIN Terceros b ON a.inidTercero = b.idTercero "
                . "LEFT JOIN TipDoc c ON a.inidTipDoc = c.idTipDoc "
                . "LEFT JOIN Vendedores d ON a.Vendedores_idVendedor = d.idVendedor "
                . "ORDER BY txnomdoc, id");
        
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
     * Lista todos los registros de Detalle Documentos en JSON para JQGRID.
     *
     */
    public function listDetDocGridAction($piddoc)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idDetDocumentos as id, a.inidMasDocumento as inidmasdocumento, "
                . "a.inCantidad as incantidad, a.dbValUnitario as dbvalunitario, a.dbValtotal as dbvaltotal, "
                . "b.txrefinterna as txrefinterna, b.txNomProducto as txnomproducto "
                . "FROM DetDocumentos a "
                . "LEFT JOIN Productos b ON a.Productos_idProducto = b.idProducto "
                . "WHERE a.inidMasDocumento = :piddoc "
                . "ORDER BY id");
        
        $entities->bindParam('piddoc',$piddoc);
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
     * Guarda cambios Maestro Doc desde jqGrid.
     *
     */
    public function guardaMasDocGridAction()
    {
       $idmd = $_POST['id'];
       $tipd = $_POST['txnomdoc'];
       $numd = $_POST['txnumdoc'];
       $idte = $_POST['txnomtercero'];
       //$vali = $_POST['dbvaliva'];
       //$valt = $_POST['dbtotal'];
       //$valn = $_POST['dbvalneto'];
       $vali = 0;
       $valt = 0;
       $valn = 0;
       $conp = $_POST['txcondPago'];
       
       //$ftem = new DateTime($_POST['fefecha']);
       $fech = new \DateTime($_POST['fefecha']);
       //$fech = date('Y-m-d',$ftem);
       //$ftem = new DateTime($_POST['fevencimiento']);
       $fecv = new \DateTime($_POST['fevencimiento']);
       //$fecv = date('Y-m-d',$ftem);

       $obse = $_POST['txobservaciones'];
       $vend = $_POST['txnomvendedor'];
       
       $em = $this->getDoctrine()->getManager();
       echo $idmd." - ".$tipd." - ".$numd." - ".$idte." - ".$valn." - ".$vali." - ".$valt." - "
              .$conp." - ".$fech->format('d/m/y')." - ".$fecv->format('d/m/y')." - ".$obse." - ".$vend;
       $tipDoc = new Tipdoc;
       $tipDoc = $em->getRepository('InventarioFrontBundle:Tipdoc')->findOneBy(array('txnomdoc' => $tipd));
       $tercero = new Terceros;
       $tercero = $em->getRepository('InventarioFrontBundle:Terceros')->findOneBy(array('txnomtercero' => $idte));
       $vendedor = new Vendedores;
       $vendedor = $em->getRepository('InventarioFrontBundle:Vendedores')->findOneBy(array('txnomvendedor' => $vend));
       
       
       $masDoc = new Masdocumentos;
       if ($_POST['oper']=='add') {
            //insert
            $masDoc->setInidtipdoc($tipDoc);
            $masDoc->setTxnumdoc($numd);
            $masDoc->setInidtercero($tercero);
            $masDoc->setDbvalneto($valn);
            $masDoc->setDbvaliva($vali);
            $masDoc->setDbtotal($valt);
            $masDoc->setTxcondpago($conp);
            $masDoc->setFefecha($fech);
            $masDoc->setFevencimiento($fecv);
            $masDoc->setTxobservaciones($obse);
            $masDoc->setVendedoresvendedor($vendedor);
            
            $em->persist($masDoc);
            $em->flush();
        } elseif ($_POST['oper']=='edit') {
            $masDoc = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($idmd);
            $masDoc->setInidtercero($tercero);
            //$masDoc->setDbvalneto($valn);
            //$masDoc->setDbvaliva($vali);
            //$masDoc->setDbtotal($valt);
            $masDoc->setTxcondpago($conp);
            $masDoc->setFefecha($fech);
            $masDoc->setFevencimiento($fecv);
            $masDoc->setTxobservaciones($obse);
            $masDoc->setVendedoresvendedor($vendedor);
            
            $em->persist($masDoc);
            $em->flush();
        } elseif ($_POST['oper']=='del') {
            //$masDoc = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($idmd);
            //$em->remove($masDoc);
            //$em->flush();
        }
        return $this->render('InventarioFrontBundle:Masdocumentos:index.html.twig');
    }
    /**
     * Guarda cambios Detalle Dc. desde jqGrid.
     *
     */
    public function guardaDetDocGridAction()
    {
       $iddd = $_POST['id'];
       $refi = $_POST['txrefinterna'];
       echo $refi;
       $refa = explode('|',$refi);
       $reft = $refa[0];
       echo $reft;
       $cant = $_POST['incantidad'];
       //$valu = $refa[2];
       $idmd = $_POST['inidmasdocumento'];
       $valu = $_POST['dbvalunitario'];
       $valt = $valu*$cant;
       
       echo " detdt - ".$iddd." masd - ".$idmd." - ref ".$reft." - cant ".$cant." - val u ".$valu." - val t ".$valt;
       $em = $this->getDoctrine()->getManager();
       
       $produc = new Productos();
       $produc = $em->getRepository('InventarioFrontBundle:Productos')->findOneBy(array('txnomproducto' => $reft));
       $masDoc = new Masdocumentos();
       $masDoc = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($idmd);
       
       $detDoc = new Detdocumentos;
       if ($_POST['oper']=='add') {
            //insert
            $detDoc->setIncantidad($cant);
            $detDoc->setDbvalunitario($valu);
            $detDoc->setDbvaltotal($valt);
            $detDoc->setInidmasdocumento($masDoc);
            $detDoc->setProductosproducto($produc);
            
            $em->persist($detDoc);
            $em->flush();
        } elseif ($_POST['oper']=='edit') {
            $detDoc = $em->getRepository('InventarioFrontBundle:Detdocumentos')->find($iddd);
            $detDoc->setIncantidad($cant);
            $detDoc->setDbvalunitario($valu);
            $detDoc->setDbvaltotal($valt);
            $detDoc->setProductosproducto($produc);
            
            $em->persist($detDoc);
            $em->flush();
        } elseif ($_POST['oper']=='del') {
            //$masDoc = $em->getRepository('InventarioFrontBundle:Masdocumentos')->find($idmd);
            //$em->remove($masDoc);
            //$em->flush();
        }
        return $this->render('InventarioFrontBundle:Masdocumentos:index.html.twig');
    }
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
