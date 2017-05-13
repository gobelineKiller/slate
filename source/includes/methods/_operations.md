# Opérations NOUTOnline

## GetTokenSession


> Requête SOAP

```xml
<env:Body>
<GetTokenSession>
<wsse:UsernameToken>
<wsse:Username>Web</wsse:Username>
<wsse:Password Type="wsse:PasswordDigest">7eAHpM56Q...=</wsse:Password>
<wsse:Nonce>147852369azerty</wsse:Nonce>
<wsse:Created>2008-06-18T17:13:00</wsse:Created>
</wsse:UsernameToken>
<simax:ExtranetUser>
<wsse:UsernameToken>
<wsse:Username>Ninon</wsse:Username>
<wsse:Password Type="wsse:PasswordDigest">7eAHpM56Q...=</wsse:Password>
<wsse:Nonce>147852369azerty</wsse:Nonce>
<wsse:Created>2008-06-18T17:13:00</wsse:Created>
</wsse:UsernameToken>
<Form>Client</Form>
</simax:ExtranetUser>
<simax:DefaultClientLanguageCode>0</simax:DefaultClientLanguageCode>
</GetTokenSession>
</env:Body>
```

> Requête REST

```http
http://noutonline:8052/GetTokenSession?
```

> Reponse SOAP

```xml
<env:Body>
<GetTokenSessionResponse>
<SessionToken>ba59ebec-fa07-44d3-56</SessionToken>
</GetTokenSessionResponse>
</env:Body>
```

Cette opération permet de s'authentifier auprès de NOUTOnline et de récupérer un token de session, 
à utiliser jusqu'à la déconnexion. C'est une étape obligatoire pour dialoguer avec NOUTOnline.

Cette fonction s'appuie sur les spécifications d'OASIS Web Service Security UserNameToken.

### Requête


Les entêtes acceptées sont :

* [CustomerInfos](#customerinfos) (facultatif),
* [OptionDialogue](#optiondialogue) (facultatif),
* [APIUUID](#apiuuid) (facultatif).

Les paramètres sont :

* [UsernameToken](#usernametoken) : Information de connexion de l'utilisateur SIMAX,
* [ExtranetUser](#extranetuser) : (facultatif) Information de connexion de l'utilisateur Extranet,
* [DefaultClientLanguageCode](#defaultclientlanguagecode) : (facultatif) code langue désiré si paramétrage multilangue.

### Réponse

NOUTOnline renvoit un token de session dans la balise `<SessionToken>`.
Le token retourné est à conserver car il permet d'identifier la session courante de l'utilisateur et il devra être 
ajouté dans le header de toutes les requêtes jusqu'à la déconnexion.

Les entêtes retournés sont :

* [ReturnType](#returntype) : toujours égal à Identification,
* [ConnectedUser](#connecteduser) : information sur l'utilisateur SIMAX utilisé,
* [CustomerInfos](#customerinfos) (si fourni dans l'entête),
* [ConnectedExtranet](#connectedextranet) (si authentification extranet),
* [SessionLanguageCode](#sessionlanguagecode)
