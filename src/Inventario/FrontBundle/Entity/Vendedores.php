<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendedores
 *
 * @ORM\Table(name="Vendedores")
 * @ORM\Entity
 */
class Vendedores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVendedor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="txDocVendedor", type="string", length=15, nullable=true)
     */
    private $txdocvendedor;

    /**
     * @var string
     *
     * @ORM\Column(name="txNomVendedor", type="string", length=50, nullable=true)
     */
    private $txnomvendedor;



    /**
     * Get idvendedor
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set txdocvendedor
     *
     * @param string $txdocvendedor
     * @return Vendedores
     */
    public function setTxdocvendedor($txdocvendedor)
    {
        $this->txdocvendedor = $txdocvendedor;

        return $this;
    }

    /**
     * Get txdocvendedor
     *
     * @return string 
     */
    public function getTxdocvendedor()
    {
        return $this->txdocvendedor;
    }

    /**
     * Set txnomvendedor
     *
     * @param string $txnomvendedor
     * @return Vendedores
     */
    public function setTxnomvendedor($txnomvendedor)
    {
        $this->txnomvendedor = $txnomvendedor;

        return $this;
    }

    /**
     * Get txnomvendedor
     *
     * @return string 
     */
    public function getTxnomvendedor()
    {
        return $this->txnomvendedor;
    }
}
