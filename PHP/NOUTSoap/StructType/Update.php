<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for Update StructType
 * @subpackage Structs
 */
class Update extends AbstractStructBase
{
    /**
     * The Table
     * @var string
     */
    public $Table;
    /**
     * The ParamXML
     * @var string
     */
    public $ParamXML;
    /**
     * The Complete
     * @var int
     */
    public $Complete;
    /**
     * The UpdateData
     * @var string
     */
    public $UpdateData;
    /**
     * The AssistantMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AssistantMode;
    /**
     * Constructor method for Update
     * @uses Update::setTable()
     * @uses Update::setParamXML()
     * @uses Update::setComplete()
     * @uses Update::setUpdateData()
     * @uses Update::setAssistantMode()
     * @param string $table
     * @param string $paramXML
     * @param int $complete
     * @param string $updateData
     * @param string $assistantMode
     */
    public function __construct($table = null, $paramXML = null, $complete = null, $updateData = null, $assistantMode = null)
    {
        $this
            ->setTable($table)
            ->setParamXML($paramXML)
            ->setComplete($complete)
            ->setUpdateData($updateData)
            ->setAssistantMode($assistantMode);
    }
    /**
     * Get Table value
     * @return string|null
     */
    public function getTable()
    {
        return $this->Table;
    }
    /**
     * Set Table value
     * @param string $table
     * @return \NOUTSoap\StructType\Update
     */
    public function setTable($table = null)
    {
        // validation for constraint: string
        if (!is_null($table) && !is_string($table)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($table)), __LINE__);
        }
        $this->Table = $table;
        return $this;
    }
    /**
     * Get ParamXML value
     * @return string|null
     */
    public function getParamXML()
    {
        return $this->ParamXML;
    }
    /**
     * Set ParamXML value
     * @param string $paramXML
     * @return \NOUTSoap\StructType\Update
     */
    public function setParamXML($paramXML = null)
    {
        // validation for constraint: string
        if (!is_null($paramXML) && !is_string($paramXML)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramXML)), __LINE__);
        }
        $this->ParamXML = $paramXML;
        return $this;
    }
    /**
     * Get Complete value
     * @return int|null
     */
    public function getComplete()
    {
        return $this->Complete;
    }
    /**
     * Set Complete value
     * @param int $complete
     * @return \NOUTSoap\StructType\Update
     */
    public function setComplete($complete = null)
    {
        // validation for constraint: int
        if (!is_null($complete) && !is_numeric($complete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($complete)), __LINE__);
        }
        $this->Complete = $complete;
        return $this;
    }
    /**
     * Get UpdateData value
     * @return string|null
     */
    public function getUpdateData()
    {
        return $this->UpdateData;
    }
    /**
     * Set UpdateData value
     * @param string $updateData
     * @return \NOUTSoap\StructType\Update
     */
    public function setUpdateData($updateData = null)
    {
        // validation for constraint: string
        if (!is_null($updateData) && !is_string($updateData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateData)), __LINE__);
        }
        $this->UpdateData = $updateData;
        return $this;
    }
    /**
     * Get AssistantMode value
     * @return string|null
     */
    public function getAssistantMode()
    {
        return $this->AssistantMode;
    }
    /**
     * Set AssistantMode value
     * @param string $assistantMode
     * @return \NOUTSoap\StructType\Update
     */
    public function setAssistantMode($assistantMode = null)
    {
        // validation for constraint: string
        if (!is_null($assistantMode) && !is_string($assistantMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($assistantMode)), __LINE__);
        }
        $this->AssistantMode = $assistantMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Update
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
