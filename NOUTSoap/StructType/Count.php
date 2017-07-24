<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for Count StructType
 * @subpackage Structs
 */
class Count extends AbstractStructBase
{
    /**
     * The NbFiltered
     * @var int
     */
    public $NbFiltered;
    /**
     * The NbTotal
     * @var int
     */
    public $NbTotal;
    /**
     * The NbCalculation
     * @var int
     */
    public $NbCalculation;
    /**
     * The NbLine
     * @var int
     */
    public $NbLine;
    /**
     * Constructor method for Count
     * @uses Count::setNbFiltered()
     * @uses Count::setNbTotal()
     * @uses Count::setNbCalculation()
     * @uses Count::setNbLine()
     * @param int $nbFiltered
     * @param int $nbTotal
     * @param int $nbCalculation
     * @param int $nbLine
     */
    public function __construct($nbFiltered = null, $nbTotal = null, $nbCalculation = null, $nbLine = null)
    {
        $this
            ->setNbFiltered($nbFiltered)
            ->setNbTotal($nbTotal)
            ->setNbCalculation($nbCalculation)
            ->setNbLine($nbLine);
    }
    /**
     * Get NbFiltered value
     * @return int|null
     */
    public function getNbFiltered()
    {
        return $this->NbFiltered;
    }
    /**
     * Set NbFiltered value
     * @param int $nbFiltered
     * @return \NOUTSoap\StructType\Count
     */
    public function setNbFiltered($nbFiltered = null)
    {
        // validation for constraint: int
        if (!is_null($nbFiltered) && !is_numeric($nbFiltered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbFiltered)), __LINE__);
        }
        $this->NbFiltered = $nbFiltered;
        return $this;
    }
    /**
     * Get NbTotal value
     * @return int|null
     */
    public function getNbTotal()
    {
        return $this->NbTotal;
    }
    /**
     * Set NbTotal value
     * @param int $nbTotal
     * @return \NOUTSoap\StructType\Count
     */
    public function setNbTotal($nbTotal = null)
    {
        // validation for constraint: int
        if (!is_null($nbTotal) && !is_numeric($nbTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbTotal)), __LINE__);
        }
        $this->NbTotal = $nbTotal;
        return $this;
    }
    /**
     * Get NbCalculation value
     * @return int|null
     */
    public function getNbCalculation()
    {
        return $this->NbCalculation;
    }
    /**
     * Set NbCalculation value
     * @param int $nbCalculation
     * @return \NOUTSoap\StructType\Count
     */
    public function setNbCalculation($nbCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($nbCalculation) && !is_numeric($nbCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbCalculation)), __LINE__);
        }
        $this->NbCalculation = $nbCalculation;
        return $this;
    }
    /**
     * Get NbLine value
     * @return int|null
     */
    public function getNbLine()
    {
        return $this->NbLine;
    }
    /**
     * Set NbLine value
     * @param int $nbLine
     * @return \NOUTSoap\StructType\Count
     */
    public function setNbLine($nbLine = null)
    {
        // validation for constraint: int
        if (!is_null($nbLine) && !is_numeric($nbLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbLine)), __LINE__);
        }
        $this->NbLine = $nbLine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Count
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
