<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Filter StructType
 * @subpackage Structs
 */
class Filter extends AbstractStructBase
{
    /**
     * The xml
     * @var string
     */
    public $xml;
    /**
     * The schema
     * @var string
     */
    public $schema;
    /**
     * Constructor method for Filter
     * @uses Filter::setXml()
     * @uses Filter::setSchema()
     * @param string $xml
     * @param string $schema
     */
    public function __construct($xml = null, $schema = null)
    {
        $this
            ->setXml($xml)
            ->setSchema($schema);
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
     * @return \NOUTSoap\StructType\Filter
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
     * Get schema value
     * @return string|null
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * Set schema value
     * @param string $schema
     * @return \NOUTSoap\StructType\Filter
     */
    public function setSchema($schema = null)
    {
        // validation for constraint: string
        if (!is_null($schema) && !is_string($schema)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($schema)), __LINE__);
        }
        $this->schema = $schema;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Filter
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
