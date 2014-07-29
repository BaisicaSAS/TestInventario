<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listaprecios
 *
 * @ORM\Table(name="listaprecios")
 * @ORM\Entity
 */
class Listaprecios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idListaPrecios", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="txNomLista", type="string", length=45, nullable=false)
     */
    private $txnomlista;

    /**
     * @var integer
     *
     * @ORM\Column(name="inActiva", type="integer", nullable=false)
     */
    private $inactiva = '1';



    /**
     * Get idlistaprecios
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set txnomlista
     *
     * @param string $txnomlista
     * @return Listaprecios
     */
    public function setTxnomlista($txnomlista)
    {
        $this->txnomlista = $txnomlista;

        return $this;
    }

    /**
     * Get txnomlista
     *
     * @return string 
     */
    public function getTxnomlista()
    {
        return $this->txnomlista;
    }

    /**
     * Set inactiva
     *
     * @param integer $inactiva
     * @return Listaprecios
     */
    public function setInactiva($inactiva)
    {
        $this->inactiva = $inactiva;

        return $this;
    }

    /**
     * Get inactiva
     *
     * @return integer 
     */
    public function getInactiva()
    {
        return $this->inactiva;
    }
}
