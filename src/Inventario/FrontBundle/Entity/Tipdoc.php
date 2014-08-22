<?php

namespace Inventario\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipdoc
 *
 * @ORM\Table(name="TipDoc", uniqueConstraints={@ORM\UniqueConstraint(name="txTipDoc_UNIQUE", columns={"txTipDoc"})})
 * @ORM\Entity
 */
class Tipdoc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTipDoc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="txTipDoc", type="string", length=7, nullable=false)
     */
    private $txtipdoc;

    /**
     * @var string
     *
     * @ORM\Column(name="txNomDoc", type="string", length=50, nullable=false)
     */
    private $txnomdoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="inAfecta", type="integer", nullable=false)
     */
    private $inafecta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inTipTer", type="integer", nullable=true)
     */
    private $intipter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="txObservPlantilla", type="string", length=45, nullable=true)
     */
    private $txobservplantilla;



    /**
     * Get idtipdoc
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set txtipdoc
     *
     * @param string $txtipdoc
     * @return Tipdoc
     */
    public function setTxtipdoc($txtipdoc)
    {
        $this->txtipdoc = $txtipdoc;

        return $this;
    }

    /**
     * Get txtipdoc
     *
     * @return string 
     */
    public function getTxtipdoc()
    {
        return $this->txtipdoc;
    }

    /**
     * Set txnomdoc
     *
     * @param string $txnomdoc
     * @return Tipdoc
     */
    public function setTxnomdoc($txnomdoc)
    {
        $this->txnomdoc = $txnomdoc;

        return $this;
    }

    /**
     * Get txnomdoc
     *
     * @return string 
     */
    public function getTxnomdoc()
    {
        return $this->txnomdoc;
    }

    /**
     * Set inafecta
     *
     * @param integer $inafecta
     * @return Tipdoc
     */
    public function setInafecta($inafecta)
    {
        $this->inafecta = $inafecta;

        return $this;
    }

    /**
     * Get inafecta
     *
     * @return integer 
     */
    public function getInafecta()
    {
        return $this->inafecta;
    }

    /**
     * Set intipter
     *
     * @param integer $intipter
     * @return Tipdoc
     */
    public function setIntipter($intipter)
    {
        $this->intipter = $intipter;

        return $this;
    }

    /**
     * Get intipter
     *
     * @return integer 
     */
    public function getIntipter()
    {
        return $this->intipter;
    }

    /**
     * Set txobservplantilla
     *
     * @param string $txobservplantilla
     * @return Tipdoc
     */
    public function setTxobservplantilla($txobservplantilla)
    {
        $this->txobservplantilla = $txobservplantilla;

        return $this;
    }

    /**
     * Get txobservplantilla
     *
     * @return string 
     */
    public function getTxobservplantilla()
    {
        return $this->txobservplantilla;
    }
}
