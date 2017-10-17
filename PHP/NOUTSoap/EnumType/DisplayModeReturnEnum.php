<?php

namespace NOUTSoap\EnumType;

/**
 * This class stands for DisplayModeReturnEnum EnumType
 * @subpackage Enumerations
 */
class DisplayModeReturnEnum
{
    /**
     * Constant for value 'list'
     * @return string 'list'
     */
    const VALUE_LIST = 'list';
    /**
     * Constant for value 'chartData'
     * @return string 'chartData'
     */
    const VALUE_CHART_DATA = 'chartData';
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
     * @uses self::VALUE_CHART_DATA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIST,
            self::VALUE_CHART_DATA,
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
