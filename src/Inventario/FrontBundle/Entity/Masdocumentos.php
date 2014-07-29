<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Masdocumentos
 *
 * @ORM\Table(name="masdocumentos", indexes={@ORM\Index(name="fk_MasDocumentos_TipDoc_idx", columns={"inidTipDoc"}), @ORM\Index(name="fk_MasDocumentos_Terceros1_idx", columns={"inidTercero"}), @ORM\Index(name="fk_MasDocumentos_Vendedores1_idx", columns={"Vendedores_idVendedor"})})
 * @ORM\Entity
 */
class Masdocumentos
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
     *   @ORM\JoinColumn(name="inidTipDoc", referencedColumnName="idTipDoc")
     * })
     */
    private $inidtipdoc;

    /**
     * @var \Terceros
     *
     * @ORM\ManyToOne(targetEntity="Terceros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inidTercero", referencedColumnName="idTercero")
     * })
     */
    private $inidtercero;

    /**
     * @var \Vendedores
     *
     * @ORM\ManyToOne(targetEntity="Vendedores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Vendedores_idVendedor", referencedColumnName="idVendedor")
     * })
     */
    private $vendedoresvendedor;



    /**
     * Get idmasdocumento
     *
     * @return integer 
     */
    public function get()
    {
        return $this->id;
    }

    /**
     * Set txnumdoc
     *
     * @param string $txnumdoc
     * @return Masdocumentos
     */
    public function setTxnumdoc($txnumdoc)
    {
        $this->txnumdoc = $txnumdoc;

        return $this;
    }

    /**
     * Get txnumdoc
     *
     * @return string 
     */
    public function getTxnumdoc()
    {
        return $this->txnumdoc;
    }

    /**
     * Set fefecha
     *
     * @param \DateTime $fefecha
     * @return Masdocumentos
     */
    public function setFefecha($fefecha)
    {
        $this->fefecha = $fefecha;

        return $this;
    }

    /**
     * Get fefecha
     *
     * @return \DateTime 
     */
    public function getFefecha()
    {
        return $this->fefecha;
    }

    /**
     * Set fevencimiento
     *
     * @param \DateTime $fevencimiento
     * @return Masdocumentos
     */
    public function setFevencimiento($fevencimiento)
    {
        $this->fevencimiento = $fevencimiento;

        return $this;
    }

    /**
     * Get fevencimiento
     *
     * @return \DateTime 
     */
    public function getFevencimiento()
    {
        return $this->fevencimiento;
    }

    /**
     * Set txobservaciones
     *
     * @param integer $txobservaciones
     * @return Masdocumentos
     */
    public function setTxobservaciones($txobservaciones)
    {
        $this->txobservaciones = $txobservaciones;

        return $this;
    }

    /**
     * Get txobservaciones
     *
     * @return integer 
     */
    public function getTxobservaciones()
    {
        return $this->txobservaciones;
    }

    /**
     * Set txcondpago
     *
     * @param string $txcondpago
     * @return Masdocumentos
     */
    public function setTxcondpago($txcondpago)
    {
        $this->txcondpago = $txcondpago;

        return $this;
    }

    /**
     * Get txcondpago
     *
     * @return string 
     */
    public function getTxcondpago()
    {
        return $this->txcondpago;
    }

    /**
     * Set dbvalneto
     *
     * @param float $dbvalneto
     * @return Masdocumentos
     */
    public function setDbvalneto($dbvalneto)
    {
        $this->dbvalneto = $dbvalneto;

        return $this;
    }

    /**
     * Get dbvalneto
     *
     * @return float 
     */
    public function getDbvalneto()
    {
        return $this->dbvalneto;
    }

    /**
     * Set dbvaliva
     *
     * @param float $dbvaliva
     * @return Masdocumentos
     */
    public function setDbvaliva($dbvaliva)
    {
        $this->dbvaliva = $dbvaliva;

        return $this;
    }

    /**
     * Get dbvaliva
     *
     * @return float 
     */
    public function getDbvaliva()
    {
        return $this->dbvaliva;
    }

    /**
     * Set dbtotal
     *
     * @param float $dbtotal
     * @return Masdocumentos
     */
    public function setDbtotal($dbtotal)
    {
        $this->dbtotal = $dbtotal;

        return $this;
    }

    /**
     * Get dbtotal
     *
     * @return float 
     */
    public function getDbtotal()
    {
        return $this->dbtotal;
    }

    /**
     * Set inidtipdoc
     *
     * @param \Inventario\FrontBundle\Entity\Tipdoc $inidtipdoc
     * @return Masdocumentos
     */
    public function setInidtipdoc(\Inventario\FrontBundle\Entity\Tipdoc $inidtipdoc = null)
    {
        $this->inidtipdoc = $inidtipdoc;

        return $this;
    }

    /**
     * Get inidtipdoc
     *
     * @return \Inventario\FrontBundle\Entity\Tipdoc 
     */
    public function getInidtipdoc()
    {
        return $this->inidtipdoc;
    }

    /**
     * Set inidtercero
     *
     * @param \Inventario\FrontBundle\Entity\Terceros $inidtercero
     * @return Masdocumentos
     */
    public function setInidtercero(\Inventario\FrontBundle\Entity\Terceros $inidtercero = null)
    {
        $this->inidtercero = $inidtercero;

        return $this;
    }

    /**
     * Get inidtercero
     *
     * @return \Inventario\FrontBundle\Entity\Terceros 
     */
    public function getInidtercero()
    {
        return $this->inidtercero;
    }

    /**
     * Set vendedoresvendedor
     *
     * @param \Inventario\FrontBundle\Entity\Vendedores $vendedoresvendedor
     * @return Masdocumentos
     */
    public function setVendedoresvendedor(\Inventario\FrontBundle\Entity\Vendedores $vendedoresvendedor = null)
    {
        $this->vendedoresvendedor = $vendedoresvendedor;

        return $this;
    }

    /**
     * Get vendedoresvendedor
     *
     * @return \Inventario\FrontBundle\Entity\Vendedores 
     */
    public function getVendedoresvendedor()
    {
        return $this->vendedoresvendedor;
    }
}
