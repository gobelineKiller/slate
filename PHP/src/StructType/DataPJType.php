<?php

namespace NOUTSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataPJType StructType
 * @subpackage Structs
 */
class DataPJType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The encoding
     * @var string
     */
    public $encoding;
    /**
     * The filename
     * @var string
     */
    public $filename;
    /**
     * The size
     * @var int
     */
    public $size;
    /**
     * Constructor method for DataPJType
     * @uses DataPJType::set_()
     * @uses DataPJType::setEncoding()
     * @uses DataPJType::setFilename()
     * @uses DataPJType::setSize()
     * @param string $_
     * @param string $encoding
     * @param string $filename
     * @param int $size
     */
    public function __construct($_ = null, $encoding = null, $filename = null, $size = null)
    {
        $this
            ->set_($_)
            ->setEncoding($encoding)
            ->setFilename($filename)
            ->setSize($size);
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
     * @return \NOUTSoap\StructType\DataPJType
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
     * Get encoding value
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }
    /**
     * Set encoding value
     * @param string $encoding
     * @return \NOUTSoap\StructType\DataPJType
     */
    public function setEncoding($encoding = null)
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encoding)), __LINE__);
        }
        $this->encoding = $encoding;
        return $this;
    }
    /**
     * Get filename value
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \NOUTSoap\StructType\DataPJType
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        return $this;
    }
    /**
     * Get size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \NOUTSoap\StructType\DataPJType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\DataPJType
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
