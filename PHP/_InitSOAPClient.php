<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 24/07/2017
 * Time: 16:47
 */


error_reporting(E_ALL);
ini_set("display_errors", 1);

$nPort = 8092; //homer simaxv12
$sHost = 'localhost';
$sLogin = 'superviseur';
$sMdp = '';

//autoload
spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();


use NOUTSoap\PackageBase\AbstractSoapClientBase;
$options = array(
    AbstractSoapClientBase::WSDL_TRACE=>1,
    AbstractSoapClientBase::WSDL_EXCEPTIONS=>1,  //optional parameters for debugging
    AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create(array('http' => array(
        'header' => "x-SIMAXService-Client: Proxy-SOAPClient\nx-SIMAXService-Client-Version: 01.1631.01\nx-SIMAXService-Client-IP: ".$_SERVER["REMOTE_ADDR"],
    ))),
    AbstractSoapClientBase::WSDL_URL => "http://$sHost:$nPort/getwsdl",
    AbstractSoapClientBase::WSDL_PROXY_HOST => $sHost,
    AbstractSoapClientBase::WSDL_PROXY_PORT => "$nPort",
    AbstractSoapClientBase::WSDL_CLASSMAP => \NOUTSoap\ClassMap::get(),
    AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1,
);
// if getList operation is provided by the Web service
$oSOAPClient = new \NOUTSoap\ServiceType\Service($options);



function debug_log($titre, $message)
{
    echo "<h1>$titre</h1>";
    echo "<pre style=\"border: solid 1px red;\">";
    echo $message;
    echo "</pre>";
}