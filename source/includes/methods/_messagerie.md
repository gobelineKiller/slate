
## Opérations de gestion de la messagerie



#### Opérations diverses

Opérations | Usage
-----------| -----
[GetMailServiceStatus](#getmailservicestatus) | Récupère l'état de la messagerie
[InitRecordFromAddress](#initrecordfromaddress) | Initialise un enregistrement à partir d'une adresse email
[InitRecordFromMessage](#initrecordfrommessage) | Initialise un enregistrement à partir d'un message


#### Opérations sur les messages

Opérations | Usage
-----------| -----
[AddPJ](#addpj) | Ajouter une pièce jointe au message en cours de création
[CancelMessage](#cancelmessage) | Annuler la modification ou création d'un message
[CheckCreateElement](#checkcreateelement) | Demande si la création du message va créer des éléments liés
[CheckRecipient](#checkrecipient) | Vérifie les destinataires du message
[CloseMessageList](#closemessagelist) | Ferme la liste de messages
[CreateMessage](#createmessage) | Ouvre un message en création
[DeletePJ](#deletepj) | Supprime une pièce jointe du message en cours de création
[GetPJ](#getpj) | Récupère le contenu d'une pièce jointe
[ModifyMessage](#modifymessage) | Ouvre un message en modification (pour changer son état)
[RequestMessage](#requestmessage) | Fait une requête sur les messages
[SendMessage](#sendmessage) | Envoi le message en création, Valide le message en modification
[UpdateMessage](#updatemessage) | Met à jour les informations du message
[WithAutomaticResponse](#withautomaicresponse) | Demande si une réponse automatique est démandée et l'envoyer si nécessaire
[ZipPJ](#zippj) | Compresse les pièces jointes d'un message en un zip

#### Opérations sur les dossiers

Opérations | Usage
-----------| -----
[CancelFolder](#cancelfolder) | Annuler la modification ou création d'un dossier
[CloseFolderList](#closefolderlist) | Ferme la liste des dossiers
[CreateFolder](#createFolder) | Ouvre un dossier en création
[DeleteFolder](#deleteFolder) | Supprime un dossier
[GetContentFolder](#getcontentfolder) | Récupère la liste des messages contenu dans un dossier
[GetFolderList](#getfolderlist) | Liste les dossiers
[ModifyFolder](#modifyfolder) | Ouvre un dossier en modification
[UpdateFolder](#updatefolder) | Met à jour les informations du dossier
[ValidateFolder](#validatefolder) | Valide les modifications du dossier