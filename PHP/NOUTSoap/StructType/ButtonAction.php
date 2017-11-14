<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ButtonAction StructType
 * @subpackage Structs
 */
class ButtonAction extends AbstractStructBase
{
    /**
     * The CallingColumn
     * @var string
     */
    public $CallingColumn;
    /**
     * The ColumnSelection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\ColumnSelection[]
     */
    public $ColumnSelection;
    /**
     * Constructor method for ButtonAction
     * @uses ButtonAction::setCallingColumn()
     * @uses ButtonAction::setColumnSelection()
     * @param string $callingColumn
     * @param \NOUTSoap\StructType\ColumnSelection[] $columnSelection
     */
    public function __construct($callingColumn = null, array $columnSelection = array())
    {
        $this
            ->setCallingColumn($callingColumn)
            ->setColumnSelection($columnSelection);
    }
    /**
     * Get CallingColumn value
     * @return string|null
     */
    public function getCallingColumn()
    {
        return $this->CallingColumn;
    }
    /**
     * Set CallingColumn value
     * @param string $callingColumn
     * @return \NOUTSoap\StructType\ButtonAction
     */
    public function setCallingColumn($callingColumn = null)
    {
        // validation for constraint: string
        if (!is_null($callingColumn) && !is_string($callingColumn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingColumn)), __LINE__);
        }
        $this->CallingColumn = $callingColumn;
        return $this;
    }
    /**
     * Get ColumnSelection value
     * @return \NOUTSoap\StructType\ColumnSelection[]|null
     */
    public function getColumnSelection()
    {
        return $this->ColumnSelection;
    }
    /**
     * Set ColumnSelection value
     * @throws \InvalidArgumentException
     * @param \NOUTSoap\StructType\ColumnSelection[] $columnSelection
     * @return \NOUTSoap\StructType\ButtonAction
     */
    public function setColumnSelection(array $columnSelection = array())
    {
        foreach ($columnSelection as $buttonActionColumnSelectionItem) {
            // validation for constraint: itemType
            if (!$buttonActionColumnSelectionItem instanceof \NOUTSoap\StructType\ColumnSelection) {
                throw new \InvalidArgumentException(sprintf('The ColumnSelection property can only contain items of \NOUTSoap\StructType\ColumnSelection, "%s" given', is_object($buttonActionColumnSelectionItem) ? get_class($buttonActionColumnSelectionItem) : gettype($buttonActionColumnSelectionItem)), __LINE__);
            }
        }
        $this->ColumnSelection = $columnSelection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ButtonAction
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
