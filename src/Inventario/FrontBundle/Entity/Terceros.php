<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terceros
 *
 * @ORM\Table(name="terceros", indexes={@ORM\Index(name="fk_Terceros_ListaPrecios1_idx", columns={"idListaPrecios"}), @ORM\Index(name="fk_Terceros_DeptoCiudades1_idx", columns={"txDivipola"})})
 * @ORM\Entity
 */
class Terceros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTercero", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="txTipDoc", type="string", length=5, nullable=false)
     */
    private $txtipdoc;

    /**
     * @var string
     *
     * @ORM\Column(name="txDocumento", type="string", length=15, nullable=false)
     */
    private $txdocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="txNomTercero", type="string", length=100, nullable=false)
     */
    private $txnomtercero;

    /**
     * @var integer
     *
     * @ORM\Column(name="inTipoTer", type="integer", nullable=false)
     */
    private $intipoter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="txDescuento", type="integer", nullable=true)
     */
    private $txdescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="txDiasDescuento", type="integer", nullable=true)
     */
    private $txdiasdescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="txDireccion", type="string", length=150, nullable=true)
     */
    private $txdireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="txTelefonos", type="string", length=80, nullable=true)
     */
    private $txtelefonos;

    /**
     * @var integer
     *
     * @ORM\Column(name="inActivo", type="integer", nullable=false)
     */
    private $inactivo = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="inTipoDesc", type="integer", nullable=false)
     */
    private $intipodesc = '0';

    /**
     * @var \Deptociudades
     *
     * @ORM\ManyToOne(targetEntity="Deptociudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="txDivipola", referencedColumnName="txDivipola")
     * })
     */
    private $txdivipola;

    /**
     * @var \Listaprecios
     *
     * @ORM\ManyToOne(targetEntity="Listaprecios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idListaPrecios", referencedColumnName="idListaPrecios")
     * })
     */
    private $idlistaprecios;



    /**
     * Get idtercero
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set txtipdoc
     *
     * @param string $txtipdoc
     * @return Terceros
     */
    public function setTxtipdoc($txtipdoc)
    {
        $this->txtipdoc = $txtipdoc;

        return $this;
    }

    /**
     * Get txtipdoc
     *
     * @return string 
     */
    public function getTxtipdoc()
    {
        return $this->txtipdoc;
    }

    /**
     * Set txdocumento
     *
     * @param string $txdocumento
     * @return Terceros
     */
    public function setTxdocumento($txdocumento)
    {
        $this->txdocumento = $txdocumento;

        return $this;
    }

    /**
     * Get txdocumento
     *
     * @return string 
     */
    public function getTxdocumento()
    {
        return $this->txdocumento;
    }

    /**
     * Set txnomtercero
     *
     * @param string $txnomtercero
     * @return Terceros
     */
    public function setTxnomtercero($txnomtercero)
    {
        $this->txnomtercero = $txnomtercero;

        return $this;
    }

    /**
     * Get txnomtercero
     *
     * @return string 
     */
    public function getTxnomtercero()
    {
        return $this->txnomtercero;
    }

    /**
     * Set intipoter
     *
     * @param integer $intipoter
     * @return Terceros
     */
    public function setIntipoter($intipoter)
    {
        $this->intipoter = $intipoter;

        return $this;
    }

    /**
     * Get intipoter
     *
     * @return integer 
     */
    public function getIntipoter()
    {
        return $this->intipoter;
    }

    /**
     * Set txdescuento
     *
     * @param integer $txdescuento
     * @return Terceros
     */
    public function setTxdescuento($txdescuento)
    {
        $this->txdescuento = $txdescuento;

        return $this;
    }

    /**
     * Get txdescuento
     *
     * @return integer 
     */
    public function getTxdescuento()
    {
        return $this->txdescuento;
    }

    /**
     * Set txdiasdescuento
     *
     * @param integer $txdiasdescuento
     * @return Terceros
     */
    public function setTxdiasdescuento($txdiasdescuento)
    {
        $this->txdiasdescuento = $txdiasdescuento;

        return $this;
    }

    /**
     * Get txdiasdescuento
     *
     * @return integer 
     */
    public function getTxdiasdescuento()
    {
        return $this->txdiasdescuento;
    }

    /**
     * Set txdireccion
     *
     * @param string $txdireccion
     * @return Terceros
     */
    public function setTxdireccion($txdireccion)
    {
        $this->txdireccion = $txdireccion;

        return $this;
    }

    /**
     * Get txdireccion
     *
     * @return string 
     */
    public function getTxdireccion()
    {
        return $this->txdireccion;
    }

    /**
     * Set txtelefonos
     *
     * @param string $txtelefonos
     * @return Terceros
     */
    public function setTxtelefonos($txtelefonos)
    {
        $this->txtelefonos = $txtelefonos;

        return $this;
    }

    /**
     * Get txtelefonos
     *
     * @return string 
     */
    public function getTxtelefonos()
    {
        return $this->txtelefonos;
    }

    /**
     * Set inactivo
     *
     * @param integer $inactivo
     * @return Terceros
     */
    public function setInactivo($inactivo)
    {
        $this->inactivo = $inactivo;

        return $this;
    }

    /**
     * Get inactivo
     *
     * @return integer 
     */
    public function getInactivo()
    {
        return $this->inactivo;
    }

    /**
     * Set intipodesc
     *
     * @param integer $intipodesc
     * @return Terceros
     */
    public function setIntipodesc($intipodesc)
    {
        $this->intipodesc = $intipodesc;

        return $this;
    }

    /**
     * Get intipodesc
     *
     * @return integer 
     */
    public function getIntipodesc()
    {
        return $this->intipodesc;
    }

    /**
     * Set txdivipola
     *
     * @param \Inventario\FrontBundle\Entity\Deptociudades $txdivipola
     * @return Terceros
     */
    public function setTxdivipola(\Inventario\FrontBundle\Entity\Deptociudades $txdivipola = null)
    {
        $this->txdivipola = $txdivipola;

        return $this;
    }

    /**
     * Get txdivipola
     *
     * @return \Inventario\FrontBundle\Entity\Deptociudades 
     */
    public function getTxdivipola()
    {
        return $this->txdivipola;
    }

    /**
     * Set idlistaprecios
     *
     * @param \Inventario\FrontBundle\Entity\Listaprecios $idlistaprecios
     * @return Terceros
     */
    public function setIdlistaprecios(\Inventario\FrontBundle\Entity\Listaprecios $idlistaprecios = null)
    {
        $this->idlistaprecios = $idlistaprecios;

        return $this;
    }

    /**
     * Get idlistaprecios
     *
     * @return \Inventario\FrontBundle\Entity\Listaprecios 
     */
    public function getIdlistaprecios()
    {
        return $this->idlistaprecios;
    }
}
