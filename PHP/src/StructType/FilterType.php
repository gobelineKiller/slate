<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FilterType StructType
 * @subpackage Structs
 */
class FilterType extends AbstractStructBase
{
    /**
     * The Way
     * @var string
     */
    public $Way;
    /**
     * The State
     * @var string
     */
    public $State;
    /**
     * The Inner
     * @var int
     */
    public $Inner;
    /**
     * The Email
     * @var int
     */
    public $Email;
    /**
     * The Spam
     * @var int
     */
    public $Spam;
    /**
     * The Max
     * @var int
     */
    public $Max;
    /**
     * The From
     * @var string
     */
    public $From;
    /**
     * The Containing
     * @var string
     */
    public $Containing;
    /**
     * Constructor method for FilterType
     * @uses FilterType::setWay()
     * @uses FilterType::setState()
     * @uses FilterType::setInner()
     * @uses FilterType::setEmail()
     * @uses FilterType::setSpam()
     * @uses FilterType::setMax()
     * @uses FilterType::setFrom()
     * @uses FilterType::setContaining()
     * @param string $way
     * @param string $state
     * @param int $inner
     * @param int $email
     * @param int $spam
     * @param int $max
     * @param string $from
     * @param string $containing
     */
    public function __construct($way = null, $state = null, $inner = null, $email = null, $spam = null, $max = null, $from = null, $containing = null)
    {
        $this
            ->setWay($way)
            ->setState($state)
            ->setInner($inner)
            ->setEmail($email)
            ->setSpam($spam)
            ->setMax($max)
            ->setFrom($from)
            ->setContaining($containing);
    }
    /**
     * Get Way value
     * @return string|null
     */
    public function getWay()
    {
        return $this->Way;
    }
    /**
     * Set Way value
     * @uses \NOUTSoap\EnumType\WayEnum::valueIsValid()
     * @uses \NOUTSoap\EnumType\WayEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $way
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setWay($way = null)
    {
        // validation for constraint: enumeration
        if (!\NOUTSoap\EnumType\WayEnum::valueIsValid($way)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $way, implode(', ', \NOUTSoap\EnumType\WayEnum::getValidValues())), __LINE__);
        }
        $this->Way = $way;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \NOUTSoap\EnumType\StateEnum::valueIsValid()
     * @uses \NOUTSoap\EnumType\StateEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setState($state = null)
    {
        // validation for constraint: enumeration
        if (!\NOUTSoap\EnumType\StateEnum::valueIsValid($state)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state, implode(', ', \NOUTSoap\EnumType\StateEnum::getValidValues())), __LINE__);
        }
        $this->State = $state;
        return $this;
    }
    /**
     * Get Inner value
     * @return int|null
     */
    public function getInner()
    {
        return $this->Inner;
    }
    /**
     * Set Inner value
     * @param int $inner
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setInner($inner = null)
    {
        // validation for constraint: int
        if (!is_null($inner) && !is_numeric($inner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inner)), __LINE__);
        }
        $this->Inner = $inner;
        return $this;
    }
    /**
     * Get Email value
     * @return int|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param int $email
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: int
        if (!is_null($email) && !is_numeric($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Spam value
     * @return int|null
     */
    public function getSpam()
    {
        return $this->Spam;
    }
    /**
     * Set Spam value
     * @param int $spam
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setSpam($spam = null)
    {
        // validation for constraint: int
        if (!is_null($spam) && !is_numeric($spam)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($spam)), __LINE__);
        }
        $this->Spam = $spam;
        return $this;
    }
    /**
     * Get Max value
     * @return int|null
     */
    public function getMax()
    {
        return $this->Max;
    }
    /**
     * Set Max value
     * @param int $max
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setMax($max = null)
    {
        // validation for constraint: int
        if (!is_null($max) && !is_numeric($max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($max)), __LINE__);
        }
        $this->Max = $max;
        return $this;
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get Containing value
     * @return string|null
     */
    public function getContaining()
    {
        return $this->Containing;
    }
    /**
     * Set Containing value
     * @param string $containing
     * @return \NOUTSoap\StructType\FilterType
     */
    public function setContaining($containing = null)
    {
        // validation for constraint: string
        if (!is_null($containing) && !is_string($containing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($containing)), __LINE__);
        }
        $this->Containing = $containing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\FilterType
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
