### ReturnType

```xml
<ReturnType>Record</ReturnType >
```

La valeur est une énumération qui permet de savoir quel type de réponse le service vient de renvoyer. Et ainsi savoir
comment lire le contenu du Body.

Les valeurs possibles sont :

Valeur | Description  
-------|-------------
**Générique** |
Empty | Réponse vide 
Report | Compte rendu d'une action 
Value | Réponse avec une valeur
Record | Description d'un enregistrement
List | Description d'une liste d'enregistrement
RequestFilter | Retour d'une liste initialisé à partir d'une requête de filtre
**Particulière** |
XSD | Le retour est un XSDSchema
Identification | Résultat de l'authentification ([GetTokenSession](#gettokensession))
Planning | Retour d'une requête de planning ([GetPlanningInfo](#getplanninginfo))
GlobalSearch | Retour de l'action de recherche globale
ListCalculation | Liste des calculs en bas de liste
**Intermédaire** |
AmbiguousAction | l'action est ambigüe, il faut choisir parmis les formulaires proposés
MessageBox | Une question à afficher à l'utilisateur
ValidateAction | Compléter ou valider les paramètres d'une action
ValidateEnreg | Erreur lors de la validation d'un enregistrement. L'erreur est dans le header [ValidateError](#validateerror)
PrintTemplate | Demande de choix de modèle d'édition
**Messagerie** |
MailServiceRecord | Enregistrement provenant de la messagerie
MailServiceList | Liste provenant de la messagerie
MailServiceStatus | Status de la messagerie
WithAutomaticResponse | Réponse au chech de réponse automatique