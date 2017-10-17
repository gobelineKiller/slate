<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for DrillThrough StructType
 * @subpackage Structs
 */
class DrillThrough extends AbstractStructBase
{
    /**
     * The Record
     * @var string
     */
    public $Record;
    /**
     * The Column
     * @var string
     */
    public $Column;
    /**
     * The SpecialParamList
     * @var \NOUTSoap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for DrillThrough
     * @uses DrillThrough::setRecord()
     * @uses DrillThrough::setColumn()
     * @uses DrillThrough::setSpecialParamList()
     * @param string $record
     * @param string $column
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($record = null, $column = null, \NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setRecord($record)
            ->setColumn($column)
            ->setSpecialParamList($specialParamList);
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
     * @return \NOUTSoap\StructType\DrillThrough
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
     * @return \NOUTSoap\StructType\DrillThrough
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
     * @return \NOUTSoap\StructType\DrillThrough
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
     * @return \NOUTSoap\StructType\DrillThrough
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
