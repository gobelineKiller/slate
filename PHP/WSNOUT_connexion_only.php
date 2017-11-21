<html>
<head>
<title>WSNOUT - Connexion / Déconnexion</title>
</head>
<body>
<?php

include ("_debug_fct.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);


$sHost = 'ws.nout.fr';
$sLogin = 'siteweb';
$sMdp = 'MsSbPW7';
$apiuuid = 'f57d5d2c-d6d6-4659-87ca-9dff01a25d58'; //intranet de lisa

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
    AbstractSoapClientBase::WSDL_URL => "http://$sHost/REST/getwsdl?!apiuuid=$apiuuid",
    AbstractSoapClientBase::WSDL_CLASSMAP => \NOUTSoap\ClassMap::get(),
    AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1,
);
// if getList operation is provided by the Web service
$oSOAPClient = new \NOUTSoap\ServiceType\Service($options);
$oSOAPClient->_getSoapClient()->__setLocation("http://$sHost/SOAP/");
$oSOAPClient->setSoapHeaderAPIUUID($apiuuid);






//-------------------------------------------------------------
//ETAPE DE CONNEXION
include('_connexion.php');

//-------------------------------------------------------------
//ETAPE de DECONNEXION
include('_deconnexion.php');

?>
</body>
</html>