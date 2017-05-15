
# Dialoguer avec NOUTOnline

## Présentation de NOUTOnline

NOUTOnline est un programme serveur de SIMAX avec lequel on peut communiquer via les
protocoles SOAP et REST. Ces deux protocoles doivent respecter les normes SIMAX, c'est à dire
envoyer des requêtes telles qu'elles sont décrites dans la documentation.

Grâce aux formats SOAP-SIMAX et REST-SIMAX vous avez la possibilité de développer votre
propre client NOUTOnline. 


## Schéma d'échanges entre un client et NOUTOnline

<div class="timeline">
    <ul>
        <li>
            <h4>GetTokenSession</h4>
            <ul class="data-exchanged">
                <li>Identifiant</li>
                <li>Mot de passe</li>
            </ul>
        </li>
        <li>
            <h4>Identification </h4>
            <p>Ouverture de session</p>
            <ul class="data-exchanged">
                <li>Jeton de session</li>
            </ul>
        </li>
        <li>
            <h4>Create</h4>
            <ul class="data-exchanged">
                <li>Formulaire</li>
            </ul>
        </li>
        <li>
            <h4>Record</h4>
            <p>
            Ouverture d'un contexte d'action<br>
            Initialisation d'un nouvel enregistrement avec valeurs par défaut
            </p>
            <ul class="data-exchanged">
                <li>XML / XSD</li>
                <li>Identifiant du contexte</li>
            </ul>
        </li>
        <li>
            <h4>Update</h4>
            <ul class="data-exchanged">
                <li>XML modifié</li>
                <li>Identifiant du contexte</li>
            </ul>
        </li>
        <li>
            <h4>Record</h4>
            <p>Mise à jour des valeurs</p>
            <ul class="data-exchanged">
                <li>XML mis à jour</li>
                <li>Identifiant du contexte</li>
            </ul>
        </li>
        <li>
            <h4>Validate</h4>
            <ul class="data-exchanged">
                <li>XML modifié</li>
                <li>Identifiant du contexte</li>
            </ul>
        </li>
        <li>
            <h4>Report</h4>
            <p>Enregistrement dans la base de données<br>
            Fermeture du contexte d'action</p>
            <ul class="data-exchanged">
                <li>CR</li>
            </ul>
        </li>
        <li>
            <h4>Disconnect</h4>
        </li>
        <li>
            <h4>Empty</h4>
            <p>Fermeture de la session</p>
        </li>
    </ul>
</div>


## Concepts clés

Le dialogue commence toujours par une ouverture de session sécurisée avec l'appel de la méthode [GetTokenSession](#gettokensession)
qui renvoi un jeton de session à fournir dans chaque requête. La session reste ouverte jusqu'à l'appel de la méthode 
[Disconnect](#disconnect) ou jusqu'à la fin du **timeout** de session.

Chaque requête va ensuite être associée à un **contexte d'action** (ou contexte d'exécution).
La réponse de NOUTOnline à la première requête du client fournira **l'identifiant du contexte
d'action** créé pour ce dialogue. Ce même identifiant devra être fournit dans chaque Header des
requêtes SOAP qui suivent car il permet alors de faire le lien entre les requêtes et les réponses de
ce même dialogue.

