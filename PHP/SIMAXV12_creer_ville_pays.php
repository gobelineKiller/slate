<html>
<head>
    <title>SOAPClient - Créer ville / pays</title>
</head>
<body>
<?php

include('_InitSOAPClient.php');

//quelque constante
define("TABLEAU_VILLE", '9494');
define("TABLEAU_PAYS", '9495');

define("COL_VILLE_LIBELLE","9489");
define("COL_VILLE_CP","9490");
define("COL_VILLE_Pays","52176367525111");

define("COL_PAYS_Nom", 9492);

define("PARAM_RECHERCHER_PAYS_PAYS", "36593783534609");

//-------------------------------------------------------------
//ETAPE DE CONNEXION
include('_connexion.php');

//------------------------------------------
//initialisation de l'étape de création
$stCreate = new \NOUTSoap\StructType\Create(TABLEAU_VILLE);
$resultCreate = $oSOAPClient->Create($stCreate);
$oSOAPClient->log('Creer ville');

$returnType=$oSOAPClient->getSoapHeaderReturnType();
if ($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_RECORD)
{
    //Gestion du cas d'erreur
    debug_log("Erreur", "Le return type devrait être 'Record' mais est '$returnType'");

    //-------------------------------------------------------------
    //ETAPE de DECONNEXION
    include('_deconnexion.php');

    die();
}

// pays est obligatoire, il faut rechercher le pays avec Script PHP et le créer s'il n'existe pas
$stRequest = new \NOUTSoap\StructType\Request(TABLEAU_PAYS, null, null, "<CondList><Condition><CondCol>".COL_PAYS_Nom."</CondCol><CondType>Equal</CondType><CondValue>ScriptPHP</CondValue></Condition></CondList>");
$oSOAPClient->setSoapHeaderAutoValidate(-1);
$resultRequest = $oSOAPClient->Request($stRequest);
$oSOAPClient->log('Request Pays');

//$stSearch = new \NOUTSoap\StructType\Search(TABLEAU_PAYS, "<xml><id_".PARAM_RECHERCHER_PAYS_PAYS.">Script PHP</id_".PARAM_RECHERCHER_PAYS_PAYS."></xml>");


$idsimax = $oSOAPClient->getSoapHeaderElement()->get_();
$updateXML="<xml>
<id_".TABLEAU_VILLE.">
<id_".COL_VILLE_LIBELLE.">".'Script PHP '.uniqid()."</id_".COL_VILLE_LIBELLE.">
</id_".TABLEAU_VILLE.">
</xml>";


var_dump($oSOAPClient->getOutputHeaders());
var_dump($updateXML);
var_dump($idsimax);
/*


$oSOAPClient->setSoapHeaderActionContext($oSOAPClient->getSoapHeaderActionContext());
$oSOAPClient->setSoapHeaderAutoValidate(1);


$updateXML="<xml>
<id_9494>
<id_9489>".'Script PHP '.base64_encode(microtime())."</id_9489>
<id_45957764764076>47997784314920</id_45957764764076>
</id_9494>
</xml>";

$stUpdate = new \NOUTSoap\StructType\Update('9494', "<id_9494>$idsimax</id_9494>", 0, $updateXML);
$result = $oSOAPClient->Update($stUpdate);
$oSOAPClient->log('Update en autovalidate');
*/

//-----------------------------------------------------------
//Etape de recherche du pays Test API
//$oSOAPClient->setSoapHeaderActionContext($oSOAPClient->getSoapHeaderActionContext());
//$oSOAPClient->setSoapHeaderAutoValidate(-1);

//$stSearch = new \NOUTSoap\StructType\Search('9495', '', null, "52176367525111", null, \NOUTSoap\EnumType\DisplayModeParamEnum::VALUE_LIST); //rechercher pays
//$result = $oSOAPClient->Search($stSearch);
//$oSOAPClient->log('Rechercher Pays');


//-------------------------------------------------------------
//ETAPE DE CREATION D'UNE VILLE


//$stCreate = new \NOUTSoap\StructType\Create('9494');
//$result = $oSOAPClient->Create($stCreate);
//$oSOAPClient->log('Creer ville');

//-------------------------------------------------------------
//ETAPE de DECONNEXION
include('_deconnexion.php');