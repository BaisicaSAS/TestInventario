<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="productos", uniqueConstraints={@ORM\UniqueConstraint(name="txRefInterna_UNIQUE", columns={"txRefInterna"})}, indexes={@ORM\Index(name="fk_Productos_ClasifProductos1_idx", columns={"idClasifProductos"})})
 * @ORM\Entity
 */
class Productos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="txRefInterna", type="string", length=50, nullable=false)
     */
    private $txrefinterna;

    /**
     * @var string
     *
     * @ORM\Column(name="txRefExterna", type="string", length=50, nullable=true)
     */
    private $txrefexterna;

    /**
     * @var string
     *
     * @ORM\Column(name="txNomProducto", type="string", length=100, nullable=false)
     */
    private $txnomproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="txDescripcion", type="text", nullable=true)
     */
    private $txdescripcion;

    /**
     * @var \Clasifproductos
     *
     * @ORM\ManyToOne(targetEntity="Clasifproductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClasifProductos", referencedColumnName="idClasifProductos")
     * })
     */
    private $idclasifproductos;



    /**
     * Get idproducto
     *
     * @return integer 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set txrefinterna
     *
     * @param string $txrefinterna
     * @return Productos
     */
    public function setTxrefinterna($txrefinterna)
    {
        $this->txrefinterna = $txrefinterna;

        return $this;
    }

    /**
     * Get txrefinterna
     *
     * @return string 
     */
    public function getTxrefinterna()
    {
        return $this->txrefinterna;
    }

    /**
     * Set txrefexterna
     *
     * @param string $txrefexterna
     * @return Productos
     */
    public function setTxrefexterna($txrefexterna)
    {
        $this->txrefexterna = $txrefexterna;

        return $this;
    }

    /**
     * Get txrefexterna
     *
     * @return string 
     */
    public function getTxrefexterna()
    {
        return $this->txrefexterna;
    }

    /**
     * Set txnomproducto
     *
     * @param string $txnomproducto
     * @return Productos
     */
    public function setTxnomproducto($txnomproducto)
    {
        $this->txnomproducto = $txnomproducto;

        return $this;
    }

    /**
     * Get txnomproducto
     *
     * @return string 
     */
    public function getTxnomproducto()
    {
        return $this->txnomproducto;
    }

    /**
     * Set txdescripcion
     *
     * @param string $txdescripcion
     * @return Productos
     */
    public function setTxdescripcion($txdescripcion)
    {
        $this->txdescripcion = $txdescripcion;

        return $this;
    }

    /**
     * Get txdescripcion
     *
     * @return string 
     */
    public function getTxdescripcion()
    {
        return $this->txdescripcion;
    }

    /**
     * Set idclasifproductos
     *
     * @param \Inventario\FrontBundle\Entity\Clasifproductos $idclasifproductos
     * @return Productos
     */
    public function setIdclasifproductos(\Inventario\FrontBundle\Entity\Clasifproductos $idclasifproductos = null)
    {
        $this->idclasifproductos = $idclasifproductos;

        return $this;
    }

    /**
     * Get idclasifproductos
     *
     * @return \Inventario\FrontBundle\Entity\Clasifproductos 
     */
    public function getIdclasifproductos()
    {
        return $this->idclasifproductos;
    }
}
