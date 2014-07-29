<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detdocumentos
 *
 * @ORM\Table(name="detdocumentos", indexes={@ORM\Index(name="fk_DetDocumentos_MasDocumentos1_idx", columns={"inidMasDocumento"}), @ORM\Index(name="fk_DetDocumentos_Productos1_idx", columns={"Productos_idProducto"})})
 * @ORM\Entity
 */
class Detdocumentos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDetDocumentos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="inCantidad", type="integer", nullable=false)
     */
    private $incantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dbValUnitario", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbvalunitario = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dbValtotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $dbvaltotal;

    /**
     * @var \Masdocumentos
     *
     * @ORM\ManyToOne(targetEntity="Masdocumentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inidMasDocumento", referencedColumnName="idMasDocumento")
     * })
     */
    private $inidmasdocumento;

    /**
     * @var \Productos
     *
     * @ORM\ManyToOne(targetEntity="Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Productos_idProducto", referencedColumnName="idProducto")
     * })
     */
    private $productosproducto;



    /**
     * Get iddetdocumentos
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set incantidad
     *
     * @param integer $incantidad
     * @return Detdocumentos
     */
    public function setIncantidad($incantidad)
    {
        $this->incantidad = $incantidad;

        return $this;
    }

    /**
     * Get incantidad
     *
     * @return integer 
     */
    public function getIncantidad()
    {
        return $this->incantidad;
    }

    /**
     * Set dbvalunitario
     *
     * @param float $dbvalunitario
     * @return Detdocumentos
     */
    public function setDbvalunitario($dbvalunitario)
    {
        $this->dbvalunitario = $dbvalunitario;

        return $this;
    }

    /**
     * Get dbvalunitario
     *
     * @return float 
     */
    public function getDbvalunitario()
    {
        return $this->dbvalunitario;
    }

    /**
     * Set dbvaltotal
     *
     * @param float $dbvaltotal
     * @return Detdocumentos
     */
    public function setDbvaltotal($dbvaltotal)
    {
        $this->dbvaltotal = $dbvaltotal;

        return $this;
    }

    /**
     * Get dbvaltotal
     *
     * @return float 
     */
    public function getDbvaltotal()
    {
        return $this->dbvaltotal;
    }

    /**
     * Set inidmasdocumento
     *
     * @param \Inventario\FrontBundle\Entity\Masdocumentos $inidmasdocumento
     * @return Detdocumentos
     */
    public function setInidmasdocumento(\Inventario\FrontBundle\Entity\Masdocumentos $inidmasdocumento = null)
    {
        $this->inidmasdocumento = $inidmasdocumento;

        return $this;
    }

    /**
     * Get inidmasdocumento
     *
     * @return \Inventario\FrontBundle\Entity\Masdocumentos 
     */
    public function getInidmasdocumento()
    {
        return $this->inidmasdocumento;
    }

    /**
     * Set productosproducto
     *
     * @param \Inventario\FrontBundle\Entity\Productos $productosproducto
     * @return Detdocumentos
     */
    public function setProductosproducto(\Inventario\FrontBundle\Entity\Productos $productosproducto = null)
    {
        $this->productosproducto = $productosproducto;

        return $this;
    }

    /**
     * Get productosproducto
     *
     * @return \Inventario\FrontBundle\Entity\Productos 
     */
    public function getProductosproducto()
    {
        return $this->productosproducto;
    }
}
