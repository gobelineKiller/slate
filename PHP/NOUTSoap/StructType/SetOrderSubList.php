<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for SetOrderSubList StructType
 * @subpackage Structs
 */
class SetOrderSubList extends AbstractStructBase
{
    /**
     * The column
     * @var string
     */
    public $column;
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
     * Constructor method for SetOrderSubList
     * @uses SetOrderSubList::setColumn()
     * @uses SetOrderSubList::setItems()
     * @uses SetOrderSubList::setOffset()
     * @param string $column
     * @param string $items
     * @param int $offset
     */
    public function __construct($column = null, $items = null, $offset = null)
    {
        $this
            ->setColumn($column)
            ->setItems($items)
            ->setOffset($offset);
    }
    /**
     * Get column value
     * @return string|null
     */
    public function getColumn()
    {
        return $this->column;
    }
    /**
     * Set column value
     * @param string $column
     * @return \NOUTSoap\StructType\SetOrderSubList
     */
    public function setColumn($column = null)
    {
        // validation for constraint: string
        if (!is_null($column) && !is_string($column)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($column)), __LINE__);
        }
        $this->column = $column;
        return $this;
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
     * @return \NOUTSoap\StructType\SetOrderSubList
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
     * @return \NOUTSoap\StructType\SetOrderSubList
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
     * @return \NOUTSoap\StructType\SetOrderSubList
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
