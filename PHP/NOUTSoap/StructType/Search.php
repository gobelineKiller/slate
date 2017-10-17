<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for Search StructType
 * @subpackage Structs
 */
class Search extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ParamXML
     * @var string
     */
    public $ParamXML;
    /**
     * The SpecialParamList
     * @var \NOUTSoap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * The Checksum
     * @var int
     */
    public $Checksum;
    /**
     * The DisplayMode
     * @var string
     */
    public $DisplayMode;
    /**
     * The CallingColumn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CallingColumn;
    /**
     * The CallingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\CallingInfoType
     */
    public $CallingInfo;
    /**
     * Constructor method for Search
     * @uses Search::setTable()
     * @uses Search::setParamXML()
     * @uses Search::setSpecialParamList()
     * @uses Search::setChecksum()
     * @uses Search::setDisplayMode()
     * @uses Search::setCallingColumn()
     * @uses Search::setCallingInfo()
     * @param string $table
     * @param string $paramXML
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     * @param int $checksum
     * @param string $displayMode
     * @param string $callingColumn
     * @param \NOUTSoap\StructType\CallingInfoType $callingInfo
     */
    public function __construct($table = null, $paramXML = null, \NOUTSoap\StructType\SpecialParamListType $specialParamList = null, $checksum = null, $displayMode = null, $callingColumn = null, \NOUTSoap\StructType\CallingInfoType $callingInfo = null)
    {
        $this
            ->setTable($table)
            ->setParamXML($paramXML)
            ->setSpecialParamList($specialParamList)
            ->setChecksum($checksum)
            ->setDisplayMode($displayMode)
            ->setCallingColumn($callingColumn)
            ->setCallingInfo($callingInfo);
    }
    /**
     * Get Table value
     * @return string|null
     */
    public function getTable()
    {
        return $this->Table;
    }
    /**
     * Set Table value
     * @param string $table
     * @return \NOUTSoap\StructType\Search
     */
    public function setTable($table = null)
    {
        // validation for constraint: string
        if (!is_null($table) && !is_string($table)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($table)), __LINE__);
        }
        $this->Table = $table;
        return $this;
    }
    /**
     * Get ParamXML value
     * @return string|null
     */
    public function getParamXML()
    {
        return $this->ParamXML;
    }
    /**
     * Set ParamXML value
     * @param string $paramXML
     * @return \NOUTSoap\StructType\Search
     */
    public function setParamXML($paramXML = null)
    {
        // validation for constraint: string
        if (!is_null($paramXML) && !is_string($paramXML)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramXML)), __LINE__);
        }
        $this->ParamXML = $paramXML;
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
     * @return \NOUTSoap\StructType\Search
     */
    public function setSpecialParamList(\NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
        return $this;
    }
    /**
     * Get Checksum value
     * @return int|null
     */
    public function getChecksum()
    {
        return $this->Checksum;
    }
    /**
     * Set Checksum value
     * @param int $checksum
     * @return \NOUTSoap\StructType\Search
     */
    public function setChecksum($checksum = null)
    {
        // validation for constraint: int
        if (!is_null($checksum) && !is_numeric($checksum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checksum)), __LINE__);
        }
        $this->Checksum = $checksum;
        return $this;
    }
    /**
     * Get DisplayMode value
     * @return string|null
     */
    public function getDisplayMode()
    {
        return $this->DisplayMode;
    }
    /**
     * Set DisplayMode value
     * @uses \NOUTSoap\EnumType\DisplayModeParamEnum::valueIsValid()
     * @uses \NOUTSoap\EnumType\DisplayModeParamEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayMode
     * @return \NOUTSoap\StructType\Search
     */
    public function setDisplayMode($displayMode = null)
    {
        // validation for constraint: enumeration
        if (!\NOUTSoap\EnumType\DisplayModeParamEnum::valueIsValid($displayMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $displayMode, implode(', ', \NOUTSoap\EnumType\DisplayModeParamEnum::getValidValues())), __LINE__);
        }
        $this->DisplayMode = $displayMode;
        return $this;
    }
    /**
     * Get CallingColumn value
     * @return string|null
     */
    public function getCallingColumn()
    {
        return $this->CallingColumn;
    }
    /**
     * Set CallingColumn value
     * @param string $callingColumn
     * @return \NOUTSoap\StructType\Search
     */
    public function setCallingColumn($callingColumn = null)
    {
        // validation for constraint: string
        if (!is_null($callingColumn) && !is_string($callingColumn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingColumn)), __LINE__);
        }
        $this->CallingColumn = $callingColumn;
        return $this;
    }
    /**
     * Get CallingInfo value
     * @return \NOUTSoap\StructType\CallingInfoType|null
     */
    public function getCallingInfo()
    {
        return $this->CallingInfo;
    }
    /**
     * Set CallingInfo value
     * @param \NOUTSoap\StructType\CallingInfoType $callingInfo
     * @return \NOUTSoap\StructType\Search
     */
    public function setCallingInfo(\NOUTSoap\StructType\CallingInfoType $callingInfo = null)
    {
        $this->CallingInfo = $callingInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Search
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
