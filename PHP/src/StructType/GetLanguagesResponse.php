<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLanguagesResponse StructType
 * @subpackage Structs
 */
class GetLanguagesResponse extends AbstractStructBase
{
    /**
     * The xml
     * @var \NOUTSoap\StructType\LanguageCodeList
     */
    public $xml;
    /**
     * Constructor method for GetLanguagesResponse
     * @uses GetLanguagesResponse::setXml()
     * @param \NOUTSoap\StructType\LanguageCodeList $xml
     */
    public function __construct(\NOUTSoap\StructType\LanguageCodeList $xml = null)
    {
        $this
            ->setXml($xml);
    }
    /**
     * Get xml value
     * @return \NOUTSoap\StructType\LanguageCodeList|null
     */
    public function getXml()
    {
        return $this->xml;
    }
    /**
     * Set xml value
     * @param \NOUTSoap\StructType\LanguageCodeList $xml
     * @return \NOUTSoap\StructType\GetLanguagesResponse
     */
    public function setXml(\NOUTSoap\StructType\LanguageCodeList $xml = null)
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
     * @return \NOUTSoap\StructType\GetLanguagesResponse
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