Dans le schéma du paragraphe précédent, NOUTOnline sait quel enregistrement mettre à
jour à la réception de la requête [Update](#update) car le client lui a fournit l'identifiant du contexte d'action
créé lors de la création de l'enregistrement. Un contexte d'action correspond bien à un dialogue
complet entre le client et NOUTOnline.

L'appel à la méthode [Validate](#validate) permet d'envoyer les données à la base de données. Tous les
appels aux méthodes [Create](#create), [Modify](#modify), [Delete](#delete), etc... doivent se terminer par un validate pour que
ces actions soient effectivement exécutées dans la base de données ou par un [Cancel](#cancel) quand
l'action est finalement annulée. L'entête [AutoValidate](#autovalidate) permet de demander à NOUTOnline de faire
automatiquement un validate après le traitement de vos requêtes.

A tout moment NOUTOnline peut être amené à demander des **informations
complémentaires** (ex : champs obligatoires non remplis) ou des confirmations (ex : « voulez-vous
vraiment supprimer cet élément ? ») pour exécuter vos requêtes. Des cycles « question de
NOUTOnline/réponse du client » supplémentaires peuvent donc s'ajouter au schéma vu
précédemment.

Par défaut, NOUTOnline renvoie dans le **header** de ses réponses SOAP le **XSD** décrivant la
structure des données du XML présent dans le body. Pour des questions de rapidité, vous pouvez
demander à NOUTOnline de ne pas vous envoyer ce XSD (cf [OptionDialogue](#optiondialogue)) .

Les méthodes [Create](#create) (création), [Modify](#modify) (modification), [Delete](#delete) (suppression),
[Display](#display) (lecture), [List](#list) (liste), [Search](#search) (recherche) et [Execute](#execute) (éxécution)
sont des méthodes qui sont basées sur les actions paramétrées dans SIMAX, les *paramètres* à fournir dans les requêtes 
SOAP correspondent donc aux paramètres définis dans les actions du paramétrage SIMAX.

## Les formats de données

#### Les identifiants

Les identifiants doivent être dans un des formats suivants : 

* décimal 
* hexadécimal préfixé par 0x
* affichage préfixé par 0z 

Si l'identifiant doit être inséré en tant que nom de balise, il doit être préfixé par `id_` 

#### Les dates et heures

Les dates et heures, au format stocké, sont dans le format suivant :

* date et heure : `AAAAMMJJHHMMSS`, exemple pour le 25/11/2007 11:23:56, on aura 20071125112356
* date : `AAAAMMJJ`, exemple pour le 25/11/2007 on aura 20071125
* heure : `HHMMSS`, exemple pour 11:23:56, on aura 112356

#### Les couleurs

Les couleurs sont envoyées au format `BBVVRR` en valeurs hexadécimales. Exemple :

* FF0000 pour du bleu
* FFFFFF pour du blanc.

#### Les enregistrements

Les enregistrements peuvent être représentés par :
 
* leurs identifiants
* leurs titres (informations contenues dans les colonnes *repris dans l'intitulé*)

## Le protocole de dialogue

> Exemple d'entête HTTP

```http
POST / HTTP/1.1
Host: localhost:8052
Content-Length: 12458   
Content-Type:   application/soap+xml
x-SIMAXService-Client: ClientWeb
x-SIMAXService-Client-IP: 1.1.1.2
x-SIMAXService-Client-Version: 1.1
```

L'un des protocoles utilisés est le protocole [SOAP](https://fr.wikipedia.org/wiki/SOAP) en version 1.1 ou 1.2.
Notre dialogue SOAP défini ces propres entêtes et méthode qui sont documentés par cette présente documentation.

Les entêtes suivantes sont à ajouter obligatoirement aux entêtes HTTP :

* `x-SIMAXService-Client` le nom du client qui execute la requête
* `x-SIMAXService-Client-IP` l'adresse IP de l'utilisateur final. Cette entête est obligatoire.
* `x-SIMAXService-Client-Version` la version du client qui execute la requête

## Gestion des erreurs


Lorsqu'une erreur se produit, le détail de celle dernière est retourné.

#### Format SOAP

> Exemple d'erreur SOAP

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

Une erreur est composé d'un code d'erreur, lui même décompasable, d'un message d'erreur et de détail sur l'élément qui à produit l'erreur.

Une code d'erreur (sur 32 bits) se décompose de la manière suivante (poids fort vers poids faible):

* 6 bits : catégorie de l'erreur
* 3 bits : le niveau de l'erreur
* 2 bits : l'affichage recommandé pour le message
* 5 bits : la nature de l'erreur
* 6 bits : le numéro de l'erreur

Valeur|Niveau |Affichage|Catégorie
------|-------|---------|---------
0 | Aucun | Optionnel | Global
1 | Information | Obligatoire | Routage
2 | Ignorable | Impossible | Calcul
3 | Faible | | Formule
4 | Grave | | Passerelle
5 | Fatal | | IHM
6 | | | Action
7 | | | Max
8 | | | Réseaux
9 | | | Fichier
10 | | | Application
11 | | | DataSource
12 | | | SIMAXService
13 | | | Publication
14 | | | Session
15 | | | Requête