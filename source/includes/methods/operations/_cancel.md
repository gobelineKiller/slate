### Cancel


> Requête SOAP (qui annule le contexte en entier)

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <Cancel>
            <Context>1</Context>
        </Cancel>
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
        <CancelResponse />
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

Cette opération permet d'annuler l'action en cours ou le contexte d'action dans sa totalité.
Cette annulation peut engendrer l'annulation d'autres actions, vous serez alors avertit par une demande de confirmation d'annulation.
 
#### Requête

L'entête [ActionContext](#actioncontext) est obligatoire pour la simple raison qu'on ne précise pas l'action à annuler, 
c'est bien l'action en cours du contexte d'action qui sera annulée ou bien le contexte lui-même en fonction du paramètre [Context](#context).
Le paramètre [ByUser](#byuser) permet de savoir si c'est un clic utilisteur qui a engendré ce Cancel.

Les entêtes acceptées sont :

* [SessionToken](#sessiontoken),
* [UsernameToken](#usernametoken-ent-te),
* [ActionContext](#actioncontext)
* [CustomerInfos](#customerinfos) (facultatif),
* [OptionDialogue](#optiondialogue) (facultatif),
* [APIUUID](#apiuuid) (facultatif).
* [APIUser](#apiuser) (facultatif)

Les paramètres sont :

* `Context` (entier) indique si c'est uniquement la dernière action ou le contexte dans sa totalité qui doit être annulé :
  * 0 (valeur par défaut) annule uniquement la dernière action
  * 1 annule le contexte d'action dans sa totalité
* `ByUser` (entier) indique si l'annulation est une action utilisateur :
  * 0 l'annulation est d'origine logicielle (indépendante de l'utilisateur)
  * 1 l'annulation à pour origine l'utilisateur
  
#### Réponse

La réponse d'un ***Cancel*** est un message SOAP vide. En effet, une annulation ne peut pas déclencher d'automatismes ni d'action liées.

Cette opération a uniquement pour but de revenir en arrière ou d'annuler tout le dialogue en cours.

Les entêtes retournées sont :

* [ReturnType](#returntype) : toujours égal à Empty,
* [CustomerInfos](#customerinfos) (si fourni dans l'entête),
* [ActionContext](#actioncontext)
