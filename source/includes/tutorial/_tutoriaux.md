# Tutoriaux


> Instanciation du client PHP

```php
<?php

$nPort = 8052;
$sHost = '127.0.0.1';

//autoload des classes
spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

use \NOUTSoap\PackageBase\AbstractSoapClientBase;

//définition des options pour le client SOAP
$options = array(
    AbstractSoapClientBase::WSDL_TRACE=>1,
    AbstractSoapClientBase::WSDL_EXCEPTIONS=>1,  //optional parameters for debugging
    AbstractSoapClientBase::WSDL_STREAM_CONTEXT => stream_context_create(array(
        'http' => array(
        	'header' => "x-SIMAXService-Client: Proxy-SOAPClient\nx-SIMAXService-Client-Version: 01.1631.01\nx-SIMAXService-Client-IP: ".$_SERVER["REMOTE_ADDR"],
        ))),
    AbstractSoapClientBase::WSDL_URL => "http://$sHost:$nPort/getwsdl",
    AbstractSoapClientBase::WSDL_PROXY_HOST => $sHost,
    AbstractSoapClientBase::WSDL_PROXY_PORT => "$nPort",
    AbstractSoapClientBase::WSDL_CLASSMAP => \NOUTSoap\ClassMap::get(),
    AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1,
);
// on crée le client SOAP
$oSOAPClient = new \NOUTSoap\ServiceType\Service($options);

?>
```


Avant de lire les différents tutoriaux, veuillez lire la partie [Dialoguer avec NOUTOnline](#dialoguer-avec-noutonline), en particulier les [concepts clés](#concepts-cl-s).

Les tutoriaux disponible sont :

* [Ouvrir et fermer une session](#ouvrir-et-fermer-une-session)
* [Créer un enregistrement](#cr-er-un-enregistrement)
* Modifier un enregistrement
* Supprimer un enregistrement
* Afficher une liste
* Faire une recherche
* Faire une requête