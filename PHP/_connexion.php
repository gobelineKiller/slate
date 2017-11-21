<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 25/07/2017
 * Time: 14:43
 */

$usernameToken = new \NOUTSoap\Entity\UsernameToken($sLogin, $sMdp);

//-------------------------------------------------------------
//ETAPE DE CONNEXION
$usernameToken->ComputeCryptedPassword();
$stGetTokenSessionParam = new \NOUTSoap\StructType\GetTokenSession($usernameToken);
try {
    $result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
    $oSOAPClient->log('GetTokenSession');
}
catch(\Exception $e){
    debug_log("Erreur", "Erreur lors de l'identification");
    die();
}

$returnType = $oSOAPClient->getSoapHeaderReturnType();
if ($returnType != \NOUTSoap\EnumType\ReturnType::VALUE_IDENTIFICATION)
{
    debug_log("Erreur", "Erreur lors de l'identification");
    die();
}

//on a le token de session qui va nous servir par la suite
$sessionToken = $result->SessionToken;
$oSOAPClient->setSoapHeaderSessionToken($sessionToken);
$oSOAPClient->setSoapHeaderUsernameToken($usernameToken);