<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detlistaprecios
 *
 * @ORM\Table(name="detlistaprecios", indexes={@ORM\Index(name="fk_DetListaPrecios_ListaPrecios1_idx", columns={"ListaPrecios_idListaPrecios"}), @ORM\Index(name="fk_DetListaPrecios_Productos1_idx", columns={"Productos_idProducto"})})
 * @ORM\Entity
 */
class Detlistaprecios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDetListaPrecioscol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetlistaprecioscol;

    /**
     * @var float
     *
     * @ORM\Column(name="dbValor", type="float", precision=10, scale=0, nullable=false)
     */
    private $dbvalor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="txImagen", type="string", length=150, nullable=true)
     */
    private $tximagen;

    /**
     * @var \Listaprecios
     *
     * @ORM\ManyToOne(targetEntity="Listaprecios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ListaPrecios_idListaPrecios", referencedColumnName="idListaPrecios")
     * })
     */
    private $listaprecioslistaprecios;

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
     * Get iddetlistaprecioscol
     *
     * @return integer 
     */
    public function getIddetlistaprecioscol()
    {
        return $this->iddetlistaprecioscol;
    }

    /**
     * Set dbvalor
     *
     * @param float $dbvalor
     * @return Detlistaprecios
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
     * Set tximagen
     *
     * @param string $tximagen
     * @return Detlistaprecios
     */
    public function setTximagen($tximagen)
    {
        $this->tximagen = $tximagen;

        return $this;
    }

    /**
     * Get tximagen
     *
     * @return string 
     */
    public function getTximagen()
    {
        return $this->tximagen;
    }

    /**
     * Set listaprecioslistaprecios
     *
     * @param \Inventario\FrontBundle\Entity\Listaprecios $listaprecioslistaprecios
     * @return Detlistaprecios
     */
    public function setListaprecioslistaprecios(\Inventario\FrontBundle\Entity\Listaprecios $listaprecioslistaprecios = null)
    {
        $this->listaprecioslistaprecios = $listaprecioslistaprecios;

        return $this;
    }

    /**
     * Get listaprecioslistaprecios
     *
     * @return \Inventario\FrontBundle\Entity\Listaprecios 
     */
    public function getListaprecioslistaprecios()
    {
        return $this->listaprecioslistaprecios;
    }

    /**
     * Set productosproducto
     *
     * @param \Inventario\FrontBundle\Entity\Productos $productosproducto
     * @return Detlistaprecios
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
