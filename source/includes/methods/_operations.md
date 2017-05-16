# Documentation de l'API

## Opérations NOUTOnline

#### Opérations d'utilisation générale

Opérations | Usage
-----------| -----
[Disconnect](#disconnect) | Fermeture de la session
[GetLanguages](#getlanguages) | Récupération de la liste des langues disponibles dans le paramétrage
[GetTokenSession](#gettokensession) | Ouverture d'une session sécurisée
[GetTableChild](#gettablechild) | Récupération des formulaire fils d'un autre formulaire
[ResetPasswordFailed](#resetpasswordfailed) | Régénérer un mot de passe pour résoudre un problème de de perte de mto de passe

#### Opérations de départ d'action

Ces méthodes s'appuie sur les actions paramétrées dans SIMAX. 

Opérations | Usage
-----------| -----
[Create](#create) | Créer un nouvel enregistrement
[CreateFrom](#createfrom) | Créer un nouvel enregistrement à partir d'un enregisrement d'origine
[Delete](#delete) | Créer un nouvel enregistrement à partir d'un enregisrement d'origine
[Display](#display) | Consulter un enregistrement
[Execute](#execute) | Exécuter une action à partir d'un identifiant ou d'une phrase
[Export](#export) | Action classique d'export sur un formulaire
[GetEndAutomatism](#getendautomatism) | Lancement des automatismes sur fermeture de session 
[GetStartAutomatism](#getstartautomatism) | Lancement des automatismes sur ouverture de session 
[GetTemporalAutomatism](#gettemporalautomatism) | Lancement des automatismes temporels pour la session 
[List](#list) | Lister des enregistrement
[Modify](#modify) | Ouvrir un enregistrement en modification
[Print](#print) | Imprimer un enregistrement
[Search](#search) | Rechercher des enregistrement
[TransformInto](#transforminto) | Transformer un enregistrement en un enregistrement d'un autre type (formulaire)


#### Opérations de récupération d'informations diverses

Opérations | Usage
-----------| -----
[GetCalculation](#getcalculation) | Récupèration des calculs et graphes de liste (v5)
[GetColInRecord](#getcolinrecord) | Récupéreration de la valeur d'une colonne d'un enregistrement 
[GetPlanningInfo](#getplanninginfo) | Récupèration des éléments de planning
[HasChanged](#hasChanged) | Demande si l'enregistrement a été modifié
[Request](#request) | Faire un requête sur un formulaire
[RequestParam](#requestparam) | Faire un requête sur un paramètre



#### Opérations de validation ou annulation

Opérations | Usage
-----------| -----
[Cancel](#cancel) | Annule l'action ou le contexte d'action en cours
[Update](#update) | Met à jour les valeurs courantes des colonnes d'un enregistrement
[Validate](#cancel) | Valide l'action en cours

#### Réponse à des questions intermédaires

Opérations | Usage
-----------| -----
[ConfirmResponse](#confirmresponse) | Répondre à une Message Box
[SelectForm](#selectform) | Sélectionner un formulaire en réponse à un retour Ambigus...
[SelectPrintTemplate](#selectform) | Sélectionner un modèle d'édition en réponse à un retour Ambigus...


