<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectItems StructType
 * @subpackage Structs
 */
class SelectItems extends AbstractStructBase
{
    /**
     * The items
     * @var string
     */
    public $items;
    /**
     * Constructor method for SelectItems
     * @uses SelectItems::setItems()
     * @param string $items
     */
    public function __construct($items = null)
    {
        $this
            ->setItems($items);
    }
    /**
     * Get items value
     * @return string|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param string $items
     * @return \NOUTSoap\StructType\SelectItems
     */
    public function setItems($items = null)
    {
        // validation for constraint: string
        if (!is_null($items) && !is_string($items)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($items)), __LINE__);
        }
        $this->items = $items;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\SelectItems
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
