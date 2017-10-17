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
     * The Selection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Selection;
    /**
     * Constructor method for ButtonAction
     * @uses ButtonAction::setCallingColumn()
     * @uses ButtonAction::setSelection()
     * @param string $callingColumn
     * @param string $selection
     */
    public function __construct($callingColumn = null, $selection = null)
    {
        $this
            ->setCallingColumn($callingColumn)
            ->setSelection($selection);
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
     * Get Selection value
     * @return string|null
     */
    public function getSelection()
    {
        return $this->Selection;
    }
    /**
     * Set Selection value
     * @param string $selection
     * @return \NOUTSoap\StructType\ButtonAction
     */
    public function setSelection($selection = null)
    {
        // validation for constraint: string
        if (!is_null($selection) && !is_string($selection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($selection)), __LINE__);
        }
        $this->Selection = $selection;
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
