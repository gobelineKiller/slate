<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ListeColType StructType
 * @subpackage Structs
 */
class ListeColType extends AbstractStructBase
{
    /**
     * The Column
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $Column;
    /**
     * Constructor method for ListeColType
     * @uses ListeColType::setColumn()
     * @param string[] $column
     */
    public function __construct(array $column = array())
    {
        $this
            ->setColumn($column);
    }
    /**
     * Get Column value
     * @return string[]
     */
    public function getColumn()
    {
        return $this->Column;
    }
    /**
     * Set Column value
     * @throws \InvalidArgumentException
     * @param string[] $column
     * @return \NOUTSoap\StructType\ListeColType
     */
    public function setColumn(array $column = array())
    {
        foreach ($column as $listeColTypeColumnItem) {
            // validation for constraint: itemType
            if (!is_string($listeColTypeColumnItem)) {
                throw new \InvalidArgumentException(sprintf('The Column property can only contain items of string, "%s" given', is_object($listeColTypeColumnItem) ? get_class($listeColTypeColumnItem) : gettype($listeColTypeColumnItem)), __LINE__);
            }
        }
        $this->Column = $column;
        return $this;
    }
    /**
     * Add item to Column value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUTSoap\StructType\ListeColType
     */
    public function addToColumn($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Column property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Column[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ListeColType
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
