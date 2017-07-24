<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtranetUserType StructType
 * @subpackage Structs
 */
class ExtranetUserType extends AbstractStructBase
{
    /**
     * The UsernameToken
     * @var \NOUTSoap\StructType\UsernameTokenType
     */
    public $UsernameToken;
    /**
     * The Form
     * @var string
     */
    public $Form;
    /**
     * Constructor method for ExtranetUserType
     * @uses ExtranetUserType::setUsernameToken()
     * @uses ExtranetUserType::setForm()
     * @param \NOUTSoap\StructType\UsernameTokenType $usernameToken
     * @param string $form
     */
    public function __construct(\NOUTSoap\StructType\UsernameTokenType $usernameToken = null, $form = null)
    {
        $this
            ->setUsernameToken($usernameToken)
            ->setForm($form);
    }
    /**
     * Get UsernameToken value
     * @return \NOUTSoap\StructType\UsernameTokenType|null
     */
    public function getUsernameToken()
    {
        return $this->UsernameToken;
    }
    /**
     * Set UsernameToken value
     * @param \NOUTSoap\StructType\UsernameTokenType $usernameToken
     * @return \NOUTSoap\StructType\ExtranetUserType
     */
    public function setUsernameToken(\NOUTSoap\StructType\UsernameTokenType $usernameToken = null)
    {
        $this->UsernameToken = $usernameToken;
        return $this;
    }
    /**
     * Get Form value
     * @return string|null
     */
    public function getForm()
    {
        return $this->Form;
    }
    /**
     * Set Form value
     * @param string $form
     * @return \NOUTSoap\StructType\ExtranetUserType
     */
    public function setForm($form = null)
    {
        // validation for constraint: string
        if (!is_null($form) && !is_string($form)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($form)), __LINE__);
        }
        $this->Form = $form;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ExtranetUserType
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
