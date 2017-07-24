<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for Cancel StructType
 * @subpackage Structs
 */
class Cancel extends AbstractStructBase
{
    /**
     * The Context
     * @var int
     */
    public $Context;
    /**
     * The ByUser
     * @var int
     */
    public $ByUser;
    /**
     * Constructor method for Cancel
     * @uses Cancel::setContext()
     * @uses Cancel::setByUser()
     * @param int $context
     * @param int $byUser
     */
    public function __construct($context = null, $byUser = null)
    {
        $this
            ->setContext($context)
            ->setByUser($byUser);
    }
    /**
     * Get Context value
     * @return int|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param int $context
     * @return \NOUTSoap\StructType\Cancel
     */
    public function setContext($context = null)
    {
        // validation for constraint: int
        if (!is_null($context) && !is_numeric($context)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($context)), __LINE__);
        }
        $this->Context = $context;
        return $this;
    }
    /**
     * Get ByUser value
     * @return int|null
     */
    public function getByUser()
    {
        return $this->ByUser;
    }
    /**
     * Set ByUser value
     * @param int $byUser
     * @return \NOUTSoap\StructType\Cancel
     */
    public function setByUser($byUser = null)
    {
        // validation for constraint: int
        if (!is_null($byUser) && !is_numeric($byUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($byUser)), __LINE__);
        }
        $this->ByUser = $byUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Cancel
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
