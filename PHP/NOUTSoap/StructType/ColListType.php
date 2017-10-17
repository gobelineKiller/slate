<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ColListType StructType
 * @subpackage Structs
 */
class ColListType extends AbstractStructBase
{
    /**
     * The Col
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Col;
    /**
     * Constructor method for ColListType
     * @uses ColListType::setCol()
     * @param string[] $col
     */
    public function __construct(array $col = array())
    {
        $this
            ->setCol($col);
    }
    /**
     * Get Col value
     * @return string[]|null
     */
    public function getCol()
    {
        return $this->Col;
    }
    /**
     * Set Col value
     * @throws \InvalidArgumentException
     * @param string[] $col
     * @return \NOUTSoap\StructType\ColListType
     */
    public function setCol(array $col = array())
    {
        foreach ($col as $colListTypeColItem) {
            // validation for constraint: itemType
            if (!is_string($colListTypeColItem)) {
                throw new \InvalidArgumentException(sprintf('The Col property can only contain items of string, "%s" given', is_object($colListTypeColItem) ? get_class($colListTypeColItem) : gettype($colListTypeColItem)), __LINE__);
            }
        }
        $this->Col = $col;
        return $this;
    }
    /**
     * Add item to Col value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUTSoap\StructType\ColListType
     */
    public function addToCol($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Col property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Col[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ColListType
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
