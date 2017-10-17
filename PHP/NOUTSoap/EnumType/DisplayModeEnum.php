<?php

namespace NOUTSoap\EnumType;

/**
 * This class stands for DisplayModeEnum EnumType
 * @subpackage Enumerations
 */
class DisplayModeEnum
{
    /**
     * Constant for value 'list'
     * @return string 'list'
     */
    const VALUE_LIST = 'list';
    /**
     * Constant for value 'chart'
     * @return string 'chart'
     */
    const VALUE_CHART = 'chart';
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
     * @uses self::VALUE_LIST
     * @uses self::VALUE_CHART
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST,
            self::VALUE_CHART,
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
