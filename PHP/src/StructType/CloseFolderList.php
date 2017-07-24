<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseFolderList StructType
 * @subpackage Structs
 */
class CloseFolderList extends AbstractStructBase
{
    /**
     * The IDList
     * @var string
     */
    public $IDList;
    /**
     * Constructor method for CloseFolderList
     * @uses CloseFolderList::setIDList()
     * @param string $iDList
     */
    public function __construct($iDList = null)
    {
        $this
            ->setIDList($iDList);
    }
    /**
     * Get IDList value
     * @return string|null
     */
    public function getIDList()
    {
        return $this->IDList;
    }
    /**
     * Set IDList value
     * @param string $iDList
     * @return \NOUTSoap\StructType\CloseFolderList
     */
    public function setIDList($iDList = null)
    {
        // validation for constraint: string
        if (!is_null($iDList) && !is_string($iDList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDList)), __LINE__);
        }
        $this->IDList = $iDList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\CloseFolderList
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
