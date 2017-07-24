
### GetTokenSession


> Requête SOAP (intranet)

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
        <OptionDialogue>
            <Readable>0</Readable>
            <DisplayValue>16638</DisplayValue>
            <EncodingOutput>0</EncodingOutput>
            <LanguageCode>12</LanguageCode>
            <WithFieldStateControl>1</WithFieldStateControl>
        </OptionDialogue>
        <APIUUID/>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <GetTokenSession xmlns="http://www.nout.fr/wsdl/SimaxService.wsdl/">
            <UsernameToken>
                <Username>superviseur</Username>
                <Password>X3WmzrQFDaAtBvHTnoLSg6vyFuE=</Password>
                <Nonce>MC4wNTc4NTEwMCAxMzc2NDczMTM2</Nonce>
                <Created>Wed, 14 Aug 2013 09:38:56 +0000</Created>
            </UsernameToken>
            <ExtranetUser>
                <UsernameToken/>
                <Form/>
            </ExtranetUser>
        </GetTokenSession>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```


> Requête REST (intranet)

```http
http://noutonline:8052/GetTokenSession?
```




Cette opération permet de s'authentifier auprès de NOUTOnline et de récupérer un token de session, 
à utiliser jusqu'à la déconnexion. C'est une étape obligatoire pour dialoguer avec NOUTOnline 
car cela permet d'ouvrir une session. Pour cela, il faut demander son identifiant et son mot de passe à 
l'utilisateur pour pouvoir calculer le [UsernameToken](#usernametoken).

Le token de session récolté devra être passé dans le Header de toutes les requêtes jusqu'à la fermeture de la session. 
L'entête à utiliser est [SessionToken](#sessiontoken)

Cette fonction s'appuie sur les spécifications d'OASIS Web Service Security UserNameToken.

Voir le tutoriel [Ouvrir et Fermer une session](#ouvrir-et-fermer-une-session) pour le code PHP.

#### Requête


Les entêtes acceptées sont :

* [CustomerInfos](#customerinfos) (facultatif),
* [OptionDialogue](#optiondialogue) (facultatif),
* [APIUUID](#apiuuid) (facultatif).

Les paramètres sont :

* [UsernameToken](#usernametoken) : information de connexion de l'utilisateur SIMAX,
* [ExtranetUser](#extranetuser) : (facultatif) information de connexion de l'utilisateur Extranet,
* `DefaultClientLanguageCode` : (facultatif) (entier) code langue désiré pour la session (si paramétrage multilangue) ; les valeurs possibles sont :
  * 12 Français

<aside class="notice">
Si la valeur de <code class="prettyprint">DefaultClientLanguageCode</code> est 0, NOUTOnline renvoi dans les entêtes 
<a href="#sessionlanguagecode">SessionLanguageCode</a> le code de la langue par défaut.
</aside>



#### Réponse


> Reponse SOAP : succès

```xml
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope"
              xmlns:xml="http://www.w3.org/XML/1998/namespace">
    <env:Header>
        <ReturnType>Identification</ReturnType>
        <ConnectedUser>
            <Form title="Utilisateur">1169</Form>
            <Element title="superviseur">2</Element>
        </ConnectedUser>
    </env:Header>
    <env:Body>
        <GetTokenSessionResponse xmlns="http://www.nout.fr/wsdl/SimaxService.wsdl/">
            <SessionToken>7cec0345-3abb-4353-bfb9-aacc143a2d05</SessionToken>
        </GetTokenSessionResponse>
    </env:Body>
</env:Envelope>
```


> Reponse SOAP : échec

```xml
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope"
    xmlns:xml="http://www.w3.org/XML/1998/namespace"
    xmlns:simax-error="http://www.nout.fr/soap/error">
    <env:Body>
        <env:Fault>
            <env:Code>
                <env:Value>Sender</env:Value>
            </env:Code>
            <env:Reason>
                <env:Text xml:lang="fr">849347964(12|1404)<br />
                    L'identifiant ou le mot de passe utilisateur sont incorrects.<ul><li>Paramètre 1169(Utilisateur) ; Valeur dfqsdf</li></ul>
                </env:Text>
            </env:Reason>
            <env:Detail>
                <ListErr VERSION="1" VERSION_LECTECRIT="1" VERSION_LECTURE="1"
                    DATEHEURE="2015071710034273" xmlns:simax-error="http://www.nout.fr/soap/error">
                    <simax-error:Error>
                        <Code Name="849347964">
                            <Category>12</Category>
                            <Numero>1404</Numero>
                        </Code>
                        <Parameter>
                            <utilisateur IDParam="1169" TitleParam="Utilisateur" TitleElem="super viseur" />
                        </Parameter>
                        <Message>L'identifiant ou le mot de passe utilisateur sont incorrects.</Message>
                    </simax-error:Error>
                </ListErr>
            </env:Detail>
        </env:Fault>
    </env:Body>
