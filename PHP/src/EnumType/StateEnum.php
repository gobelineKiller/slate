<?php

namespace NOUTSoap\EnumType;

/**
 * This class stands for StateEnum EnumType
 * @subpackage Enumerations
 */
class StateEnum
{
    /**
     * Constant for value 'processed'
     * @return string 'processed'
     */
    const VALUE_PROCESSED = 'processed';
    /**
     * Constant for value 'unprocessed'
     * @return string 'unprocessed'
     */
    const VALUE_UNPROCESSED = 'unprocessed';
    /**
     * Constant for value 'all'
     * @return string 'all'
     */
    const VALUE_ALL = 'all';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PROCESSED
     * @uses self::VALUE_UNPROCESSED
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PROCESSED,
            self::VALUE_UNPROCESSED,
            self::VALUE_ALL,
        );
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
