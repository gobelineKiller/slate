<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for SetOrderList StructType
 * @subpackage Structs
 */
class SetOrderList extends AbstractStructBase
{
    /**
     * The items
     * @var string
     */
    public $items;
    /**
     * The offset
     * @var int
     */
    public $offset;
    /**
     * Constructor method for SetOrderList
     * @uses SetOrderList::setItems()
     * @uses SetOrderList::setOffset()
     * @param string $items
     * @param int $offset
     */
    public function __construct($items = null, $offset = null)
    {
        $this
            ->setItems($items)
            ->setOffset($offset);
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
     * @return \NOUTSoap\StructType\SetOrderList
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
     * Get offset value
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \NOUTSoap\StructType\SetOrderList
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !is_numeric($offset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset)), __LINE__);
        }
        $this->offset = $offset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\SetOrderList
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
