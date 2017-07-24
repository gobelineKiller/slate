<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTokenSession StructType
 * @subpackage Structs
 */
class GetTokenSession extends AbstractStructBase
{
    /**
     * The UsernameToken
     * @var \NOUTSoap\StructType\UsernameTokenType
     */
    public $UsernameToken;
    /**
     * The ExtranetUser
     * @var \NOUTSoap\StructType\ExtranetUserType
     */
    public $ExtranetUser;
    /**
     * The DefaultClientLanguageCode
     * @var int
     */
    public $DefaultClientLanguageCode;
    /**
     * Constructor method for GetTokenSession
     * @uses GetTokenSession::setUsernameToken()
     * @uses GetTokenSession::setExtranetUser()
     * @uses GetTokenSession::setDefaultClientLanguageCode()
     * @param \NOUTSoap\StructType\UsernameTokenType $usernameToken
     * @param \NOUTSoap\StructType\ExtranetUserType $extranetUser
     * @param int $defaultClientLanguageCode
     */
    public function __construct(\NOUTSoap\StructType\UsernameTokenType $usernameToken = null, \NOUTSoap\StructType\ExtranetUserType $extranetUser = null, $defaultClientLanguageCode = null)
    {
        $this
            ->setUsernameToken($usernameToken)
            ->setExtranetUser($extranetUser)
            ->setDefaultClientLanguageCode($defaultClientLanguageCode);
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
     * @return \NOUTSoap\StructType\GetTokenSession
     */
    public function setUsernameToken(\NOUTSoap\StructType\UsernameTokenType $usernameToken = null)
    {
        $this->UsernameToken = $usernameToken;
        return $this;
    }
    /**
     * Get ExtranetUser value
     * @return \NOUTSoap\StructType\ExtranetUserType|null
     */
    public function getExtranetUser()
    {
        return $this->ExtranetUser;
    }
    /**
     * Set ExtranetUser value
     * @param \NOUTSoap\StructType\ExtranetUserType $extranetUser
     * @return \NOUTSoap\StructType\GetTokenSession
     */
    public function setExtranetUser(\NOUTSoap\StructType\ExtranetUserType $extranetUser = null)
    {
        $this->ExtranetUser = $extranetUser;
        return $this;
    }
    /**
     * Get DefaultClientLanguageCode value
     * @return int|null
     */
    public function getDefaultClientLanguageCode()
    {
        return $this->DefaultClientLanguageCode;
    }
    /**
     * Set DefaultClientLanguageCode value
     * @param int $defaultClientLanguageCode
     * @return \NOUTSoap\StructType\GetTokenSession
     */
    public function setDefaultClientLanguageCode($defaultClientLanguageCode = null)
    {
        // validation for constraint: int
        if (!is_null($defaultClientLanguageCode) && !is_numeric($defaultClientLanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultClientLanguageCode)), __LINE__);
        }
        $this->DefaultClientLanguageCode = $defaultClientLanguageCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\GetTokenSession
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
