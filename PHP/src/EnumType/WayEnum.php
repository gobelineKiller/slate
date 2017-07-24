<?php

namespace NOUTSoap\EnumType;

/**
 * This class stands for WayEnum EnumType
 * @subpackage Enumerations
 */
class WayEnum
{
    /**
     * Constant for value 'received'
     * @return string 'received'
     */
    const VALUE_RECEIVED = 'received';
    /**
     * Constant for value 'sent'
     * @return string 'sent'
     */
    const VALUE_SENT = 'sent';
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
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_SENT
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RECEIVED,
            self::VALUE_SENT,
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
