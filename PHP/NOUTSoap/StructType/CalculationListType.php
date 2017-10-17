<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculationListType StructType
 * @subpackage Structs
 */
class CalculationListType extends AbstractStructBase
{
    /**
     * The Calculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Calculation;
    /**
     * Constructor method for CalculationListType
     * @uses CalculationListType::setCalculation()
     * @param string[] $calculation
     */
    public function __construct(array $calculation = array())
    {
        $this
            ->setCalculation($calculation);
    }
    /**
     * Get Calculation value
     * @return string[]|null
     */
    public function getCalculation()
    {
        return $this->Calculation;
    }
    /**
     * Set Calculation value
     * @throws \InvalidArgumentException
     * @param string[] $calculation
     * @return \NOUTSoap\StructType\CalculationListType
     */
    public function setCalculation(array $calculation = array())
    {
        foreach ($calculation as $calculationListTypeCalculationItem) {
            // validation for constraint: itemType
            if (!is_string($calculationListTypeCalculationItem)) {
                throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of string, "%s" given', is_object($calculationListTypeCalculationItem) ? get_class($calculationListTypeCalculationItem) : gettype($calculationListTypeCalculationItem)), __LINE__);
            }
        }
        $this->Calculation = $calculation;
        return $this;
    }
    /**
     * Add item to Calculation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUTSoap\StructType\CalculationListType
     */
    public function addToCalculation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Calculation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\CalculationListType
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
