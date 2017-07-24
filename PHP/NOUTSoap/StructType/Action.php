<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for Action StructType
 * @subpackage Structs
 */
class Action extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The title
     * @var string
     */
    public $title;
    /**
     * The typeaction
     * @var string
     */
    public $typeaction;
    /**
     * The typereturn
     * @var string
     */
    public $typereturn;
    /**
     * Constructor method for Action
     * @uses Action::set_()
     * @uses Action::setTitle()
     * @uses Action::setTypeaction()
     * @uses Action::setTypereturn()
     * @param string $_
     * @param string $title
     * @param string $typeaction
     * @param string $typereturn
     */
    public function __construct($_ = null, $title = null, $typeaction = null, $typereturn = null)
    {
        $this
            ->set_($_)
            ->setTitle($title)
            ->setTypeaction($typeaction)
            ->setTypereturn($typereturn);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \NOUTSoap\StructType\Action
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \NOUTSoap\StructType\Action
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get typeaction value
     * @return string|null
     */
    public function getTypeaction()
    {
        return $this->typeaction;
    }
    /**
     * Set typeaction value
     * @param string $typeaction
     * @return \NOUTSoap\StructType\Action
     */
    public function setTypeaction($typeaction = null)
    {
        // validation for constraint: string
        if (!is_null($typeaction) && !is_string($typeaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeaction)), __LINE__);
        }
        $this->typeaction = $typeaction;
        return $this;
    }
    /**
     * Get typereturn value
     * @return string|null
     */
    public function getTypereturn()
    {
        return $this->typereturn;
    }
    /**
     * Set typereturn value
     * @param string $typereturn
     * @return \NOUTSoap\StructType\Action
     */
    public function setTypereturn($typereturn = null)
    {
        // validation for constraint: string
        if (!is_null($typereturn) && !is_string($typereturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typereturn)), __LINE__);
        }
        $this->typereturn = $typereturn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\Action
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
