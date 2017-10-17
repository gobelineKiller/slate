<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for CallingColumnType StructType
 * @subpackage Structs
 */
class CallingColumnType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The actionContext
     * @var string
     */
    public $actionContext;
    /**
     * Constructor method for CallingColumnType
     * @uses CallingColumnType::set_()
     * @uses CallingColumnType::setActionContext()
     * @param string $_
     * @param string $actionContext
     */
    public function __construct($_ = null, $actionContext = null)
    {
        $this
            ->set_($_)
            ->setActionContext($actionContext);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \NOUTSoap\StructType\CallingColumnType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get actionContext value
     * @return string|null
     */
    public function getActionContext()
    {
        return $this->actionContext;
    }
    /**
     * Set actionContext value
     * @param string $actionContext
     * @return \NOUTSoap\StructType\CallingColumnType
     */
    public function setActionContext($actionContext = null)
    {
        // validation for constraint: string
        if (!is_null($actionContext) && !is_string($actionContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionContext)), __LINE__);
        }
        $this->actionContext = $actionContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\CallingColumnType
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
