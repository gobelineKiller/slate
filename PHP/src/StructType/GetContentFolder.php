<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContentFolder StructType
 * @subpackage Structs
 */
class GetContentFolder extends AbstractStructBase
{
    /**
     * The IDFolder
     * @var string
     */
    public $IDFolder;
    /**
     * The SpecialParamList
     * @var \NOUTSoap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for GetContentFolder
     * @uses GetContentFolder::setIDFolder()
     * @uses GetContentFolder::setSpecialParamList()
     * @param string $iDFolder
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($iDFolder = null, \NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setIDFolder($iDFolder)
            ->setSpecialParamList($specialParamList);
    }
    /**
     * Get IDFolder value
     * @return string|null
     */
    public function getIDFolder()
    {
        return $this->IDFolder;
    }
    /**
     * Set IDFolder value
     * @param string $iDFolder
     * @return \NOUTSoap\StructType\GetContentFolder
     */
    public function setIDFolder($iDFolder = null)
    {
        // validation for constraint: string
        if (!is_null($iDFolder) && !is_string($iDFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDFolder)), __LINE__);
        }
        $this->IDFolder = $iDFolder;
        return $this;
    }
    /**
     * Get SpecialParamList value
     * @return \NOUTSoap\StructType\SpecialParamListType|null
     */
    public function getSpecialParamList()
    {
        return $this->SpecialParamList;
    }
    /**
     * Set SpecialParamList value
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     * @return \NOUTSoap\StructType\GetContentFolder
     */
    public function setSpecialParamList(\NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetContentFolder
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
