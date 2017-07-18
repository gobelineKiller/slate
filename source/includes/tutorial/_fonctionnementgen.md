# Comment utiliser le webservice de NOUTOnline

## Fonctionnement général

Toutes les actions de manipulations de données se sont font pendant une session authentifiée. 
Cette dernière est [ouverte](#gettokensession) au début avant les manipulations et [fermée](#disconnect) à la fin des manipulations.

Il y a 2 utilisateurs dans une session :
* L'utilisateur qui rentre ses informations de connexion sur la page de connexion
* L'utilisateur de l'application qui est configuré dans NOUTOnline. Lorsque que l'application fait une action qui a besoin de droit supérieur à l'utilisateur connecté (exemple : récupération des icones du menu), elle utilise l'entête [APIUser](#apiuser) pour indiquer que l'action est faite par l'application et non pas par l'utilisateur.

Afin de sécurisé le service, il est possible de filtrer les applications qui y accèdent. Ces dernières doivent alors ajouter l'entête [APIUUID](#apiuuid) avec l'identifiant qui leur a été attribuée.

L'ensemble des actions sont regroupés en ***contexte d'action*** quand les actions ont un lien entre elles. Par exemple : les actions de création d'une commande et de ses lignes de commandes apartiennent au même contexte.

Après la phase [d'idenfication](#gettokensession), le [UsernameToken](#usernametoken-ent-te) de l'utilisateur SIMAX doit être recalculé et insérer dans le header SOAP à chaque requête.

Il est recommander d'utiliser les identifiants numérique dans le dialogue SOAP car cela garantie l'exactitude de la recherche des éléments (voir [la documenation du XML et du XSD](#format-xsd-simax)).

L'entête [OptionDialogue](#optiondialogue) permet de configurer le dialogue avec NOUTOnline.


###Entêtes HTTP nécessaire à ajouter

Il faut ajouter l'obligatoirement 3 entêtes HTTP aux requêtes SOAP :

* `x-SIMAXService-Client` : Le nom du client qui execute la requête
* `x-SIMAXService-Client-IP` : L'adresse IP de l'utilisateur final. Cette entête est obligatoire.
* `x-SIMAXService-Client-Version` : La version du client qui execute la requête