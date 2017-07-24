<html>
<head>
<title>SOAPClient - Connexion / Déconnexion</title>
</head>
<body>
<?php

include('_InitSOAPClient.php');

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