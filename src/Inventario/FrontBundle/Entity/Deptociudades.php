<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deptociudades
 *
 * @ORM\Table(name="deptociudades")
 * @ORM\Entity
 */
class Deptociudades
{
    /**
     * @var string
     *
     * @ORM\Column(name="txDivipola", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $txdivipola;

    /**
     * @var string
     *
     * @ORM\Column(name="txNombre", type="string", length=150, nullable=false)
     */
    private $txnombre;

    /**
     * @var string
     *
     * @ORM\Column(name="idPadre", type="string", length=15, nullable=true)
     */
    private $idpadre;



    /**
     * Get txdivipola
     *
     * @return string 
     */
    public function getTxdivipola()
    {
        return $this->txdivipola;
    }

    /**
     * Set txnombre
     *
     * @param string $txnombre
     * @return Deptociudades
     */
    public function setTxnombre($txnombre)
    {
        $this->txnombre = $txnombre;

        return $this;
    }

    /**
     * Get txnombre
     *
     * @return string 
     */
    public function getTxnombre()
    {
        return $this->txnombre;
    }

    /**
     * Set idpadre
     *
     * @param string $idpadre
     * @return Deptociudades
     */
    public function setIdpadre($idpadre)
    {
        $this->idpadre = $idpadre;

        return $this;
    }

    /**
     * Get idpadre
     *
     * @return string 
     */
    public function getIdpadre()
    {
        return $this->idpadre;
    }
}
