<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientCheck StructType
 * @subpackage Structs
 */
class RecipientCheck extends AbstractStructBase
{
    /**
     * The To
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $To;
    /**
     * The Cc
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Cc;
    /**
     * The Cci
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Cci;
    /**
     * Constructor method for RecipientCheck
     * @uses RecipientCheck::setTo()
     * @uses RecipientCheck::setCc()
     * @uses RecipientCheck::setCci()
     * @param string[] $to
     * @param string[] $cc
     * @param string[] $cci
     */
    public function __construct(array $to = array(), array $cc = array(), array $cci = array())
    {
        $this
            ->setTo($to)
            ->setCc($cc)
            ->setCci($cci);
    }
    /**
     * Get To value
     * @return string[]|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @throws \InvalidArgumentException
     * @param string[] $to
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function setTo(array $to = array())
    {
        foreach ($to as $recipientCheckToItem) {
            // validation for constraint: itemType
            if (!is_string($recipientCheckToItem)) {
                throw new \InvalidArgumentException(sprintf('The To property can only contain items of string, "%s" given', is_object($recipientCheckToItem) ? get_class($recipientCheckToItem) : gettype($recipientCheckToItem)), __LINE__);
            }
        }
        $this->To = $to;
        return $this;
    }
    /**
     * Add item to To value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function addToTo($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The To property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->To[] = $item;
        return $this;
    }
    /**
     * Get Cc value
     * @return string[]|null
     */
    public function getCc()
    {
        return $this->Cc;
    }
    /**
     * Set Cc value
     * @throws \InvalidArgumentException
     * @param string[] $cc
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function setCc(array $cc = array())
    {
        foreach ($cc as $recipientCheckCcItem) {
            // validation for constraint: itemType
            if (!is_string($recipientCheckCcItem)) {
                throw new \InvalidArgumentException(sprintf('The Cc property can only contain items of string, "%s" given', is_object($recipientCheckCcItem) ? get_class($recipientCheckCcItem) : gettype($recipientCheckCcItem)), __LINE__);
            }
        }
        $this->Cc = $cc;
        return $this;
    }
    /**
     * Add item to Cc value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function addToCc($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Cc property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Cc[] = $item;
        return $this;
    }
    /**
     * Get Cci value
     * @return string[]|null
     */
    public function getCci()
    {
        return $this->Cci;
    }
    /**
     * Set Cci value
     * @throws \InvalidArgumentException
     * @param string[] $cci
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function setCci(array $cci = array())
    {
        foreach ($cci as $recipientCheckCciItem) {
            // validation for constraint: itemType
            if (!is_string($recipientCheckCciItem)) {
                throw new \InvalidArgumentException(sprintf('The Cci property can only contain items of string, "%s" given', is_object($recipientCheckCciItem) ? get_class($recipientCheckCciItem) : gettype($recipientCheckCciItem)), __LINE__);
            }
        }
        $this->Cci = $cci;
        return $this;
    }
    /**
     * Add item to Cci value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function addToCci($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Cci property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Cci[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\RecipientCheck
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
