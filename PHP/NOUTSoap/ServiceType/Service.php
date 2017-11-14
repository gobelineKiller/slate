<?php

namespace NOUTSoap\ServiceType;

use \NOUTSoap\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Static method getting current SoapClient
     * @return \SoapClient
     */
    public static function _getSoapClient()
    {
        $oSoapClient = parent::getSoapClient();

        $defaultHeaders = (isset($oSoapClient->__default_headers) && is_array($oSoapClient->__default_headers)) ? $oSoapClient->__default_headers : array();
        foreach ($defaultHeaders as $index => $soapHeader) {
            if ($soapHeader->name === 'UsernameToken') {
                $oUsernameToken = $defaultHeaders[$index]->data;
                /** @var \NOUTSoap\Entity\UsernameToken $oUsernameToken */
                $oUsernameToken->ComputeCryptedPassword();
                break;
            }
        }
        return $oSoapClient;
    }


    /**
     * @param       $functionName
     * @param mixed $aparameters
     * @return mixed
     */
    protected function __soapCall($functionName, $aparameters)
    {
        return parent::__soapCall($functionName, array(get_class($aparameters) => $aparameters));
    }



    /**
     * @return string
     */
    public function getSoapHeaderReturnType()
    {
        return $this->outputHeaders['ReturnType'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderActionContext()
    {
        return $this->outputHeaders['ActionContext'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderXSDSchema()
    {
        return $this->outputHeaders['XSDSchema'];
    }

    /**
     * @return \NOUTSoap\StructType\Action
     */
    public function getSoapHeaderAction()
    {
        return $this->outputHeaders['Action'];
    }

    /**
     * @return \NOUTSoap\StructType\Filter
     */
    public function getSoapHeaderFilter()
    {
        return $this->outputHeaders['Filter'];
    }

    /**
     * @return \NOUTSoap\StructType\PlanningFilter
     */
    public function getSoapHeaderPlanningFilter()
    {
        return $this->outputHeaders['PlanningFilter'];
    }

    /**
     * @return \NOUTSoap\StructType\ConnectedUser
     */
    public function getSoapHeaderConnectedUser()
    {
        return $this->outputHeaders['ConnectedUser'];
    }

    /**
     * @return \NOUTSoap\StructType\ConnectedExtranet
     */
    public function getSoapHeaderConnectedExtranet()
    {
        return $this->outputHeaders['ConnectedExtranet'];
    }


    /**
     * @return \NOUTSoap\StructType\Form
     */
    public function getSoapHeaderForm()
    {
        return $this->outputHeaders['Form'];
    }

    /**
     * @return \NOUTSoap\StructType\Element
     */
    public function getSoapHeaderElement()
    {
        return $this->outputHeaders['Element'];
    }

    /**
     * @return \NOUTSoap\StructType\Count
     */
    public function getSoapHeaderCount()
    {
        return $this->outputHeaders['Count'];
    }

    /**
     * @return \NOUTSoap\StructType\ValidateError
     */
    public function getSoapHeaderValidateError()
    {
        return $this->outputHeaders['ValidateError'];
    }

    /**
     * @return integer
     */
    public function getSoapHeaderNextCall()
    {
        return $this->outputHeaders['NextCall'];
    }

    /**
     * @return integer
     */
    public function getSoapHeaderPJSizeCheck()
    {
        return $this->outputHeaders['PJSizeCheck'];
    }

    /**
     * @return \NOUTSoap\StructType\RecipientCheck
     */
    public function getSoapHeaderRecipientCheck()
    {
        return $this->outputHeaders['RecipientCheck'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderCustomerInfos()
    {
        return $this->outputHeaders['CustomerInfos'];
    }

    /**
     * @return string
     */
    public function getSoapHeaderSessionLanguageCode()
    {
        return $this->outputHeaders['SessionLanguageCode'];
    }

    /**
     * Sets the APIUUID SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\APIUUID $aPIUUID
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAPIUUID(\NOUTSoap\StructType\APIUUID $aPIUUID=null, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'APIUUID', $aPIUUID, $mustUnderstand, $actor);
    }
    /**
     * Sets the UsernameToken SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\UsernameTokenType $usernameToken
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderUsernameToken(\NOUTSoap\Entity\UsernameToken $usernameToken, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UsernameToken', $usernameToken, $mustUnderstand, $actor);
    }
    /**
     * Sets the SessionToken SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param $sessionToken
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSessionToken($sessionToken, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'SessionToken', $sessionToken, $mustUnderstand, $actor);
    }
    /**
     * Sets the CustomerInfos SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\CustomerInfos $customerInfos
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCustomerInfos(\NOUTSoap\StructType\CustomerInfos $customerInfos=null, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'CustomerInfos', $customerInfos, $mustUnderstand, $actor);
    }
    /**
     * Sets the OptionDialogue SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\OptionDialogue $optionDialogue
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderOptionDialogue(\NOUTSoap\StructType\OptionDialogue $optionDialogue, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'OptionDialogue', $optionDialogue, $mustUnderstand, $actor);
    }
    /**
     * Sets the APIUser SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\APIUser $aPIUser
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAPIUser(\NOUTSoap\StructType\APIUser $aPIUser=null, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'APIUser', $aPIUser, $mustUnderstand, $actor);
    }
    /**
     * Sets the ActionContext SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\ActionContext $actionContext
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderActionContext(\NOUTSoap\StructType\ActionContext $actionContext=null, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ActionContext', $actionContext, $mustUnderstand, $actor);
    }
    /**
     * Sets the AutoValidate SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \NOUTSoap\StructType\AutoValidate $autoValidate
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAutoValidate($autoValidate=null, $nameSpace = 'http://www.nout.fr/wsdl/SimaxService.wsdl/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AutoValidate', $autoValidate, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named AddPJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\AddPJ $parameters
     * @return \NOUTSoap\StructType\AddPJResponse|bool
     */
    public function AddPJ(\NOUTSoap\StructType\AddPJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('AddPJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ButtonAction
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ButtonAction $gparameters
     * @return \NOUTSoap\StructType\ButtonActionResponse|bool
     */
    public function ButtonAction(\NOUTSoap\StructType\ButtonAction $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ButtonAction', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Cancel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Cancel $parameters
     * @return \NOUTSoap\StructType\CancelResponse|bool
     */
    public function Cancel(\NOUTSoap\StructType\Cancel $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Cancel', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CancelFolder $parameters
     * @return CancelFolderResponse|bool
     */
    public function CancelFolder(\NOUTSoap\StructType\CancelFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CancelFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CancelMessage $parameters
     * @return CancelMessageResponse|bool
     */
    public function CancelMessage(\NOUTSoap\StructType\CancelMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CancelMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckCreateElement
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CheckCreateElement $parameters
     * @return \NOUTSoap\StructType\CheckCreateElementResponse|bool
     */
    public function CheckCreateElement(\NOUTSoap\StructType\CheckCreateElement $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CheckCreateElement', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckRecipient
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CheckRecipient $parameters
     * @return \NOUTSoap\StructType\CheckRecipientResponse|bool
     */
    public function CheckRecipient(\NOUTSoap\StructType\CheckRecipient $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CheckRecipient', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseFolderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CloseFolderList $parameters
     * @return CloseFolderListResponse|bool
     */
    public function CloseFolderList(\NOUTSoap\StructType\CloseFolderList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CloseFolderList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CloseMessageList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CloseMessageList $parameters
     * @return CloseMessageListResponse|bool
     */
    public function CloseMessageList(\NOUTSoap\StructType\CloseMessageList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CloseMessageList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConfirmResponse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ConfirmResponse $parameters
     * @return \NOUTSoap\StructType\ConfirmResponseResponse|bool
     */
    public function ConfirmResponse(\NOUTSoap\StructType\ConfirmResponse $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ConfirmResponse', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Create
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Create $parameters
     * @return \NOUTSoap\StructType\CreateResponse|bool
     */
    public function Create(\NOUTSoap\StructType\Create $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Create', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param CreateFolder $createFolder
     * @return \NOUTSoap\StructType\CreateFolderResponse|bool
     */
    public function CreateFolder($createFolder)
    {
        try {
            $this->setResult(self::_getSoapClient()->CreateFolder($createFolder));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateFrom
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CreateFrom $parameters
     * @return \NOUTSoap\StructType\CreateFromResponse|bool
     */
    public function CreateFrom(\NOUTSoap\StructType\CreateFrom $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CreateFrom', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\CreateMessage $parameters
     * @return \NOUTSoap\StructType\CreateMessageResponse|bool
     */
    public function CreateMessage(\NOUTSoap\StructType\CreateMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('CreateMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Delete
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Delete $parameters
     * @return \NOUTSoap\StructType\DeleteResponse|bool
     */
    public function Delete(\NOUTSoap\StructType\Delete $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Delete', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\DeleteFolder $parameters
     * @return DeleteFolderResponse|bool
     */
    public function DeleteFolder(\NOUTSoap\StructType\DeleteFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('DeleteFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeletePJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\DeletePJ $parameters
     * @return \NOUTSoap\StructType\DeletePJResponse|bool
     */
    public function DeletePJ(\NOUTSoap\StructType\DeletePJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('DeletePJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Disconnect
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param Disconnect $disconnect
     * @return DisconnectResponse|bool
     */
    public function Disconnect($disconnect)
    {
        try {
            $this->setResult(self::_getSoapClient()->Disconnect($disconnect));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Display
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Display $parameters
     * @return \NOUTSoap\StructType\DisplayResponse|bool
     */
    public function Display(\NOUTSoap\StructType\Display $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Display', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DrillThrough
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\DrillThrough $parameters
     * @return \NOUTSoap\StructType\DrillThroughResponse|bool
     */
    public function DrillThrough(\NOUTSoap\StructType\DrillThrough $parameters)
    {
        try {
            $this->setResult($this->__soapCall('DrillThrough', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named EnterReorderListMode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param EnterReorderListMode $enterReorderListMode
     * @return \NOUTSoap\StructType\EnterReorderListModeResponse|bool
     */
    public function EnterReorderListMode($enterReorderListMode)
    {
        try {
            $this->setResult($this->__soapCall('EnterReorderListMode', $enterReorderListMode));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Execute
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Execute $parameters
     * @return \NOUTSoap\StructType\ExecuteResponse|bool
     */
    public function Execute(\NOUTSoap\StructType\Execute $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Execute', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCalculation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetCalculation $parameters
     * @return \NOUTSoap\StructType\GetCalculationResponse|bool
     */
    public function GetCalculation(\NOUTSoap\StructType\GetCalculation $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetCalculation', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEndListCalculation
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetEndListCalculation $getEndListCalculation
     * @return \NOUTSoap\StructType\GetEndListCalculationResponse|bool
     */
    public function GetEndListCalculation($getEndListCalculation)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetEndListCalculation($getEndListCalculation));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChart
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetChart $parameters
     * @return \NOUTSoap\StructType\GetChartResponse|bool
     */
    public function GetChart(\NOUTSoap\StructType\GetChart $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetChart', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetColInRecord
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetColInRecord $parameters
     * @return \NOUTSoap\StructType\GetColInRecordResponse|bool
     */
    public function GetColInRecord(\NOUTSoap\StructType\GetColInRecord $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetColInRecord', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSubListContent
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetSubListContent $parameters
     * @return \NOUTSoap\StructType\GetSubListContentResponse|bool
     */
    public function GetSubListContent(\NOUTSoap\StructType\GetSubListContent $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetSubListContent', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetContentFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetContentFolder $parameters
     * @return \NOUTSoap\StructType\GetContentFolderResponse|bool
     */
    public function GetContentFolder(\NOUTSoap\StructType\GetContentFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetContentFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEndAutomatism
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetEndAutomatism $parameters
     * @return \NOUTSoap\StructType\GetEndAutomatismResponse|bool
     */
    public function GetEndAutomatism(\NOUTSoap\StructType\GetEndAutomatism $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetEndAutomatism', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFolderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetFolderList $getFolderList
     * @return \NOUTSoap\StructType\GetFolderListResponse|bool
     */
    public function GetFolderList($getFolderList)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetFolderList($getFolderList));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetLanguages
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetLanguages $getLanguages
     * @return \NOUTSoap\StructType\GetLanguagesResponse|bool
     */
    public function GetLanguages($getLanguages)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetLanguages($getLanguages));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetListMessage $parameters
     * @return \NOUTSoap\StructType\GetListMessageResponse|bool
     */
    public function GetListMessage(\NOUTSoap\StructType\GetListMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetListMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMailServiceStatus
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetMailServiceStatus $getMailServiceStatus
     * @return \NOUTSoap\StructType\GetMailServiceStatusResponse|bool
     */
    public function GetMailServiceStatus($getMailServiceStatus)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetMailServiceStatus($getMailServiceStatus));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetPJ $parameters
     * @return \NOUTSoap\StructType\GetPJResponse|bool
     */
    public function GetPJ(\NOUTSoap\StructType\GetPJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetPJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPlanningInfo
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetPlanningInfo $parameters
     * @return \NOUTSoap\StructType\GetPlanningInfoResponse|bool
     */
    public function GetPlanningInfo(\NOUTSoap\StructType\GetPlanningInfo $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetPlanningInfo', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStartAutomatism
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetStartAutomatism $parameters
     * @return \NOUTSoap\StructType\GetStartAutomatismResponse|bool
     */
    public function GetStartAutomatism(\NOUTSoap\StructType\GetStartAutomatism $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetStartAutomatism', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTableChild
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetTableChild $parameters
     * @return \NOUTSoap\StructType\GetTableChildResponse|bool
     */
    public function GetTableChild(\NOUTSoap\StructType\GetTableChild $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetTableChild', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemporalAutomatism
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param GetTemporalAutomatism $getTemporalAutomatism
     * @return \NOUTSoap\StructType\GetTemporalAutomatismResponse|bool
     */
    public function GetTemporalAutomatism($getTemporalAutomatism)
    {
        try {
            $this->setResult(self::_getSoapClient()->GetTemporalAutomatism($getTemporalAutomatism));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTokenSession
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\GetTokenSession $parameters
     * @return \NOUTSoap\StructType\GetTokenSessionResponse|bool
     */
    public function GetTokenSession(\NOUTSoap\StructType\GetTokenSession $parameters)
    {
        try {
            $this->setResult($this->__soapCall('GetTokenSession', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HasChanged
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param HasChanged $hasChanged
     * @return \NOUTSoap\StructType\HasChangedResponse|bool
     */
    public function HasChanged($hasChanged)
    {
        try {
            $this->setResult(self::_getSoapClient()->HasChanged($hasChanged));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named InitRecordFromAddress
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, ActionContext, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\InitRecordFromAddress $parameters
     * @return \NOUTSoap\StructType\InitRecordFromAddressResponse|bool
     */
    public function InitRecordFromAddress(\NOUTSoap\StructType\InitRecordFromAddress $parameters)
    {
        try {
            $this->setResult($this->__soapCall('InitRecordFromAddress', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named InitRecordFromMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, ActionContext, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\InitRecordFromMessage $parameters
     * @return \NOUTSoap\StructType\InitRecordFromMessageResponse|bool
     */
    public function InitRecordFromMessage(\NOUTSoap\StructType\InitRecordFromMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('InitRecordFromMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named List
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\_List $parameters
     * @return \NOUTSoap\StructType\ListResponse|bool
     */
    public function _List(\NOUTSoap\StructType\_List $parameters)
    {
        try {
            $this->setResult($this->__soapCall('List', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Modify
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Modify $parameters
     * @return \NOUTSoap\StructType\ModifyResponse|bool
     */
    public function Modify(\NOUTSoap\StructType\Modify $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Modify', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ModifyFolder $parameters
     * @return \NOUTSoap\StructType\ModifyFolderResponse|bool
     */
    public function ModifyFolder(\NOUTSoap\StructType\ModifyFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ModifyFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ModifyMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ModifyMessage $parameters
     * @return \NOUTSoap\StructType\ModifyMessageResponse|bool
     */
    public function ModifyMessage(\NOUTSoap\StructType\ModifyMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ModifyMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Print
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\_Print $parameters
     * @return \NOUTSoap\StructType\PrintResponse|bool
     */
    public function _Print(\NOUTSoap\StructType\_Print $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Print', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReorderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ReorderList $parameters
     * @return \NOUTSoap\StructType\ReorderListResponse|bool
     */
    public function ReorderList(\NOUTSoap\StructType\ReorderList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ReorderList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReorderSubList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ReorderSubList $parameters
     * @return \NOUTSoap\StructType\ReorderSubListResponse|bool
     */
    public function ReorderSubList(\NOUTSoap\StructType\ReorderSubList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ReorderSubList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Request
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Request $parameters
     * @return \NOUTSoap\StructType\RequestResponse|bool
     */
    public function Request(\NOUTSoap\StructType\Request $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Request', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, ActionContext, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\RequestMessage $parameters
     * @return \NOUTSoap\StructType\RequestMessageResponse|bool
     */
    public function RequestMessage(\NOUTSoap\StructType\RequestMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('RequestMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named RequestParam
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\RequestParam $parameters
     * @return \NOUTSoap\StructType\RequestParamResponse|bool
     */
    public function RequestParam(\NOUTSoap\StructType\RequestParam $parameters)
    {
        try {
            $this->setResult($this->__soapCall('RequestParam', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AutoComplete
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\AutoComplete $parameters
     * @return \NOUTSoap\StructType\AutoCompleteResponse|bool
     */
    public function AutoComplete(\NOUTSoap\StructType\AutoComplete $parameters)
    {
        try {
            $this->setResult($this->__soapCall('AutoComplete', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ResetPasswordFailed
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, CustomerInfos
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\CustomerInfos
     * - SOAPHeaders : optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ResetPasswordFailed $parameters
     * @return \NOUTSoap\StructType\ResetPasswordFailedResponse|bool
     */
    public function ResetPasswordFailed(\NOUTSoap\StructType\ResetPasswordFailed $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ResetPasswordFailed', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Search
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Search $parameters
     * @return \NOUTSoap\StructType\SearchResponse|bool
     */
    public function Search(\NOUTSoap\StructType\Search $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Search', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectForm
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SelectForm $parameters
     * @return \NOUTSoap\StructType\SelectFormResponse|bool
     */
    public function SelectForm(\NOUTSoap\StructType\SelectForm $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SelectForm', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectItems
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SelectItems $parameters
     * @return \NOUTSoap\StructType\SelectItemsResponse|bool
     */
    public function SelectItems(\NOUTSoap\StructType\SelectItems $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SelectItems', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectPrintTemplate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SelectPrintTemplate $parameters
     * @return \NOUTSoap\StructType\SelectPrintTemplateResponse|bool
     */
    public function SelectPrintTemplate(\NOUTSoap\StructType\SelectPrintTemplate $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SelectPrintTemplate', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SelectChoice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SelectChoice $parameters
     * @return \NOUTSoap\StructType\SelectChoiceResponse|bool
     */
    public function SelectChoice(\NOUTSoap\StructType\SelectChoice $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->SelectChoice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SendMessage $parameters
     * @return \NOUTSoap\StructType\SendMessageResponse|bool
     */
    public function SendMessage(\NOUTSoap\StructType\SendMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SendMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetOrderList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SetOrderList $parameters
     * @return \NOUTSoap\StructType\SetOrderListResponse|bool
     */
    public function SetOrderList(\NOUTSoap\StructType\SetOrderList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SetOrderList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetOrderSubList
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\SetOrderSubList $parameters
     * @return \NOUTSoap\StructType\SetOrderSubListResponse|bool
     */
    public function SetOrderSubList(\NOUTSoap\StructType\SetOrderSubList $parameters)
    {
        try {
            $this->setResult($this->__soapCall('SetOrderSubList', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named TransformInto
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\TransformInto $parameters
     * @return \NOUTSoap\StructType\TransformIntoResponse|bool
     */
    public function TransformInto(\NOUTSoap\StructType\TransformInto $parameters)
    {
        try {
            $this->setResult($this->__soapCall('TransformInto', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Update
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue,
     * \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\Update $parameters
     * @return \NOUTSoap\StructType\UpdateResponse|bool
     */
    public function Update(\NOUTSoap\StructType\Update $parameters)
    {
        try {
            $this->setResult($this->__soapCall('Update', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\UpdateFolder $parameters
     * @return \NOUTSoap\StructType\UpdateFolderResponse|bool
     */
    public function UpdateFolder(\NOUTSoap\StructType\UpdateFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('UpdateFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateMessage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue, AutoValidate
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue, \NOUTSoap\StructType\AutoValidate
     * - SOAPHeaders : optional, required, required, optional, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\UpdateMessage $parameters
     * @return \NOUTSoap\StructType\UpdateMessageResponse|bool
     */
    public function UpdateMessage(\NOUTSoap\StructType\UpdateMessage $parameters)
    {
        try {
            $this->setResult($this->__soapCall('UpdateMessage', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Validate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, APIUser, CustomerInfos, ActionContext, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/,
     * http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\APIUser, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\ActionContext, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional, required, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param Validate $validate
     * @return \NOUTSoap\StructType\ValidateResponse|bool
     */
    public function Validate($validate)
    {
        try {
            $this->setResult(self::_getSoapClient()->Validate($validate));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateFolder
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ValidateFolder $parameters
     * @return ValidateFolderResponse|bool
     */
    public function ValidateFolder(\NOUTSoap\StructType\ValidateFolder $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ValidateFolder', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named WithAutomaticResponse
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\WithAutomaticResponse $parameters
     * @return \NOUTSoap\StructType\WithAutomaticResponseResponse|bool
     */
    public function WithAutomaticResponse(\NOUTSoap\StructType\WithAutomaticResponse $parameters)
    {
        try {
            $this->setResult($this->__soapCall('WithAutomaticResponse', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ZipPJ
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : APIUUID, UsernameToken, SessionToken, CustomerInfos, OptionDialogue
     * - SOAPHeaderNamespaces : http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/, http://www.nout.fr/wsdl/SimaxService.wsdl/
     * - SOAPHeaderTypes : \NOUTSoap\StructType\APIUUID, \NOUTSoap\StructType\UsernameTokenType, string, \NOUTSoap\StructType\CustomerInfos, \NOUTSoap\StructType\OptionDialogue
     * - SOAPHeaders : optional, required, required, optional, optional
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NOUTSoap\StructType\ZipPJ $parameters
     * @return \NOUTSoap\StructType\ZipPJResponse|bool
     */
    public function ZipPJ(\NOUTSoap\StructType\ZipPJ $parameters)
    {
        try {
            $this->setResult($this->__soapCall('ZipPJ', $parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return CancelFolderResponse|CancelMessageResponse|CloseFolderListResponse|CloseMessageListResponse|DeleteFolderResponse|DisconnectResponse|ValidateFolderResponse|\NOUTSoap\StructType\AddPJResponse|\NOUTSoap\StructType\CancelResponse|\NOUTSoap\StructType\CheckCreateElementResponse|\NOUTSoap\StructType\CheckRecipientResponse|\NOUTSoap\StructType\ConfirmResponseResponse|\NOUTSoap\StructType\CreateFolderResponse|\NOUTSoap\StructType\CreateFromResponse|\NOUTSoap\StructType\CreateMessageResponse|\NOUTSoap\StructType\CreateResponse|\NOUTSoap\StructType\DeletePJResponse|\NOUTSoap\StructType\DeleteResponse|\NOUTSoap\StructType\DisplayResponse|\NOUTSoap\StructType\DrillThroughResponse|\NOUTSoap\StructType\EnterReorderListModeResponse|\NOUTSoap\StructType\ExecuteResponse|\NOUTSoap\StructType\GetCalculationResponse|\NOUTSoap\StructType\GetChartResponse|\NOUTSoap\StructType\GetColInRecordResponse|\NOUTSoap\StructType\GetContentFolderResponse|\NOUTSoap\StructType\GetEndAutomatismResponse|\NOUTSoap\StructType\GetFolderListResponse|\NOUTSoap\StructType\GetLanguagesResponse|\NOUTSoap\StructType\GetListMessageResponse|\NOUTSoap\StructType\GetMailServiceStatusResponse|\NOUTSoap\StructType\GetPJResponse|\NOUTSoap\StructType\GetPlanningInfoResponse|\NOUTSoap\StructType\GetStartAutomatismResponse|\NOUTSoap\StructType\GetTableChildResponse|\NOUTSoap\StructType\GetTemporalAutomatismResponse|\NOUTSoap\StructType\GetTokenSessionResponse|\NOUTSoap\StructType\HasChangedResponse|\NOUTSoap\StructType\InitRecordFromAddressResponse|\NOUTSoap\StructType\InitRecordFromMessageResponse|\NOUTSoap\StructType\ListResponse|\NOUTSoap\StructType\ModifyFolderResponse|\NOUTSoap\StructType\ModifyMessageResponse|\NOUTSoap\StructType\ModifyResponse|\NOUTSoap\StructType\PrintResponse|\NOUTSoap\StructType\ReorderListResponse|\NOUTSoap\StructType\ReorderSubListResponse|\NOUTSoap\StructType\RequestMessageResponse|\NOUTSoap\StructType\RequestParamResponse|\NOUTSoap\StructType\RequestResponse|\NOUTSoap\StructType\ResetPasswordFailedResponse|\NOUTSoap\StructType\SearchResponse|\NOUTSoap\StructType\SelectFormResponse|\NOUTSoap\StructType\SelectItemsResponse|\NOUTSoap\StructType\SelectPrintTemplateResponse|\NOUTSoap\StructType\SendMessageResponse|\NOUTSoap\StructType\SetOrderListResponse|\NOUTSoap\StructType\SetOrderSubListResponse|\NOUTSoap\StructType\TransformIntoResponse|\NOUTSoap\StructType\UpdateFolderResponse|\NOUTSoap\StructType\UpdateMessageResponse|\NOUTSoap\StructType\UpdateResponse|\NOUTSoap\StructType\ValidateResponse|\NOUTSoap\StructType\WithAutomaticResponseResponse|\NOUTSoap\StructType\ZipPJResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
