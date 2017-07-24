<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsernameToken StructType
 * @subpackage Structs
 */
class UsernameToken extends AbstractStructBase
{
    /**
     * The Username
     * @var string
     */
    public $Username;
    /**
     * The Password
     * @var string
     */
    public $Password;
    /**
     * The Nonce
     * @var string
     */
    public $Nonce;
    /**
     * The Created
     * @var string
     */
    public $Created;
    /**
     * Constructor method for UsernameToken
     * @uses UsernameToken::setUsername()
     * @uses UsernameToken::setPassword()
     * @uses UsernameToken::setNonce()
     * @uses UsernameToken::setCreated()
     * @param string $username
     * @param string $password
     * @param string $nonce
     * @param string $created
     */
    public function __construct($username = null, $password = null, $nonce = null, $created = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setNonce($nonce)
            ->setCreated($created);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \NOUTSoap\StructType\UsernameToken
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \NOUTSoap\StructType\UsernameToken
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Nonce value
     * @return string|null
     */
    public function getNonce()
    {
        return $this->Nonce;
    }
    /**
     * Set Nonce value
     * @param string $nonce
     * @return \NOUTSoap\StructType\UsernameToken
     */
    public function setNonce($nonce = null)
    {
        // validation for constraint: string
        if (!is_null($nonce) && !is_string($nonce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nonce)), __LINE__);
        }
        $this->Nonce = $nonce;
        return $this;
    }
    /**
     * Get Created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->Created;
    }
    /**
     * Set Created value
     * @param string $created
     * @return \NOUTSoap\StructType\UsernameToken
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->Created = $created;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\UsernameToken
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
