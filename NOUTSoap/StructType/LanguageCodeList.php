<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for LanguageCodeList StructType
 * @subpackage Structs
 */
class LanguageCodeList extends AbstractStructBase
{
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var int[]
     */
    public $LanguageCode;
    /**
     * Constructor method for LanguageCodeList
     * @uses LanguageCodeList::setLanguageCode()
     * @param int[] $languageCode
     */
    public function __construct(array $languageCode = array())
    {
        $this
            ->setLanguageCode($languageCode);
    }
    /**
     * Get LanguageCode value
     * @return int[]
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @throws \InvalidArgumentException
     * @param int[] $languageCode
     * @return \NOUTSoap\StructType\LanguageCodeList
     */
    public function setLanguageCode(array $languageCode = array())
    {
        foreach ($languageCode as $languageCodeListLanguageCodeItem) {
            // validation for constraint: itemType
            if (!is_numeric($languageCodeListLanguageCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The LanguageCode property can only contain items of integer, "%s" given', is_object($languageCodeListLanguageCodeItem) ? get_class($languageCodeListLanguageCodeItem) : gettype($languageCodeListLanguageCodeItem)), __LINE__);
            }
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Add item to LanguageCode value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \NOUTSoap\StructType\LanguageCodeList
     */
    public function addToLanguageCode($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The LanguageCode property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LanguageCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\LanguageCodeList
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
