
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


##Concepts clés

Le dialogue commence toujours par une ouverture de session sécurisée avec l'appel de la méthode [GetTokenSession](#gettokensession)
qui renvoi un jeton de session à fournir dans chaque requête. La session reste ouverte jusqu'à l'appel de la méthode 
[Disconnect](#disconnect) ou jusqu'à la fin du timeout de session.

Chaque requête va ensuite être associée à un contexte d'action (ou contexte d'exécution).
La réponse de NOUTOnline à la première requête du client fournira l'identifiant du contexte
d'action créé pour ce dialogue. Ce même identifiant devra être fournit dans chaque Header des
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

A tout moment NOUTOnline peut être amené à demander des informations
complémentaires (ex : champs obligatoires non remplis) ou des confirmations (ex : « voulez-vous
vraiment supprimer cet élément ? ») pour exécuter vos requêtes. Des cycles « question de
NOUTOnline/réponse du client » supplémentaires peuvent donc s'ajouter au schéma vu
précédemment.

Par défaut, NOUTOnline renvoie dans le header de ses réponses SOAP le XSD décrivant la
structure des données du XML présent dans le body. Pour des questions de rapidité, vous pouvez
demander à NOUTOnline de ne pas vous envoyer ce XSD (cf [ReturnXD](#returnxsd)) .

Les méthodes [Create](#create) (création), [Modify](#modify) (modification), [Delete](#delete) (suppression),
[Display](#display) (lecture), [List](#list) (liste), [Search](#search) (recherche) et [Execute](#execute) (éxécution)
sont des méthodes qui sont basées sur les actions paramétrées dans SIMAX, les paramètres à fournir dans les requêtes 
SOAP correspondent donc aux paramètres définis dans les actions du paramétrage SIMAX.



