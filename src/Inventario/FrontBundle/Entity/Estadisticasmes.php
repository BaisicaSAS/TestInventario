<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadisticasmes
 *
 * @ORM\Table(name="EstadisticasMes", indexes={@ORM\Index(name="fk_Estadisticas_Terceros1_idx", columns={"idTercero"}), @ORM\Index(name="fk_Estadisticas_Productos1_idx", columns={"Productos_idProducto"})})
 * @ORM\Entity
 */
class Estadisticasmes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEstadistica", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestadistica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feFechaIni", type="datetime", nullable=false)
     */
    private $fefechaini;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="feFechaFin", type="datetime", nullable=false)
     */
    private $fefechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="inCantidad", type="string", length=45, nullable=true)
     */
    private $incantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="dbValor", type="float", precision=10, scale=0, nullable=true)
     */
    private $dbvalor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inTipoTrx", type="integer", nullable=true)
     */
    private $intipotrx = '2';

    /**
     * @var \Terceros
     *
     * @ORM\ManyToOne(targetEntity="Terceros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTercero", referencedColumnName="idTercero")
     * })
     */
    private $idtercero;

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
     * Get idestadistica
     *
     * @return integer 
     */
    public function getIdestadistica()
    {
        return $this->idestadistica;
    }

    /**
     * Set fefechaini
     *
     * @param \DateTime $fefechaini
     * @return Estadisticasmes
     */
    public function setFefechaini($fefechaini)
    {
        $this->fefechaini = $fefechaini;

        return $this;
    }

    /**
     * Get fefechaini
     *
     * @return \DateTime 
     */
    public function getFefechaini()
    {
        return $this->fefechaini;
    }

    /**
     * Set fefechafin
     *
     * @param \DateTime $fefechafin
     * @return Estadisticasmes
     */
    public function setFefechafin($fefechafin)
    {
        $this->fefechafin = $fefechafin;

        return $this;
    }

    /**
     * Get fefechafin
     *
     * @return \DateTime 
     */
    public function getFefechafin()
    {
        return $this->fefechafin;
    }

    /**
     * Set incantidad
     *
     * @param string $incantidad
     * @return Estadisticasmes
     */
    public function setIncantidad($incantidad)
    {
        $this->incantidad = $incantidad;

        return $this;
    }

    /**
     * Get incantidad
     *
     * @return string 
     */
    public function getIncantidad()
    {
        return $this->incantidad;
    }

    /**
     * Set dbvalor
     *
     * @param float $dbvalor
     * @return Estadisticasmes
     */
    public function setDbvalor($dbvalor)
    {
        $this->dbvalor = $dbvalor;

        return $this;
    }

    /**
     * Get dbvalor
     *
     * @return float 
     */
    public function getDbvalor()
    {
        return $this->dbvalor;
    }

    /**
     * Set intipotrx
     *
     * @param integer $intipotrx
     * @return Estadisticasmes
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
     * Set idtercero
     *
     * @param \Inventario\FrontBundle\Entity\Terceros $idtercero
     * @return Estadisticasmes
     */
    public function setIdtercero(\Inventario\FrontBundle\Entity\Terceros $idtercero = null)
    {
        $this->idtercero = $idtercero;

        return $this;
    }

    /**
     * Get idtercero
     *
     * @return \Inventario\FrontBundle\Entity\Terceros 
     */
    public function getIdtercero()
    {
        return $this->idtercero;
    }

    /**
     * Set productosproducto
     *
     * @param \Inventario\FrontBundle\Entity\Productos $productosproducto
     * @return Estadisticasmes
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