</env:Envelope>
```


NOUTOnline renvoit un token de session dans la balise `<SessionToken>`.
Le token retourné est à conserver car il permet d'identifier la session courante de l'utilisateur et il devra être 
ajouté dans le header de toutes les requêtes jusqu'à la déconnexion.

Les entêtes retournées sont :

* [ReturnType](#returntype) : toujours égal à Identification,
* [ConnectedUser](#connecteduser) : information sur l'utilisateur SIMAX utilisé,
* [CustomerInfos](#customerinfos) (si fourni dans l'entête),
* [ConnectedExtranet](#connectedextranet) (si authentification extranet),
* [SessionLanguageCode](#sessionlanguagecode)


Si l'identification échoue, une erreur d'identification est retournée. Les erreurs possibles sont :

* [UTIL_NONRESOLU](#erreur_util_non_resolu) : le pseudo fourni n'a pas permis de retrouvé l'utilisateur
* [UTIL_TROPCHOIX](#erreur_util_tropchoix) : le pseudo fourni correspond à plus d'un utilisateur
* [UTIL_INCONNU](#erreur_util_inconnu) : l'identifiant d'utilisateur fourni est inconnu
* [UTIL_PASSERRINTRA](#erreur_util_passerrintra) : le mot de passe intranet est incorrect
* [UTIL_FORM_NONAUTORISE](#erreur_util_form_nonautorise) : le formulaire n'est pas configuré pour l'extranet
* [UTIL_NONAUTORISE](#erreur_util_nonautorise) : l'utilisateur n'est pas autorisé à se connecter

D'autres erreurs ayant traits à la sécurité peuvent être retournées (configuration de NOUTOnline) :

* [APPLI_NONAUTORISE](#erreur_appli_nonautorise) : l'application n'est pas autorisée à se connecter
* [SOAP_DESACTIVE](#erreur_soap_desactive) : le protocole SOAP est désactivé
* [EXTRANET_NONACTIVE](#erreur_extranet_nonactive) : l'extranet est désactivé
* [CONNEXION_NONAUTORISE](#erreur_connexion_nonautorise) : les connexions ne sont pas autorisées


#### Mode Extranet

> Requête SOAP (extranet)

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
        <OptionDialogue>
            <Readable>0</Readable>
            <DisplayValue>16638</DisplayValue>
            <EncodingOutput>0</EncodingOutput>
            <LanguageCode>12</LanguageCode>
            <WithFieldStateControl>1</WithFieldStateControl>
        </OptionDialogue>
        <APIUUID/>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <GetTokenSession xmlns="http://www.nout.fr/wsdl/SimaxService.wsdl/">
            <UsernameToken>
	            <Username>extranet authentifié</Username>
	            <Password>3380nSjvFIiiLRX9zFmNIcLHmGE=</Password>
	            <Nonce>MC42NDE2OTQwMCAxNTAwOTEwMjM4</Nonce>
	            <Created>Mon, 24 Jul 2017 17:30:38 +0200</Created>
            </UsernameToken>
            <ExtranetUser>
	            <UsernameToken>
					<Username>conan2</Username>
					<Password>nGyVm65soPgm9W7VXUJnJfT2e1s=</Password>
					<Nonce>MC42NDE3NjMwMCAxNTAwOTEwMjM4</Nonce>
					<Created>Mon, 24 Jul 2017 17:30:38 +0200</Created>
	            </UsernameToken>
                <Form>224661136955914</Form>
            </ExtranetUser>
        </GetTokenSession>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```


Pour une identification en mode extranet, l'identifiant et le mot de passe récoltés permettent de calculer le 
`<UsernameToken>` fils de `<ExtranetUser>`.

Le paramètre `<Form>` contient l'identifiant ou le libellé du formulaire qui contient les éléments sur lequel se fait 
l'extranet (exemple: client professionnel).

Le paramètre `<UsernameToken>` (fils de la balise `<GetTokenSession>`) est calculé à partir de l'identifiant et 
du mot de passe de l'utilisateur SIMAX auquel est associé l'extranet et qui donne les droits d'accès.

Ces dernières informations (formulaire, identifiant, mot de passe) peuvent être stockées 
dans un fichier de configuration.

