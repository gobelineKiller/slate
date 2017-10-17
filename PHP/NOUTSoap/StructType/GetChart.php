<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChart StructType
 * @subpackage Structs
 */
class GetChart extends AbstractStructBase
{
    /**
     * The Height
     * @var int
     */
    public $Height;
    /**
     * The Width
     * @var int
     */
    public $Width;
    /**
     * The DPI
     * @var int
     */
    public $DPI;
    /**
     * The Index
     * @var int
     */
    public $Index;
    /**
     * The ParamXML
     * @var string
     */
    public $ParamXML;
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The Axes
     * @var string
     */
    public $Axes;
    /**
     * The Calculation
     * @var string
     */
    public $Calculation;
    /**
     * The OnlyData
     * @var int
     */
    public $OnlyData;
    /**
     * Constructor method for GetChart
     * @uses GetChart::setHeight()
     * @uses GetChart::setWidth()
     * @uses GetChart::setDPI()
     * @uses GetChart::setIndex()
     * @uses GetChart::setParamXML()
     * @uses GetChart::setTable()
     * @uses GetChart::setAxes()
     * @uses GetChart::setCalculation()
     * @uses GetChart::setOnlyData()
     * @param int $height
     * @param int $width
     * @param int $dPI
     * @param int $index
     * @param string $paramXML
     * @param string $table
     * @param string $axes
     * @param string $calculation
     * @param int $onlyData
     */
    public function __construct($height = null, $width = null, $dPI = null, $index = null, $paramXML = null, $table = null, $axes = null, $calculation = null, $onlyData = null)
    {
        $this
            ->setHeight($height)
            ->setWidth($width)
            ->setDPI($dPI)
            ->setIndex($index)
            ->setParamXML($paramXML)
            ->setTable($table)
            ->setAxes($axes)
            ->setCalculation($calculation)
            ->setOnlyData($onlyData);
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get DPI value
     * @return int|null
     */
    public function getDPI()
    {
        return $this->DPI;
    }
    /**
     * Set DPI value
     * @param int $dPI
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setDPI($dPI = null)
    {
        // validation for constraint: int
        if (!is_null($dPI) && !is_numeric($dPI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dPI)), __LINE__);
        }
        $this->DPI = $dPI;
        return $this;
    }
    /**
     * Get Index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param int $index
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setIndex($index = null)
    {
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->Index = $index;
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
     * @return \NOUTSoap\StructType\GetChart
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
     * @return \NOUTSoap\StructType\GetChart
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
     * Get Axes value
     * @return string|null
     */
    public function getAxes()
    {
        return $this->Axes;
    }
    /**
     * Set Axes value
     * @param string $axes
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setAxes($axes = null)
    {
        // validation for constraint: string
        if (!is_null($axes) && !is_string($axes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($axes)), __LINE__);
        }
        $this->Axes = $axes;
        return $this;
    }
    /**
     * Get Calculation value
     * @return string|null
     */
    public function getCalculation()
    {
        return $this->Calculation;
    }
    /**
     * Set Calculation value
     * @uses \NOUTSoap\EnumType\CalculationTypeEnum::valueIsValid()
     * @uses \NOUTSoap\EnumType\CalculationTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $calculation
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setCalculation($calculation = null)
    {
        // validation for constraint: enumeration
        if (!\NOUTSoap\EnumType\CalculationTypeEnum::valueIsValid($calculation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $calculation, implode(', ', \NOUTSoap\EnumType\CalculationTypeEnum::getValidValues())), __LINE__);
        }
        $this->Calculation = $calculation;
        return $this;
    }
    /**
     * Get OnlyData value
     * @return int|null
     */
    public function getOnlyData()
    {
        return $this->OnlyData;
    }
    /**
     * Set OnlyData value
     * @param int $onlyData
     * @return \NOUTSoap\StructType\GetChart
     */
    public function setOnlyData($onlyData = null)
    {
        // validation for constraint: int
        if (!is_null($onlyData) && !is_numeric($onlyData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($onlyData)), __LINE__);
        }
        $this->OnlyData = $onlyData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetChart
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
