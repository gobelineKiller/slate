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
try {
    $resultRequest = $oSOAPClient->Request($stRequest);
    $oSOAPClient->log('Request Type de champ simple');
}
catch(\Exception $e){
    debug_log("Erreur", "Erreur lors de l'execution de la requete");
    include('_deconnexion.php'); //DECONNEXION
    die();
}

$returnType = $oSOAPClient->getSoapHeaderReturnType();
if ($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_LIST) {
    debug_log("Erreur", "Le type de retour n'est pas celui attendu");
    include('_deconnexion.php'); //DECONNEXION
    die();
}

$xml = simplexml_load_string($resultRequest->xml);
if (count($xml->children())==0){
    //pas d'élément trouvé
    debug_log("Erreur", "Pas d'élément trouvé pour la référence $sRefRecherchee");
    include('_deconnexion.php'); //DECONNEXION
    die();
}

/** @var \SimpleXMLElement $ndTrouve */
$ndTrouve = $xml->{'id_' . TABLEAU};
$idsimax = $ndTrouve->attributes("http://www.nout.fr/XML/")['id'];

$paramXML = '<id_' . TABLEAU . ">$idsimax</id_" . TABLEAU . '>';

//il faut initialiser la modification
$stModify = new \NOUTSoap\StructType\Modify(TABLEAU, $paramXML);
$oSOAPClient->setSoapHeaderAutoValidate(0);
try {
    $resultModify = $oSOAPClient->Modify($stModify);
    $oSOAPClient->log('Modify');
}
catch(\Exception $e){
    debug_log("Erreur", "Erreur lors de l'execution de la requete");
    include('_deconnexion.php'); //DECONNEXION
    die();
}

$returnType = $oSOAPClient->getSoapHeaderReturnType();
//on vérifie qu'on a bien un resultat de type AmbiguousAction
if ($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_RECORD){
    debug_log("Erreur", "L'élément $idsimax est inconnu");
    include('_deconnexion.php');//DECONNEXION
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
try {
    $resultUpdate = $oSOAPClient->Update($stUpdate);
    $oSOAPClient->log('Update');
}
catch(\Exception $e){
    debug_log("Erreur", "Erreur lors de l'execution de la requete");
    include('_deconnexion.php');//DECONNEXION
    die();
}

if (($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_EMPTY) && ($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_REPORT)){
    debug_log("Erreur", "L'enregistrement c'est mal passé");
    include('_deconnexion.php');//DECONNEXION
    die();
}

//-------------------------------------------------------------
//ETAPE de DECONNEXION
include('_deconnexion.php');