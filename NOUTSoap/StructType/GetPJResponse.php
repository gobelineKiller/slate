<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPJResponse StructType
 * @subpackage Structs
 */
class GetPJResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var \NOUTSoap\StructType\GetPJResponseType
     */
    public $xml;
    /**
     * Constructor method for GetPJResponse
     * @uses GetPJResponse::setXml()
     * @param \NOUTSoap\StructType\GetPJResponseType $xml
     */
    public function __construct(\NOUTSoap\StructType\GetPJResponseType $xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return \NOUTSoap\StructType\GetPJResponseType|null
     */
    public function getXml()
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param \NOUTSoap\StructType\GetPJResponseType $xml
     * @return \NOUTSoap\StructType\GetPJResponse
     */
    public function setXml(\NOUTSoap\StructType\GetPJResponseType $xml = null)
    {
        $this->xml = $xml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetPJResponse
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
