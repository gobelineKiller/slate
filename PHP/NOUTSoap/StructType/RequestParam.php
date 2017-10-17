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
     * The Sort1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\SortType
     */
    public $Sort1;
    /**
     * The Sort2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\SortType
     */
    public $Sort2;
    /**
     * The Sort3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\SortType
     */
    public $Sort3;
    /**
     * The SpecialParamList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for RequestParam
     * @uses RequestParam::setTable()
     * @uses RequestParam::setColList()
     * @uses RequestParam::setCondList()
     * @uses RequestParam::setMaxResult()
     * @uses RequestParam::setCallingColumn()
     * @uses RequestParam::setCallingInfo()
     * @uses RequestParam::setSort1()
     * @uses RequestParam::setSort2()
     * @uses RequestParam::setSort3()
     * @uses RequestParam::setSpecialParamList()
     * @param string $table
     * @param \NOUTSoap\StructType\ColListType $colList
     * @param string $condList
     * @param int $maxResult
     * @param string $callingColumn
     * @param \NOUTSoap\StructType\CallingInfoType $callingInfo
     * @param \NOUTSoap\StructType\SortType $sort1
     * @param \NOUTSoap\StructType\SortType $sort2
     * @param \NOUTSoap\StructType\SortType $sort3
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($table = null, \NOUTSoap\StructType\ColListType $colList = null, $condList = null, $maxResult = null, $callingColumn = null, \NOUTSoap\StructType\CallingInfoType $callingInfo = null, \NOUTSoap\StructType\SortType $sort1 = null, \NOUTSoap\StructType\SortType $sort2 = null, \NOUTSoap\StructType\SortType $sort3 = null, \NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setTable($table)
            ->setColList($colList)
            ->setCondList($condList)
            ->setMaxResult($maxResult)
            ->setCallingColumn($callingColumn)
            ->setCallingInfo($callingInfo)
            ->setSort1($sort1)
            ->setSort2($sort2)
            ->setSort3($sort3)
            ->setSpecialParamList($specialParamList);
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
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setCallingInfo(\NOUTSoap\StructType\CallingInfoType $callingInfo = null)
    {
        $this->CallingInfo = $callingInfo;
        return $this;
    }
    /**
     * Get Sort1 value
     * @return \NOUTSoap\StructType\SortType|null
     */
    public function getSort1()
    {
        return $this->Sort1;
    }
    /**
     * Set Sort1 value
     * @param \NOUTSoap\StructType\SortType $sort1
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setSort1(\NOUTSoap\StructType\SortType $sort1 = null)
    {
        $this->Sort1 = $sort1;
        return $this;
    }
    /**
     * Get Sort2 value
     * @return \NOUTSoap\StructType\SortType|null
     */
    public function getSort2()
    {
        return $this->Sort2;
    }
    /**
     * Set Sort2 value
     * @param \NOUTSoap\StructType\SortType $sort2
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setSort2(\NOUTSoap\StructType\SortType $sort2 = null)
    {
        $this->Sort2 = $sort2;
        return $this;
    }
    /**
     * Get Sort3 value
     * @return \NOUTSoap\StructType\SortType|null
     */
    public function getSort3()
    {
        return $this->Sort3;
    }
    /**
     * Set Sort3 value
     * @param \NOUTSoap\StructType\SortType $sort3
     * @return \NOUTSoap\StructType\RequestParam
     */
    public function setSort3(\NOUTSoap\StructType\SortType $sort3 = null)
    {
        $this->Sort3 = $sort3;
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
     * @return \NOUTSoap\StructType\RequestParam
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
