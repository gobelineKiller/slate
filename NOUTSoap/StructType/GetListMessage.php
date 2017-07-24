<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMessage StructType
 * @subpackage Structs
 */
class GetListMessage extends AbstractStructBase
{
    /**
     * The MessageType
     * @var string
     */
    public $MessageType;
    /**
     * The StartDate
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * @var string
     */
    public $EndDate;
    /**
     * The UserMessagerie
     * @var string
     */
    public $UserMessagerie;
    /**
     * The Filter
     * @var \NOUTSoap\StructType\FilterType
     */
    public $Filter;
    /**
     * The SpecialParamList
     * @var \NOUTSoap\StructType\SpecialParamListType
     */
    public $SpecialParamList;
    /**
     * Constructor method for GetListMessage
     * @uses GetListMessage::setMessageType()
     * @uses GetListMessage::setStartDate()
     * @uses GetListMessage::setEndDate()
     * @uses GetListMessage::setUserMessagerie()
     * @uses GetListMessage::setFilter()
     * @uses GetListMessage::setSpecialParamList()
     * @param string $messageType
     * @param string $startDate
     * @param string $endDate
     * @param string $userMessagerie
     * @param \NOUTSoap\StructType\FilterType $filter
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     */
    public function __construct($messageType = null, $startDate = null, $endDate = null, $userMessagerie = null, \NOUTSoap\StructType\FilterType $filter = null, \NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this
            ->setMessageType($messageType)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setUserMessagerie($userMessagerie)
            ->setFilter($filter)
            ->setSpecialParamList($specialParamList);
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @uses \NOUTSoap\EnumType\MessageTypeEnum::valueIsValid()
     * @uses \NOUTSoap\EnumType\MessageTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageType
     * @return \NOUTSoap\StructType\GetListMessage
     */
    public function setMessageType($messageType = null)
    {
        // validation for constraint: enumeration
        if (!\NOUTSoap\EnumType\MessageTypeEnum::valueIsValid($messageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $messageType, implode(', ', \NOUTSoap\EnumType\MessageTypeEnum::getValidValues())), __LINE__);
        }
        $this->MessageType = $messageType;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \NOUTSoap\StructType\GetListMessage
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \NOUTSoap\StructType\GetListMessage
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get UserMessagerie value
     * @return string|null
     */
    public function getUserMessagerie()
    {
        return $this->UserMessagerie;
    }
    /**
     * Set UserMessagerie value
     * @param string $userMessagerie
     * @return \NOUTSoap\StructType\GetListMessage
     */
    public function setUserMessagerie($userMessagerie = null)
    {
        // validation for constraint: string
        if (!is_null($userMessagerie) && !is_string($userMessagerie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userMessagerie)), __LINE__);
        }
        $this->UserMessagerie = $userMessagerie;
        return $this;
    }
    /**
     * Get Filter value
     * @return \NOUTSoap\StructType\FilterType|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param \NOUTSoap\StructType\FilterType $filter
     * @return \NOUTSoap\StructType\GetListMessage
     */
    public function setFilter(\NOUTSoap\StructType\FilterType $filter = null)
    {
        $this->Filter = $filter;
        return $this;
    }
    /**
     * Get SpecialParamList value
     * @return \NOUTSoap\StructType\SpecialParamListType|null
     */
    public function getSpecialParamList()
    {
        return $this->SpecialParamList;
    }
    /**
     * Set SpecialParamList value
     * @param \NOUTSoap\StructType\SpecialParamListType $specialParamList
     * @return \NOUTSoap\StructType\GetListMessage
     */
    public function setSpecialParamList(\NOUTSoap\StructType\SpecialParamListType $specialParamList = null)
    {
        $this->SpecialParamList = $specialParamList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetListMessage
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
