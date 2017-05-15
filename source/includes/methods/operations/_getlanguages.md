## GetLanguages


> Requête SOAP

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <GetLanguages/>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

> Reponse SOAP

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <GetLanguagesResponse>
	        <xml>
		        <LanguageCode>9</LanguageCode>
		        <LanguageCode>12</LanguageCode>
	        </xml>
        </GetLanguagesResponse>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```


Cette opération permet de récupérer la liste des langues disponibles dans le paramétrage SIMAX lié au NOUTOnline utilisé.

### Requête

Cette méthode ne requiert aucune authentification, ni aucun paramètre.
Vous pouvez l'appeler juste avant d'afficher la fenêtre de login et mot de passe afin que l'utilisateur choisisse sa langue.


Les entêtes acceptées sont :

* [CustomerInfos](#customerinfos) (facultatif),
* [OptionDialogue](#optiondialogue) (facultatif),
* [APIUUID](#apiuuid) (facultatif).

Il n'a pas de paramètres.

### Réponse

NOUTonline renvoie la liste des langues disponibles dans des balises `<LanguageCode>`

Les valeurs possibles sont :

* 9 : anglais
* 10 : espagnol
* 12 : français 


Les entêtes retournées sont :

* [ReturnType](#returntype) : toujours égal à Identification,
* [CustomerInfos](#customerinfos) (si fourni dans l'entête),