<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ReOrder StructType
 * @subpackage Structs
 */
class ReOrder extends AbstractStructBase
{
    /**
     * The selection
     * @var string
     */
    public $selection;
    /**
     * The moveType
     * @var string
     */
    public $moveType;
    /**
     * The offset
     * @var int
     */
    public $offset;
    /**
     * The newOrder
     * @var string
     */
    public $newOrder;
    /**
     * Constructor method for ReOrder
     * @uses ReOrder::setSelection()
     * @uses ReOrder::setMoveType()
     * @uses ReOrder::setOffset()
     * @uses ReOrder::setNewOrder()
     * @param string $selection
     * @param string $moveType
     * @param int $offset
     * @param string $newOrder
     */
    public function __construct($selection = null, $moveType = null, $offset = null, $newOrder = null)
    {
        $this
            ->setSelection($selection)
            ->setMoveType($moveType)
            ->setOffset($offset)
            ->setNewOrder($newOrder);
    }
    /**
     * Get selection value
     * @return string|null
     */
    public function getSelection()
    {
        return $this->selection;
    }
    /**
     * Set selection value
     * @param string $selection
     * @return \NOUTSoap\StructType\ReOrder
     */
    public function setSelection($selection = null)
    {
        // validation for constraint: string
        if (!is_null($selection) && !is_string($selection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($selection)), __LINE__);
        }
        $this->selection = $selection;
        return $this;
    }
    /**
     * Get moveType value
     * @return string|null
     */
    public function getMoveType()
    {
        return $this->moveType;
    }
    /**
     * Set moveType value
     * @param string $moveType
     * @return \NOUTSoap\StructType\ReOrder
     */
    public function setMoveType($moveType = null)
    {
        // validation for constraint: string
        if (!is_null($moveType) && !is_string($moveType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moveType)), __LINE__);
        }
        $this->moveType = $moveType;
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
     * @return \NOUTSoap\StructType\ReOrder
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
     * Get newOrder value
     * @return string|null
     */
    public function getNewOrder()
    {
        return $this->newOrder;
    }
    /**
     * Set newOrder value
     * @param string $newOrder
     * @return \NOUTSoap\StructType\ReOrder
     */
    public function setNewOrder($newOrder = null)
    {
        // validation for constraint: string
        if (!is_null($newOrder) && !is_string($newOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newOrder)), __LINE__);
        }
        $this->newOrder = $newOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ReOrder
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
