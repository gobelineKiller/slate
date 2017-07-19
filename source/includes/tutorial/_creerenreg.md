##Créer un enregistrement

La création d'un enregistrement se fait en 3 (ou 4) étapes :

1. l'initialisation de l'action,
2. la sélection du formulaire réel (si le formulaire en paramètre à des fils) ; cette étape dépend du paramétrage,
3. l'envoi des données,
4. la validation

### 1. Initialisation de l'action

L'initialisation de l'action se fait via l'opération [Create](#create). Cette opération prend en paramètre l'identifiant du formulaire à créer.

Si le formulaire donné en paramètre à des fils, alors le serveur renvoi une question intermédiaire ([ReturnType](#returntype) ***AmbiguousAction***).
 Il s'agit de la liste des formulaires possible pour la création ; cette liste se parse de la même manière qu'un [ReturnType](#returntype) ***List***.
 Voir l'étape 2 pour la réponse à faire pour finir l'initialisation de l'action.

Le serveur renvoi la description de l'enregistrement ([ReturnType](#returntype) ***Record***). Les informations à traiter dans le Header sont :

* [ActionContext](#actioncontext) : nécessaire pour toutes les étapes suivantes
* [Form](#form) : le formulaire courant (identifiant et libellé)
* [Element](#element) : l'élément courant (identifiant et libellé)
* [XSDSchema](#xsdschema) : la description de la structure de l'élément ; les valeurs sont dans le xml contentu dans le Body de la réponse

Il y a aussi :

* [Action](#action) : l'action courante (identifiant et libellé)

### 2. Sélection du formulaire réel

> Requête SOAP

```xml
<SOAP-ENV:Envelope
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
    xmlns:ns0="http://www.nout.fr/wsdl/SimaxService.wsdl/">
    <SOAP-ENV:Header>
        <ns0:UsernameToken>...</ns0:UsernameToken>
        <ns0:SessionToken>...</ns0:SessionToken>
        <ns0:ActionContext>[identifiant de contexte retourné à l'étape 1]</ns0:ActionContext>
        <ns0:OptionDialogue>...</ns0:OptionDialogue>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <ns0:SelectForm>
            <ns0:Form>2568</ns0:Form>
        </ns0:SelectForm>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

Cette étape est nécessaire quand le serveur renvoi un [ReturnType](#returntype) ***AmbiguousAction*** (uniquement si le formulaire demandé à des fils). Il faut 
utiliser l'opération [SelectForm](#selectform) pour répondre. Cette opération prend en paramètre `Form`, l'identifiant du formulaire choisi par l'utilisateur parmis
ceux proposé dans la réponse du serveur.

### 3. Envoi des données


### 4. Validation


