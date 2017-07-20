##Ouvrir et Fermer une session

A l'exception de quelques unes, toutes les méthodes (SOAP ou REST) requière une session.

Pour ouvrir une session, il faut utiliser l'opération [GetTokenSession](#gettokensession).

Le token de session récolté devra être passé dans le Header de toutes les requêtes jusqu'à la [fermeture](#disconnect) de la session. 
L'entête à utiliser est [SessionToken](#sessiontoken).



###Ouvrir une session en mode intranet

> Authentification en intranet

```php
<?php

//-------------------------------------------------------------
//ETAPE DE CONNEXION
/** @var \Service\NOUTService $oSOAPClient */

$sLogin = 'superviseur';
$sMdp = '';

$usernameToken = new \Entity\UsernameToken($sLogin, $sMdp);
$usernameToken->ComputeCryptedPassword();//calcule le UsernameToken

//instantiation de la structure qui correspond aux paramètres la méthode GetTokenSession
$stGetTokenSessionParam = new \WsdlToPhp\StructType\GetTokenSession($usernameToken);

// appel de la méthode
$result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
$oSOAPClient->log('GetTokenSession'); //affiche le log

//on a le token de session qui va nous servir par la suite
$sessionToken = $result->SessionToken;

//on le donne au service ici, pas besoin de le faire après pour cette instance du service
$oSOAPClient->setSoapHeaderSessionToken($sessionToken);

//on est prêt pour les actions
?>
```

Pour calculer le paramètre [UsernameToken](#usernametoken), il faut demander à l'utilisateur sont identifiant et son mot de passe.


###Ouvrir une session en mode extranet


> Authentification en extranet

```php
<?php
//information de connexion de l'utilisateur SIMAX (depuis fichier de config)
$sLogin = 'Extranet';
$sMdp = 'extranet';
// formulaire sur lequel se fait l'extranet (depuis fichier de config)
$sFormExtra = 'Client'; //ou l'identitifant du formulaire

//information de connexion de l'utilisateur Extranet (demandé à l'utilisateur final)
$sLoginExtra = 'Client Dupond';
$sMdpExtra = 'mon mot de passe';

//-------------------------------------------------------------
//ETAPE DE CONNEXION
/** @var \Service\NOUTService $oSOAPClient */

//identification de l'utilisateur SIMAX
//c'est cet objet qu'on garde pour recalculer l'entête UsernameToken pour les requetes suivantes.
$usernameToken = new \Entity\UsernameToken($sLogin, $sMdp); 
$usernameToken->ComputeCryptedPassword();//calcule le UsernameToken

//identification extranet
$usernameTokenExtranet = new \Entity\UsernameToken($sLoginExtra, $sMdpExtra);
$usernameTokenExtranet->ComputeCryptedPassword();//calcule le UsernameToken
$extranetUser = new \WsdlToPhp\StructType\ExtranetUserType($usernameTokenExtranet, $sFormExtra);

//-------------------------------------------------------------
//ETAPE DE CONNEXION
$stGetTokenSessionParam = new \WsdlToPhp\StructType\GetTokenSession($usernameToken, $extranetUser);
$result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
$oSOAPClient->log('GetTokenSession');

//on a le token de session qui va nous servir par la suite
$sessionToken = $result->SessionToken;
$oSOAPClient->setSoapHeaderSessionToken($sessionToken);

//on est prêt pour les actions
?>
```

Pour une identification en mode extranet, l'identifiant et le mot de passe récoltés permettent de calculer le [UsernameToken](#usernametoken) fils de [ExtranetUser](#extranetuser).

Le paramètre `Form` de [ExtranetUser](#extranetuser) contient l'identifiant ou le libellé du formulaire qui contient les éléments sur lequel se fait l'extranet (exemple: client professionnel).

Le paramètre [UsernameToken](#usernametoken) (fils de la balise `GetTokenSession`) est calculé à partir de l'identifiant et du mot de passe de l'utilisateur SIMAX auquel est associé l'extranet et qui donne les droits d'accès.

Ces dernières informations (formulaire, identifiant, mot de passe) peuvent être stockées dans un fichier de configuration.


###Fermer la session

> Fermer la session

```php
<?php

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
```

Pour la deconnexion, il faut utiliser la méthode [Disconnect](#disconnect).


