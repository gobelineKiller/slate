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
$result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
$oSOAPClient->log('GetTokenSession');

//on a le token de session qui va nous servir par la suite
$sessionToken = $result->SessionToken;
$oSOAPClient->setSoapHeaderSessionToken($sessionToken);
$oSOAPClient->setSoapHeaderUsernameToken($usernameToken);