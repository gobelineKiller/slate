<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckCreateElementResponse StructType
 * @subpackage Structs
 */
class CheckCreateElementResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var string
     */
    public $xml;
    /**
     * Constructor method for CheckCreateElementResponse
     * @uses CheckCreateElementResponse::setXml()
     * @param string $xml
     */
    public function __construct($xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return string|null
     */
    public function getXml()
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param string $xml
     * @return \NOUTSoap\StructType\CheckCreateElementResponse
     */
    public function setXml($xml = null)
    {
        // validation for constraint: string
        if (!is_null($xml) && !is_string($xml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xml)), __LINE__);
        }
        $this->xml = $xml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\CheckCreateElementResponse
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
