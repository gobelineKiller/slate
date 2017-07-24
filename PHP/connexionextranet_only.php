<html>
<head>
<title>SoapClient</title>
</head>
<body>
<?php

include('_InitSOAPClient.php');

$sLogin = 'extranet authentifié';
$sMdp = '';

$sLoginExtra = 'conan2';
$sMdpExtra = 'conan2';

$sFormExtra = '224661136955914'; //ou l'identitifant du formulaire

//identification intranet
$usernameToken = new \NOUTSoap\Entity\UsernameToken($sLogin, $sMdp);
$usernameToken->ComputeCryptedPassword();

//identification extranet
$usernameTokenExtranet = new \NOUTSoap\Entity\UsernameToken($sLoginExtra, $sMdpExtra);
$usernameTokenExtranet->ComputeCryptedPassword();
$extranetUser = new \NOUTSoap\StructType\ExtranetUserType($usernameTokenExtranet, $sFormExtra);

//-------------------------------------------------------------
//ETAPE DE CONNEXION
$stGetTokenSessionParam = new \NOUTSoap\StructType\GetTokenSession($usernameToken, $extranetUser);
$result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
$oSOAPClient->log('GetTokenSession');

//on a le token de session qui va nous servir par la suite
$sessionToken = $result->SessionToken;
$oSOAPClient->setSoapHeaderSessionToken($sessionToken);


//-------------------------------------------------------------
//ETAPE de DECONNEXION

$oSOAPClient->setSoapHeaderActionContext(null);
$oSOAPClient->setSoapHeaderAutoValidate(null);

//on recalcule le username token
$usernameToken->ComputeCryptedPassword();
$oSOAPClient->setSoapHeaderUsernameToken($usernameToken);

$result = $oSOAPClient->Disconnect(null);
$oSOAPClient->log('Disconnect');

?>
</body>
</html>