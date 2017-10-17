<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubListContent StructType
 * @subpackage Structs
 */
class GetSubListContent extends AbstractStructBase
{
    /**
     * The Column
     * @var string
     */
    public $Column;
    /**
     * The Record
     * @var string
     */
    public $Record;
    /**
     * The SpecialParamList
     * @var \NOUTSoap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * The DisplayMode
     * @var string
     */
    public $DisplayMode;
    /**
     * Constructor method for GetSubListContent
     * @uses GetSubListContent::setColumn()
     * @uses GetSubListContent::setRecord()
     * @uses GetSubListContent::setSpecialParamList()
     * @uses GetSubListContent::setDisplayMode()
     * @param string $column
     * @param string $record
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     * @param string $displayMode
     */
    public function __construct($column = null, $record = null, \NOUTSoap\StructType\SpecialParamListType $specialParamList = null, $displayMode = null)
    {
        $this
            ->setColumn($column)
            ->setRecord($record)
            ->setSpecialParamList($specialParamList)
            ->setDisplayMode($displayMode);
    }
    /**
     * Get Column value
     * @return string|null
     */
    public function getColumn()
    {
        return $this->Column;
    }
    /**
     * Set Column value
     * @param string $column
     * @return \NOUTSoap\StructType\GetSubListContent
     */
    public function setColumn($column = null)
    {
        // validation for constraint: string
        if (!is_null($column) && !is_string($column)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($column)), __LINE__);
        }
        $this->Column = $column;
        return $this;
    }
    /**
     * Get Record value
     * @return string|null
     */
    public function getRecord()
    {
        return $this->Record;
    }
    /**
     * Set Record value
     * @param string $record
     * @return \NOUTSoap\StructType\GetSubListContent
     */
    public function setRecord($record = null)
    {
        // validation for constraint: string
        if (!is_null($record) && !is_string($record)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($record)), __LINE__);
        }
        $this->Record = $record;
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
     * @return \NOUTSoap\StructType\GetSubListContent
     */
    public function setSpecialParamList(\NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
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
     * @return \NOUTSoap\StructType\GetSubListContent
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetSubListContent
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
