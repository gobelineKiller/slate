<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for AddPJ StructType
 * @subpackage Structs
 */
class AddPJ extends AbstractStructBase
{
    /**
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * The DataPJ
     * @var \NOUTSoap\StructType\DataPJType
     */
    public $DataPJ;
    /**
     * Constructor method for AddPJ
     * @uses AddPJ::setIDMessage()
     * @uses AddPJ::setDataPJ()
     * @param string $iDMessage
     * @param \NOUTSoap\StructType\DataPJType $dataPJ
     */
    public function __construct($iDMessage = null, \NOUTSoap\StructType\DataPJType $dataPJ = null)
    {
        $this
            ->setIDMessage($iDMessage)
            ->setDataPJ($dataPJ);
    }
    /**
     * Get IDMessage value
     * @return string|null
     */
    public function getIDMessage()
    {
        return $this->IDMessage;
    }
    /**
     * Set IDMessage value
     * @param string $iDMessage
     * @return \NOUTSoap\StructType\AddPJ
     */
    public function setIDMessage($iDMessage = null)
    {
        // validation for constraint: string
        if (!is_null($iDMessage) && !is_string($iDMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDMessage)), __LINE__);
        }
        $this->IDMessage = $iDMessage;
        return $this;
    }
    /**
     * Get DataPJ value
     * @return \NOUTSoap\StructType\DataPJType|null
     */
    public function getDataPJ()
    {
        return $this->DataPJ;
    }
    /**
     * Set DataPJ value
     * @param \NOUTSoap\StructType\DataPJType $dataPJ
     * @return \NOUTSoap\StructType\AddPJ
     */
    public function setDataPJ(\NOUTSoap\StructType\DataPJType $dataPJ = null)
    {
        $this->DataPJ = $dataPJ;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\AddPJ
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
