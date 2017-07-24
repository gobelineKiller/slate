<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestParam StructType
 * @subpackage Structs
 */
class RequestParam extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The CallingColumn
     * @var string
     */
    public $CallingColumn;
    /**
     * The ColList
     * @var \NOUTSoap\StructType\ColListType
     */
    public $ColList;
    /**
     * The CondList
     * @var string
     */
    public $CondList;
    /**
     * The MaxResult
     * @var int
     */
    public $MaxResult;
    /**
     * Constructor method for RequestParam
     * @uses RequestParam::setTable()
     * @uses RequestParam::setCallingColumn()
     * @uses RequestParam::setColList()
     * @uses RequestParam::setCondList()
     * @uses RequestParam::setMaxResult()
     * @param string $table
     * @param string $callingColumn
     * @param \NOUTSoap\StructType\ColListType $colList
     * @param string $condList
     * @param int $maxResult
     */
    public function __construct($table = null, $callingColumn = null, \NOUTSoap\StructType\ColListType $colList = null, $condList = null, $maxResult = null)
    {
        $this
            ->setTable($table)
            ->setCallingColumn($callingColumn)
            ->setColList($colList)
            ->setCondList($condList)
            ->setMaxResult($maxResult);
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
     * @return \NOUTSoap\StructType\RequestParam
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
     * @return \NOUTSoap\StructType\RequestParam
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
     * Get ColList value
     * @return \NOUTSoap\StructType\ColListType|null
     */
    public function getColList()
    {
        return $this->ColList;
    }
    /**
     * Set ColList value
     * @param \NOUTSoap\StructType\ColListType $colList
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setColList(\NOUTSoap\StructType\ColListType $colList = null)
    {
        $this->ColList = $colList;
        return $this;
    }
    /**
     * Get CondList value
     * @return string|null
     */
    public function getCondList()
    {
        return $this->CondList;
    }
    /**
     * Set CondList value
     * @param string $condList
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setCondList($condList = null)
    {
        // validation for constraint: string
        if (!is_null($condList) && !is_string($condList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($condList)), __LINE__);
        }
        $this->CondList = $condList;
        return $this;
    }
    /**
     * Get MaxResult value
     * @return int|null
     */
    public function getMaxResult()
    {
        return $this->MaxResult;
    }
    /**
     * Set MaxResult value
     * @param int $maxResult
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setMaxResult($maxResult = null)
    {
        // validation for constraint: int
        if (!is_null($maxResult) && !is_numeric($maxResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxResult)), __LINE__);
        }
        $this->MaxResult = $maxResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\RequestParam
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
