##Ouvrir et Fermer une session


> Authentification via le SOAPClient fourni par NOUT (intranet)

```php
<?php

//-------------------------------------------------------------
//ETAPE DE CONNEXION
/** @var \Service\NOUTService $oSOAPClient */

$usernameToken = new \Entity\UsernameToken('superviseur', '');
//calcule le UsernameToken
$usernameToken->ComputeCryptedPassword();

//instantiation de la structure qui correspond aux paramètres la méthode GetTokenSession
$stGetTokenSessionParam = new \WsdlToPhp\StructType\GetTokenSession($usernameToken);

// appel de la méthode
$result = $oSOAPClient->GetTokenSession($stGetTokenSessionParam);
$oSOAPClient->log('GetTokenSession'); //affiche le log

//on a le token de session qui va nous servir par la suite
$sessionToken = $result->SessionToken;

//on le donne au service ici, pas besoin de le faire après pour cette instance du service
$oSOAPClient->setSoapHeaderSessionToken($sessionToken);
?>
```

A l'exception de quelques unes, toutes les méthodes (SOAP ou REST) requière une session.

Pour ouvrir une session, il faut utiliser l'opération [GetTokenSession](#gettokensession). Pour cela, il faut demander son identifiant et son mot de passe à l'utilisateur pour pouvoir calculer le [UsernameToken](#usernametoken). 

Pour une identification en mode extranet, l'identifiant et le mot de passe récoltés permettent de calculer le [UsernameToken](#usernametoken) fils de [ExtranetUser](#extranetuser).

Le paramètre `Form` de [ExtranetUser](#extranetuser) contient l'identifiant ou le libellé du formulaire qui contient les éléments sur lequel se fait l'extranet (exemple: client professionnel).

Le paramètre [UsernameToken](#usernametoken) (fils de la balise `GetTokenSession`) est calculé à partir de l'identifiant et du mot de passe de l'utilisateur SIMAX auquel est associé l'extranet et qui donne les droits d'accès.

Ces dernières informations (formulaire, identifiant, mot de passe) peuvent être stockées dans un fichier de configuration.

Le token de session récolté devra être passé dans le Header de toutes les requêtes jusqu'à la [fermeture](#disconnect) de la session. L'entête à utiliser est [SessionToken](#sessiontoken)

