<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoresproductos
 *
 * @ORM\Table(name="ValoresProductos", indexes={@ORM\Index(name="fk_ValoresProductos_Productos1_idx", columns={"idProducto"})})
 * @ORM\Entity
 */
class Valoresproductos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idValoresProductos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvaloresproductos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feFecha", type="datetime", nullable=false)
     */
    private $fefecha;

    /**
     * @var float
     *
     * @ORM\Column(name="dbPromVenta", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbpromventa;

    /**
     * @var float
     *
     * @ORM\Column(name="dbPromCompra", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbpromcompra;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProducto", referencedColumnName="idProducto")
     * })
     */
    private $idproducto;



    /**
     * Get idvaloresproductos
     *
     * @return integer 
     */
    public function getIdvaloresproductos()
    {
        return $this->idvaloresproductos;
    }

    /**
     * Set fefecha
     *
     * @param \DateTime $fefecha
     * @return Valoresproductos
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
     * Set dbpromventa
     *
     * @param float $dbpromventa
     * @return Valoresproductos
     */
    public function setDbpromventa($dbpromventa)
    {
        $this->dbpromventa = $dbpromventa;

        return $this;
    }

    /**
     * Get dbpromventa
     *
     * @return float 
     */
    public function getDbpromventa()
    {
        return $this->dbpromventa;
    }

    /**
     * Set dbpromcompra
     *
     * @param float $dbpromcompra
     * @return Valoresproductos
     */
    public function setDbpromcompra($dbpromcompra)
    {
        $this->dbpromcompra = $dbpromcompra;

        return $this;
    }

    /**
     * Get dbpromcompra
     *
     * @return float 
     */
    public function getDbpromcompra()
    {
        return $this->dbpromcompra;
    }

    /**
     * Set idproducto
     *
     * @param \Inventario\FrontBundle\Entity\Productos $idproducto
     * @return Valoresproductos
     */
    public function setIdproducto(\Inventario\FrontBundle\Entity\Productos $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \Inventario\FrontBundle\Entity\Productos 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }
}
