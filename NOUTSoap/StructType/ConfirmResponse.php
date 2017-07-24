<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmResponse StructType
 * @subpackage Structs
 */
class ConfirmResponse extends AbstractStructBase
{
    /**
     * The TypeConfirmation
     * @var int
     */
    public $TypeConfirmation;
    /**
     * Constructor method for ConfirmResponse
     * @uses ConfirmResponse::setTypeConfirmation()
     * @param int $typeConfirmation
     */
    public function __construct($typeConfirmation = null)
    {
        $this
            ->setTypeConfirmation($typeConfirmation);
    }
    /**
     * Get TypeConfirmation value
     * @return int|null
     */
    public function getTypeConfirmation()
    {
        return $this->TypeConfirmation;
    }
    /**
     * Set TypeConfirmation value
     * @param int $typeConfirmation
     * @return \NOUTSoap\StructType\ConfirmResponse
     */
    public function setTypeConfirmation($typeConfirmation = null)
    {
        // validation for constraint: int
        if (!is_null($typeConfirmation) && !is_numeric($typeConfirmation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($typeConfirmation)), __LINE__);
        }
        $this->TypeConfirmation = $typeConfirmation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ConfirmResponse
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
