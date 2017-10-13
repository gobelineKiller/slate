<html>
<head>
    <title>SOAPClient - Créer ville / pays</title>
</head>
<body>
<?php

include('_InitSOAPClient.php');

//quelque constante
define("TABLEAU_CLIENT", '2564');
define("TABLEAU_CLIENTPART", '2566');
define("TABLEAU_CLIENTPRO", '2568');
define("TABLEAU_FORMULAIRE", '2029');

//-------------------------------------------------------------
//ETAPE DE CONNEXION
include('_connexion.php');

//------------------------------------------
//initialisation de l'étape de création
$stCreate = new \NOUTSoap\StructType\Create(TABLEAU_CLIENT);
$resultCreate = $oSOAPClient->Create($stCreate);
$oSOAPClient->log('Creer Client');

$resultXML = simplexml_load_string($resultCreate->getXml());
$resultHeaders = $oSOAPClient->getOutputHeaders();
//on vérifie qu'on a bien un resultat de type AmbiguousAction
if ($resultHeaders['ReturnType'] != \NOUTSoap\EnumType\ReturnType::VALUE_AMBIGUOUS_ACTION)
{
    debug_log("Mauvais paramétrage", "Le paramétrage courant ne permet pas d'exécuter ce script. Le paramétrage doit être compatible avec simaxerp");
}
else
{
    //var_dump($resultHeaders);
    //on regarde les formulaires possibles
    echo "<h2>Formulaire Possible</h2>";
    echo "<ul>";
    $balise = "id_".$resultHeaders['Form']->get_();
    foreach($resultXML->{$balise} as $elementXML)
    {
        $idformulaire = $elementXML->attributes('http://www.nout.fr/XML/')['id'];
        $nomformulaire = $elementXML->attributes('http://www.nout.fr/XML/')['title'];
        echo "<li><b>$idformulaire</b> : $nomformulaire</li>";
    }
    echo "</ul>";

}

//$idsimax = (string)$villeXML->id_9494->attributes('http://www.nout.fr/XML/')['id'];
//
//var_dump($oSOAPClient->getOutputHeaders());
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