<?php

namespace NOUTSoap\StructType;

use \NOUTSoap\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionDialogue StructType
 * @subpackage Structs
 */
class OptionDialogue extends AbstractStructBase
{
    /**
     * The Readable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Readable;
    /**
     * The EncodingOutput
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EncodingOutput;
    /**
     * The ReturnValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnValue;
    /**
     * The ReturnXSD
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnXSD;
    /**
     * The HTTPForceReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HTTPForceReturn;
    /**
     * The Ghost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Ghost;
    /**
     * The DefaultPagination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DefaultPagination;
    /**
     * The DisplayValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DisplayValue;
    /**
     * The LanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LanguageCode;
    /**
     * The WithFieldStateControl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WithFieldStateControl;
    /**
     * The ListContentAsync
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ListContentAsync;
    /**
     * The VersionMin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersionMin;
    /**
     * The VersionPref
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersionPref;
    /**
     * Constructor method for OptionDialogue
     * @uses OptionDialogue::setReadable()
     * @uses OptionDialogue::setEncodingOutput()
     * @uses OptionDialogue::setReturnValue()
     * @uses OptionDialogue::setReturnXSD()
     * @uses OptionDialogue::setHTTPForceReturn()
     * @uses OptionDialogue::setGhost()
     * @uses OptionDialogue::setDefaultPagination()
     * @uses OptionDialogue::setDisplayValue()
     * @uses OptionDialogue::setLanguageCode()
     * @uses OptionDialogue::setWithFieldStateControl()
     * @uses OptionDialogue::setListContentAsync()
     * @uses OptionDialogue::setVersionMin()
     * @uses OptionDialogue::setVersionPref()
     * @param int $readable
     * @param int $encodingOutput
     * @param int $returnValue
     * @param int $returnXSD
     * @param int $hTTPForceReturn
     * @param int $ghost
     * @param int $defaultPagination
     * @param int $displayValue
     * @param int $languageCode
     * @param int $withFieldStateControl
     * @param int $listContentAsync
     * @param int $versionMin
     * @param int $versionPref
     */
    public function __construct($readable = null, $encodingOutput = null, $returnValue = null, $returnXSD = null, $hTTPForceReturn = null, $ghost = null, $defaultPagination = null, $displayValue = null, $languageCode = null, $withFieldStateControl = null, $listContentAsync = null, $versionMin = null, $versionPref = null)
    {
        $this
            ->setReadable($readable)
            ->setEncodingOutput($encodingOutput)
            ->setReturnValue($returnValue)
            ->setReturnXSD($returnXSD)
            ->setHTTPForceReturn($hTTPForceReturn)
            ->setGhost($ghost)
            ->setDefaultPagination($defaultPagination)
            ->setDisplayValue($displayValue)
            ->setLanguageCode($languageCode)
            ->setWithFieldStateControl($withFieldStateControl)
            ->setListContentAsync($listContentAsync)
            ->setVersionMin($versionMin)
            ->setVersionPref($versionPref);
    }
    /**
     * Get Readable value
     * @return int|null
     */
    public function getReadable()
    {
        return $this->Readable;
    }
    /**
     * Set Readable value
     * @param int $readable
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setReadable($readable = null)
    {
        // validation for constraint: int
        if (!is_null($readable) && !is_numeric($readable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($readable)), __LINE__);
        }
        $this->Readable = $readable;
        return $this;
    }
    /**
     * Get EncodingOutput value
     * @return int|null
     */
    public function getEncodingOutput()
    {
        return $this->EncodingOutput;
    }
    /**
     * Set EncodingOutput value
     * @param int $encodingOutput
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setEncodingOutput($encodingOutput = null)
    {
        // validation for constraint: int
        if (!is_null($encodingOutput) && !is_numeric($encodingOutput)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($encodingOutput)), __LINE__);
        }
        $this->EncodingOutput = $encodingOutput;
        return $this;
    }
    /**
     * Get ReturnValue value
     * @return int|null
     */
    public function getReturnValue()
    {
        return $this->ReturnValue;
    }
    /**
     * Set ReturnValue value
     * @param int $returnValue
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setReturnValue($returnValue = null)
    {
        // validation for constraint: int
        if (!is_null($returnValue) && !is_numeric($returnValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnValue)), __LINE__);
        }
        $this->ReturnValue = $returnValue;
        return $this;
    }
    /**
     * Get ReturnXSD value
     * @return int|null
     */
    public function getReturnXSD()
    {
        return $this->ReturnXSD;
    }
    /**
     * Set ReturnXSD value
     * @param int $returnXSD
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setReturnXSD($returnXSD = null)
    {
        // validation for constraint: int
        if (!is_null($returnXSD) && !is_numeric($returnXSD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnXSD)), __LINE__);
        }
        $this->ReturnXSD = $returnXSD;
        return $this;
    }
    /**
     * Get HTTPForceReturn value
     * @return int|null
     */
    public function getHTTPForceReturn()
    {
        return $this->HTTPForceReturn;
    }
    /**
     * Set HTTPForceReturn value
     * @param int $hTTPForceReturn
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setHTTPForceReturn($hTTPForceReturn = null)
    {
        // validation for constraint: int
        if (!is_null($hTTPForceReturn) && !is_numeric($hTTPForceReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hTTPForceReturn)), __LINE__);
        }
        $this->HTTPForceReturn = $hTTPForceReturn;
        return $this;
    }
    /**
     * Get Ghost value
     * @return int|null
     */
    public function getGhost()
    {
        return $this->Ghost;
    }
    /**
     * Set Ghost value
     * @param int $ghost
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setGhost($ghost = null)
    {
        // validation for constraint: int
        if (!is_null($ghost) && !is_numeric($ghost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ghost)), __LINE__);
        }
        $this->Ghost = $ghost;
        return $this;
    }
    /**
     * Get DefaultPagination value
     * @return int|null
     */
    public function getDefaultPagination()
    {
        return $this->DefaultPagination;
    }
    /**
     * Set DefaultPagination value
     * @param int $defaultPagination
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setDefaultPagination($defaultPagination = null)
    {
        // validation for constraint: int
        if (!is_null($defaultPagination) && !is_numeric($defaultPagination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultPagination)), __LINE__);
        }
        $this->DefaultPagination = $defaultPagination;
        return $this;
    }
    /**
     * Get DisplayValue value
     * @return int|null
     */
    public function getDisplayValue()
    {
        return $this->DisplayValue;
    }
    /**
     * Set DisplayValue value
     * @param int $displayValue
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setDisplayValue($displayValue = null)
    {
        // validation for constraint: int
        if (!is_null($displayValue) && !is_numeric($displayValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($displayValue)), __LINE__);
        }
        $this->DisplayValue = $displayValue;
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return int|null
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param int $languageCode
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: int
        if (!is_null($languageCode) && !is_numeric($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        return $this;
    }
    /**
     * Get WithFieldStateControl value
     * @return int|null
     */
    public function getWithFieldStateControl()
    {
        return $this->WithFieldStateControl;
    }
    /**
     * Set WithFieldStateControl value
     * @param int $withFieldStateControl
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setWithFieldStateControl($withFieldStateControl = null)
    {
        // validation for constraint: int
        if (!is_null($withFieldStateControl) && !is_numeric($withFieldStateControl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($withFieldStateControl)), __LINE__);
        }
        $this->WithFieldStateControl = $withFieldStateControl;
        return $this;
    }
    /**
     * Get ListContentAsync value
     * @return int|null
     */
    public function getListContentAsync()
    {
        return $this->ListContentAsync;
    }
    /**
     * Set ListContentAsync value
     * @param int $listContentAsync
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setListContentAsync($listContentAsync = null)
    {
        // validation for constraint: int
        if (!is_null($listContentAsync) && !is_numeric($listContentAsync)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listContentAsync)), __LINE__);
        }
        $this->ListContentAsync = $listContentAsync;
        return $this;
    }
    /**
     * Get VersionMin value
     * @return int|null
     */
    public function getVersionMin()
    {
        return $this->VersionMin;
    }
    /**
     * Set VersionMin value
     * @param int $versionMin
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setVersionMin($versionMin = null)
    {
        // validation for constraint: int
        if (!is_null($versionMin) && !is_numeric($versionMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versionMin)), __LINE__);
        }
        $this->VersionMin = $versionMin;
        return $this;
    }
    /**
     * Get VersionPref value
     * @return int|null
     */
    public function getVersionPref()
    {
        return $this->VersionPref;
    }
    /**
     * Set VersionPref value
     * @param int $versionPref
     * @return \NOUTSoap\StructType\OptionDialogue
     */
    public function setVersionPref($versionPref = null)
    {
        // validation for constraint: int
        if (!is_null($versionPref) && !is_numeric($versionPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versionPref)), __LINE__);
        }
        $this->VersionPref = $versionPref;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NOUTSoap\StructType\OptionDialogue
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
