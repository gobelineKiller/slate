<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialParamListType StructType
 * @subpackage Structs
 */
class SpecialParamListType extends AbstractStructBase
{
    /**
     * The First
     * @var int
     */
    public $First;
    /**
     * The Length
     * @var int
     */
    public $Length;
    /**
     * The WithBreakRow
     * @var int
     */
    public $WithBreakRow;
    /**
     * The WithEndCalculation
     * @var int
     */
    public $WithEndCalculation;
    /**
     * The ChangePage
     * @var int
     */
    public $ChangePage;
    /**
     * The Sort1
     * @var \NOUTSoap\StructType\SortType
     */
    public $Sort1;
    /**
     * The Sort2
     * @var \NOUTSoap\StructType\SortType
     */
    public $Sort2;
    /**
     * The Sort3
     * @var \NOUTSoap\StructType\SortType
     */
    public $Sort3;
    /**
     * Constructor method for SpecialParamListType
     * @uses SpecialParamListType::setFirst()
     * @uses SpecialParamListType::setLength()
     * @uses SpecialParamListType::setWithBreakRow()
     * @uses SpecialParamListType::setWithEndCalculation()
     * @uses SpecialParamListType::setChangePage()
     * @uses SpecialParamListType::setSort1()
     * @uses SpecialParamListType::setSort2()
     * @uses SpecialParamListType::setSort3()
     * @param int $first
     * @param int $length
     * @param int $withBreakRow
     * @param int $withEndCalculation
     * @param int $changePage
     * @param \NOUTSoap\StructType\SortType $sort1
     * @param \NOUTSoap\StructType\SortType $sort2
     * @param \NOUTSoap\StructType\SortType $sort3
     */
    public function __construct($first = null, $length = null, $withBreakRow = null, $withEndCalculation = null, $changePage = null, \NOUTSoap\StructType\SortType $sort1 = null, \NOUTSoap\StructType\SortType $sort2 = null, \NOUTSoap\StructType\SortType $sort3 = null)
    {
        $this
            ->setFirst($first)
            ->setLength($length)
            ->setWithBreakRow($withBreakRow)
            ->setWithEndCalculation($withEndCalculation)
            ->setChangePage($changePage)
            ->setSort1($sort1)
            ->setSort2($sort2)
            ->setSort3($sort3);
    }
    /**
     * Get First value
     * @return int|null
     */
    public function getFirst()
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param int $first
     * @return \NOUTSoap\StructType\SpecialParamListType
     */
    public function setFirst($first = null)
    {
        // validation for constraint: int
        if (!is_null($first) && !is_numeric($first)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($first)), __LINE__);
        }
        $this->First = $first;
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \NOUTSoap\StructType\SpecialParamListType
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Get WithBreakRow value
     * @return int|null
     */
    public function getWithBreakRow()
    {
        return $this->WithBreakRow;
    }
    /**
     * Set WithBreakRow value
     * @param int $withBreakRow
     * @return \NOUTSoap\StructType\SpecialParamListType
     */
    public function setWithBreakRow($withBreakRow = null)
    {
        // validation for constraint: int
        if (!is_null($withBreakRow) && !is_numeric($withBreakRow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($withBreakRow)), __LINE__);
        }
        $this->WithBreakRow = $withBreakRow;
        return $this;
    }
    /**
     * Get WithEndCalculation value
     * @return int|null
     */
    public function getWithEndCalculation()
    {
        return $this->WithEndCalculation;
    }
    /**
     * Set WithEndCalculation value
     * @param int $withEndCalculation
     * @return \NOUTSoap\StructType\SpecialParamListType
     */
    public function setWithEndCalculation($withEndCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($withEndCalculation) && !is_numeric($withEndCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($withEndCalculation)), __LINE__);
        }
        $this->WithEndCalculation = $withEndCalculation;
        return $this;
    }
    /**
     * Get ChangePage value
     * @return int|null
     */
    public function getChangePage()
    {
        return $this->ChangePage;
    }
    /**
     * Set ChangePage value
     * @param int $changePage
     * @return \NOUTSoap\StructType\SpecialParamListType
     */
    public function setChangePage($changePage = null)
    {
        // validation for constraint: int
        if (!is_null($changePage) && !is_numeric($changePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($changePage)), __LINE__);
        }
        $this->ChangePage = $changePage;
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
     * @return \NOUTSoap\StructType\SpecialParamListType
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
     * @return \NOUTSoap\StructType\SpecialParamListType
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
     * @return \NOUTSoap\StructType\SpecialParamListType
     */
    public function setSort3(\NOUTSoap\StructType\SortType $sort3 = null)
    {
        $this->Sort3 = $sort3;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\SpecialParamListType
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
