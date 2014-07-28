<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasifproductos
 *
 * @ORM\Table(name="clasifproductos", indexes={@ORM\Index(name="fk_ClasifProductos_ClasifProductos1_idx", columns={"inPadre"})})
 * @ORM\Entity
 */
class Clasifproductos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClasifProductos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasifproductos;

    /**
     * @var string
     *
     * @ORM\Column(name="txDescripcion", type="string", length=45, nullable=false)
     */
    private $txdescripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="inTipo", type="integer", nullable=false)
     */
    private $intipo = '0';

    /**
     * @var \Clasifproductos
     *
     * @ORM\ManyToOne(targetEntity="Clasifproductos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inPadre", referencedColumnName="idClasifProductos")
     * })
     */
    private $inpadre;



    /**
     * Get idclasifproductos
     *
     * @return integer 
     */
    public function getIdclasifproductos()
    {
        return $this->idclasifproductos;
    }

    /**
     * Set txdescripcion
     *
     * @param string $txdescripcion
     * @return Clasifproductos
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
     * Set intipo
     *
     * @param integer $intipo
     * @return Clasifproductos
     */
    public function setIntipo($intipo)
    {
        $this->intipo = $intipo;

        return $this;
    }

    /**
     * Get intipo
     *
     * @return integer 
     */
    public function getIntipo()
    {
        return $this->intipo;
    }

    /**
     * Set inpadre
     *
     * @param \Inventario\FrontBundle\Entity\Clasifproductos $inpadre
     * @return Clasifproductos
     */
    public function setInpadre(\Inventario\FrontBundle\Entity\Clasifproductos $inpadre = null)
    {
        $this->inpadre = $inpadre;

        return $this;
    }

    /**
     * Get inpadre
     *
     * @return \Inventario\FrontBundle\Entity\Clasifproductos 
     */
    public function getInpadre()
    {
        return $this->inpadre;
    }
}
