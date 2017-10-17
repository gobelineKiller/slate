<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for Create StructType
 * @subpackage Structs
 */
class Create extends AbstractStructBase
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
     * The IDMessage
     * @var string
     */
    public $IDMessage;
    /**
     * The CallingColumn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CallingColumn;
    /**
     * The CallingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NOUTSoap\StructType\CallingInfoType
     */
    public $CallingInfo;
    /**
     * The UpdateData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateData;
    /**
     * Constructor method for Create
     * @uses Create::setTable()
     * @uses Create::setParamXML()
     * @uses Create::setIDMessage()
     * @uses Create::setCallingColumn()
     * @uses Create::setCallingInfo()
     * @uses Create::setUpdateData()
     * @param string $table
     * @param string $paramXML
     * @param string $iDMessage
     * @param string $callingColumn
     * @param \NOUTSoap\StructType\CallingInfoType $callingInfo
     * @param string $updateData
     */
    public function __construct($table = null, $paramXML = null, $iDMessage = null, $callingColumn = null, \NOUTSoap\StructType\CallingInfoType $callingInfo = null, $updateData = null)
    {
        $this
            ->setTable($table)
            ->setParamXML($paramXML)
            ->setIDMessage($iDMessage)
            ->setCallingColumn($callingColumn)
            ->setCallingInfo($callingInfo)
            ->setUpdateData($updateData);
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
     * @return \NOUTSoap\StructType\Create
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
     * @return \NOUTSoap\StructType\Create
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
     * Get IDMessage value
     * @return string|null
     */
    public function getIDMessage()
    {
        return $this->IDMessage;
    }
    /**
     * Set IDMessage value
     * @param string $iDMessage
     * @return \NOUTSoap\StructType\Create
     */
    public function setIDMessage($iDMessage = null)
    {
        // validation for constraint: string
        if (!is_null($iDMessage) && !is_string($iDMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iDMessage)), __LINE__);
        }
        $this->IDMessage = $iDMessage;
        return $this;
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
     * @return \NOUTSoap\StructType\Create
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
     * Get CallingInfo value
     * @return \NOUTSoap\StructType\CallingInfoType|null
     */
    public function getCallingInfo()
    {
        return $this->CallingInfo;
    }
    /**
     * Set CallingInfo value
     * @param \NOUTSoap\StructType\CallingInfoType $callingInfo
     * @return \NOUTSoap\StructType\Create
     */
    public function setCallingInfo(\NOUTSoap\StructType\CallingInfoType $callingInfo = null)
    {
        $this->CallingInfo = $callingInfo;
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
     * @return \NOUTSoap\StructType\Create
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Create
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
