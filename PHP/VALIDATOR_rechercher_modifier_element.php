<html>
<head>
    <title>SOAPClient - Rechercher type de champ simple et modifier type de champ simple</title>
</head>
<body>
<?php

$nPort = 8062; //prod validator
include('_InitSOAPClient.php');

define("TABLEAU", '228441939754526');

define("COL_Recherche", "215045936758430");
define("COL_VraiFaux", "221733204940980");

//-------------------------------------------------------------
//ETAPE DE CONNEXION
include('_connexion.php');

$sRefRecherchee='TCS00011';

//----
//on recherche l'element
$stRequest = new \NOUTSoap\StructType\Request(TABLEAU, null, "<Condition><CondCol>" . COL_Recherche . "</CondCol><CondType>Equal</CondType><CondValue>$sRefRecherchee</CondValue></Condition>");
$oSOAPClient->setSoapHeaderAutoValidate(-1);
$resultRequest = $oSOAPClient->Request($stRequest);
$oSOAPClient->log('Request Type de champ simple');

$xml = simplexml_load_string($resultRequest->xml);
if (count($xml->children())==0){
    //pas d'élément trouvé

    //Gestion du cas d'erreur
    debug_log("Erreur", "Pas d'élément trouvé pour la référence $sRefRecherchee");
    //-------------------------------------------------------------
    //ETAPE de DECONNEXION
    include('_deconnexion.php');

    die();
}

/** @var \SimpleXMLElement $ndTrouve */
$ndTrouve = $xml->{'id_' . TABLEAU};
$idsimax = $ndTrouve->attributes("http://www.nout.fr/XML/")['id'];

$paramXML = '<id_' . TABLEAU . ">$idsimax</id_" . TABLEAU . '>';

//il faut initialiser la modification
$stModify = new \NOUTSoap\StructType\Modify(TABLEAU, $paramXML);
$oSOAPClient->setSoapHeaderAutoValidate(0);
$resultModify = $oSOAPClient->Modify($stModify);
$oSOAPClient->log('Modify');

$returnType = $oSOAPClient->getSoapHeaderReturnType();

//on vérifie qu'on a bien un resultat de type AmbiguousAction
if ($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_RECORD)
{
    debug_log("Erreur", "L'élément $idsimax est inconnu");

    //-------------------------------------------------------------
    //ETAPE de DECONNEXION
    include('_deconnexion.php');

    die();
}

$idContexteAction = $oSOAPClient->getSoapHeaderActionContext();

//il faut faire un update
$updateData = "<xml>
<id_" . TABLEAU . ">
<id_" . COL_VraiFaux . ">1</id_" . COL_VraiFaux . ">
</id_" . TABLEAU . ">
</xml>";

$stUpdate = new \NOUTSoap\StructType\Update(TABLEAU, $paramXML, null, $updateData);
$oSOAPClient->setSoapHeaderAutoValidate(1);
$oSOAPClient->setSoapHeaderActionContext($idContexteAction);
$resultUpdate = $oSOAPClient->Update($stUpdate);
$oSOAPClient->log('Update');

//-------------------------------------------------------------
//ETAPE de DECONNEXION
include('_deconnexion.php');