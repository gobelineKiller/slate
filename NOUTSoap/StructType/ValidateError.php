<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateError StructType
 * @subpackage Structs
 */
class ValidateError extends AbstractStructBase
{
    /**
     * The Message
     * @var string
     */
    public $Message;
    /**
     * The ListCol
     * @var \NOUTSoap\StructType\ListeColType
     */
    public $ListCol;
    /**
     * Constructor method for ValidateError
     * @uses ValidateError::setMessage()
     * @uses ValidateError::setListCol()
     * @param string $message
     * @param \NOUTSoap\StructType\ListeColType $listCol
     */
    public function __construct($message = null, \NOUTSoap\StructType\ListeColType $listCol = null)
    {
        $this
            ->setMessage($message)
            ->setListCol($listCol);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \NOUTSoap\StructType\ValidateError
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get ListCol value
     * @return \NOUTSoap\StructType\ListeColType|null
     */
    public function getListCol()
    {
        return $this->ListCol;
    }
    /**
     * Set ListCol value
     * @param \NOUTSoap\StructType\ListeColType $listCol
     * @return \NOUTSoap\StructType\ValidateError
     */
    public function setListCol(\NOUTSoap\StructType\ListeColType $listCol = null)
    {
        $this->ListCol = $listCol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\ValidateError
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
