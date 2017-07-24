<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCalculation StructType
 * @subpackage Structs
 */
class GetCalculation extends AbstractStructBase
{
    /**
     * The ColList
     * @var \NOUTSoap\StructType\ColListType
     */
    public $ColList;
    /**
     * The CalculationList
     * @var \NOUTSoap\StructType\CalculationListType
     */
    public $CalculationList;
    /**
     * Constructor method for GetCalculation
     * @uses GetCalculation::setColList()
     * @uses GetCalculation::setCalculationList()
     * @param \NOUTSoap\StructType\ColListType $colList
     * @param \NOUTSoap\StructType\CalculationListType $calculationList
     */
    public function __construct(\NOUTSoap\StructType\ColListType $colList = null, \NOUTSoap\StructType\CalculationListType $calculationList = null)
    {
        $this
            ->setColList($colList)
            ->setCalculationList($calculationList);
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
     * @return \NOUTSoap\StructType\GetCalculation
     */
    public function setColList(\NOUTSoap\StructType\ColListType $colList = null)
    {
        $this->ColList = $colList;
        return $this;
    }
    /**
     * Get CalculationList value
     * @return \NOUTSoap\StructType\CalculationListType|null
     */
    public function getCalculationList()
    {
        return $this->CalculationList;
    }
    /**
     * Set CalculationList value
     * @param \NOUTSoap\StructType\CalculationListType $calculationList
     * @return \NOUTSoap\StructType\GetCalculation
     */
    public function setCalculationList(\NOUTSoap\StructType\CalculationListType $calculationList = null)
    {
        $this->CalculationList = $calculationList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetCalculation
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
