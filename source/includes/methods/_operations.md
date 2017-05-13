# Opérations NOUTOnline

## GetTokenSession

Cette opération permet de s'authentifier auprès de NOUTOnline et de récupérer un token de session, 
à utiliser jusqu'à la déconnexion. C'est une étape obligatoire pour dialoguer avec NOUTOnline.

Cette fonction s'appuie sur les spécifications d'OASIS Web Service Security UserNameToken.

### Requête

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

Les entêtes acceptées sont :

* [CustomerInfos](#customerinfos),
* [OptionDialogue](#optiondialogue),
* [APIUUID](#apiuuid)

Les paramètres sont :

* [UsernameToken](#usernametoken) : Information de connexion de l'utilisateur SIMAX,
* [ExtranetUser](#extranetuser) : (facultatif) Information de connexion de l'utilisateur Extranet,
* [DefaultClientLanguageCode](#defaultclientlanguagecode) : (facultatif) code langue désiré si paramétrage multilangue.


