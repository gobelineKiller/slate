<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResetPasswordFailed StructType
 * @subpackage Structs
 */
class ResetPasswordFailed extends AbstractStructBase
{
    /**
     * The Login
     * @var string
     */
    public $Login;
    /**
     * Constructor method for ResetPasswordFailed
     * @uses ResetPasswordFailed::setLogin()
     * @param string $login
     */
    public function __construct($login = null)
    {
        $this
            ->setLogin($login);
    }
    /**
     * Get Login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \NOUTSoap\StructType\ResetPasswordFailed
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        $this->Login = $login;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ResetPasswordFailed
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
