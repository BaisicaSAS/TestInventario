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
use Inventario\FrontBundle\Form\MasdocumentosType;

/**
 * Masdocumentos controller.
 *
 */
class MasdocumentosController extends Controller
{

    /**
     * @var integer
     *
     * @ORM\Column(name="idMasDocumento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="txNumDoc", type="string", length=20, nullable=false)
     */
    private $txnumdoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feFecha", type="datetime", nullable=false)
     */
    private $fefecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feVencimiento", type="datetime", nullable=false)
     */
    private $fevencimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="txObservaciones", type="integer", nullable=true)
     */
    private $txobservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="txCondPago", type="string", length=100, nullable=true)
     */
    private $txcondpago;

    /**
     * @var float
     *
     * @ORM\Column(name="dbValNeto", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbvalneto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dbValIva", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbvaliva = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dbTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbtotal = '0';

    /**
     * @var \Tipdoc
     *
     * @ORM\ManyToOne(targetEntity="Tipdoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inidTipDoc", referencedColumnName="id")
     * })
     */
    private $inidtipdoc;

    /**
     * @var \Terceros
     *
     * @ORM\ManyToOne(targetEntity="Terceros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inidTercero", referencedColumnName="id")
     * })
     */
    private $inidtercero;

    /**
     * @var \Vendedores
     *
     * @ORM\ManyToOne(targetEntity="Vendedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Vendedores_idVendedor", referencedColumnName="id")
     * })
     */
    private $vendedoresvendedor;

    /**
     * Lista todos los registros de Maestro Listas de Precios en JSON para JQGRID.
     *
     */
    public function listMasDocGridAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $entities = $connection->prepare("SELECT a.idListaPrecios as id, a.txnomlista as txnomlista, IF(a.inActiva=0, 'INACTIVA', 'ACTIVA') as txactiva "
                      . "FROM M a "
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
     * Lista todos los registros de Detalle Documentos en JSON para JQGRID.
     *
     */

    public function listDetDocGridAction($pidlista)
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
    public function guardaMasDocGridAction()
    {
       $id = $_POST['id'];
       if ($_POST['txactiva'] == 'ACTIVA') $inactiva = 1; else $inactiva = 0;
       $txnomlista = $_POST['txnomlista'];
       $em = $this->getDoctrine()->getManager();
       $listaprecio = new Listaprecios;
       if ($_POST['oper']=='add') {
            //insert
            $listaprecio->setInactiva($inactiva);
            $listaprecio->setTxnomlista($txnomlista);
            $em->persist($listaprecio);
            $em->flush();
            $id = $listaprecio->getId();
            //echo  $id. "  --  " .$inactiva . "  --  " . $txnomlista; 
            $this->crearDetLP($id);
        } elseif ($_POST['oper']=='edit') {
            $listaprecio = $em->getRepository('InventarioFrontBundle:Listaprecios')->find($id);
            $listaprecio->setInactiva($inactiva);
            $listaprecio->setTxnomlista($txnomlista);
            $em->persist($listaprecio);
            $em->flush();
        } elseif ($_POST['oper']=='del') {
            $listaprecio = $em->getRepository('InventarioFrontBundle:Listaprecios')->find($id);
            $em->remove($listaprecio);
            $em->flush();
        }
        return $this->render('InventarioFrontBundle:Listaprecios:index.html.twig');
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
