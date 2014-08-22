<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kardex
 *
 * @ORM\Table(name="Kardex", indexes={@ORM\Index(name="fk_Kardex_Productos1_idx", columns={"idProducto"})})
 * @ORM\Entity
 */
class Kardex
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idKardex", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idkardex;

    /**
     * @var string
     *
     * @ORM\Column(name="feFecha", type="string", length=45, nullable=false)
     */
    private $fefecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="inTipoTrx", type="integer", nullable=false)
     */
    private $intipotrx = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="itCantidad", type="integer", nullable=false)
     */
    private $itcantidad = '0';

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
     * Get idkardex
     *
     * @return integer 
     */
    public function getIdkardex()
    {
        return $this->idkardex;
    }

    /**
     * Set fefecha
     *
     * @param string $fefecha
     * @return Kardex
     */
    public function setFefecha($fefecha)
    {
        $this->fefecha = $fefecha;

        return $this;
    }

    /**
     * Get fefecha
     *
     * @return string 
     */
    public function getFefecha()
    {
        return $this->fefecha;
    }

    /**
     * Set intipotrx
     *
     * @param integer $intipotrx
     * @return Kardex
     */
    public function setIntipotrx($intipotrx)
    {
        $this->intipotrx = $intipotrx;

        return $this;
    }

    /**
     * Get intipotrx
     *
     * @return integer 
     */
    public function getIntipotrx()
    {
        return $this->intipotrx;
    }

    /**
     * Set itcantidad
     *
     * @param integer $itcantidad
     * @return Kardex
     */
    public function setItcantidad($itcantidad)
    {
        $this->itcantidad = $itcantidad;

        return $this;
    }

    /**
     * Get itcantidad
     *
     * @return integer 
     */
    public function getItcantidad()
    {
        return $this->itcantidad;
    }

    /**
     * Set idproducto
     *
     * @param \Inventario\FrontBundle\Entity\Productos $idproducto
     * @return Kardex
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
