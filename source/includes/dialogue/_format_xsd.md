## Format XSD-SIMAX

### Qu'est-ce XSD et le format XSD-SIMAX ?

Un **schéma XML** ou **XSD** est un standard permettant de décrire la structure d'un document
XML. XSD définit de façon structurée le type de contenu, la syntaxe et la sémantique d'un
document XML. Il est également utilisé pour valider un document XML, c'est à dire vérifier si le
document XML respecte les règles décrites dans le document XSD. Contrairement à la norme DTD,
XSD respecte le format XML. 

Le standard XSD a été approuvé par le W3C : 

* [XML Schema Part 0: Primer Second Edition](http://www.w3.org/TR/xmlschema-0/)
* [XML Schema Part 1: Structures Second Edition](http://www.w3.org/TR/xmlschema-1/)
* [XML Schema Part 2: Datatypes Second Edition](http://www.w3.org/TR/xmlschema-2/)

Pour plus d'informations générales sur les éléments et attributs du XSD, consultez 
[XML Schemas (XSD) Reference](http://msdn.microsoft.com/en-us/library/ms256235.aspx) sur MSDN.

Le format **XSD-SIMAX**, en particulier, est le format utilisé par NOUTOnline dans les réponses SOAP
pour décrire la structure des données telles qu'elles sont dans le paramétrage SIMAX.

Ce format doit être connu par tous les client NOUTOnline pour être capable d'afficher un
enregistrement tel qu'il est décrit dans le XSD.

Le format XSD-SIMAX se base sur les spécifications XML Schema du W3C mais des attributs
et des notations supplémentaires ont été ajoutés dans l'espace de nom simax.

### Description d'un enregistrement

> Exemple de description d'un enregistrement

```xml
<?simax version="1.1"?> 
<xs:schema VERSION="1" VERSION_LECTECRIT="1" VERSION_LECTURE="1" DATEHEURE="2008053007263421" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:simax="http://www.nout.fr/XMLSchema">
	<xs:element name="contact_client" simax:name="Contact client">
		<xs:complexType>
			<xs:sequence>
				.... description des colonnes
			</xs:sequence>
		</xs:complexType>
	</xs:element>
</xs:schema>
```

Un enregistrement est décrit par une balise `<element>` de type `<complexType>`. C'est à
dire qu'un enregistrement est un type complexe qui contient un élément par colonne.

### Description d'une liste d'enregistrement


> Exemple de description d'une liste d'enregistrement

```xml
<xs:element xs:name="id_3017" simax:name="Tâche (Liste)" simax:withGhost="1">
	<xs:complexType>
		<xs:sequence>
			...
		</xs:sequence>
	</xs:complexType>
</xs:element>
```

Quand le service renvoie une liste d'enregistrement, le XSD contient la description d'un élément de la liste.

Dans la balise `<element>`, l'attribut `withGhost="1"` indique que les éléments de la liste ont
une colonne invalide et donc qu'on peut ajouter un bouton pour filtrer sur les invalides.

### Description des colonnes

> Exemple de description d'une colonne

```xml
<xs:element xs:name="contact_professionnel" simax:name="Contact professionnel" simax:typeElement="simax-element" />
```

Chaque colonne est décrite comme ceci :

* balise `<xs:element>`
* attribut `xs:name` dont la valeur est le libellé de la colonne transformé pour être utilisé dans la balise XML correspondante et pour respecter les standards XML.
* attribut `simax:name`  dont la valeur est le libellé de la colonne dans le paramétrage SIMAX.
* attribut `type` pour indiquer le type de colonne (voir tableau ci-dessous).
* liste d'attributs pour décrire cette colonne en particulier

Type SIMAX | Type XSD-SIMAX
-----------|---------------
Texte | xs:string (avec restriction)
Texte long | xs:string (sans restriction)
Entier | xs:integer
Réel | xs:float
Monétaire | xs:decimal
Date | xs:date
Heure | xs:time
Date Heure | xs:datetime
Vrai / Faux | xs:boolean
Identifiant | xs:unsignedLong
Fichier | xs:base64Binary
Liste déroulante | simax-choice
Elément de tableau | simax-element
Liste d'élément | simax-list
Bouton | simax-button
Séparateur | simax-section
Durée | simax-duration
Calcul automatique | simax-autocomputed

### Attributs possibles


#### Attributs communs à toutes les colonnes

Nom | Description | Valeur par défault
----|-------------|-------------------
detail | 1 si visible en mode détail uniquement | 0
print | 1 si marqué comme imprimable | 0
computed | 1 si calcul recalculé | 0
sort | 1 si on peut trier sur cette colonne | 0
hidden | 1 si la colonne est invisible | 0
readonly | 1 si la colonne est en lecture seule | 0
link | 1 si la modification peut déclencher des mises à jour d'autres colonnes | 0
linkControl | 1 si la modification peut modifier l'etat d'autres colonnes | 0
textBoxSize | nombre de caractères autorisés dans le champ | 


#### Attributs pour les éléments d'un tableau


Nom | Description | Valeur par défault
----|-------------|-------------------
linkedTableXML | Libellé XML du formulaire lié |
linkedTableID | Identifiant SIMAX du formulaire lié |
withModifyAndRemove | 1 si c'est une relation 1-1 | 0
withoutDetail | 1 si interdiction de consulter | 0
withoutSearch | 1 si interdiction de rechercher | 0
withoutCreate | 1 si interdiction de créer | 0
resource | 1 si l'élément est fils de planification de ressource et donc peut être affichée dans un planning | 0

#### Attributs pour les colonnes liste

Nom | Description | Valeur par défault
----|-------------|-------------------
linkedTableXML | Libellé XML du formulaire lié |
linkedTableID | Identifiant SIMAX du formulaire lié |
withAddAndRemove | 1 si c'est un groupe de relation | 0


#### Attributs pour les boutons

<table><thead><tr><th>Nom</th><th>Description</th><th>Valeur par défault</th></thead>
<tbody>
<tr><td>idAction</td><td>Identifiant de l'action du bouton</td><td>0</td></tr>
<tr><td>withValidation</td><td>1 si l'enregistrement courant à besoin d'être validé avant de déclencher l'action</td><td>0</td></tr>
<tr>
	<td>actionType</td>
	<td>Type de l'action parmis les valeurs suivantes : <ul style="margin-top: 0">
		<li>Ajouter</li> 
		<li>Créer</li>
		<li>Détail</li> 
		<li>Modifier</li>  
		<li>Supprimer</li> 
		<li>Enlever</li>
		<li>Imprimer</li>
	</ul>
	</td>
	<td>0</td>
</tr>
<tr>
	<td>typeSelection</td>
	<td>
		<dl>
			<dt>0</dt><dd>aucune sélection nécessaire</dd>
			<dt>1</dt><dd>mono-sélection demandée</dd>
			<dt>multi</dt><dd>sélection multiple autorisée au moins 1 nécessaire</dd>
		</dl>
	</td>
	<td></td>
</tr>
</tbody>
</table>

#### Attributs pour les séparateurs

> Exemple d'une section

```xml
<xs:element xs:name="general" simax:name="Général" simax:typeElement="simax-section">
	<xs:complexType>
		<xs:sequence>
			<xs:element xs:name="nom" simax:name="Nom" />
			<xs:element xs:name="prenom" simax:name="Prénom" />
		</xs:sequence>
	</xs:complexType>
</xs:element>
```

L'élément séparateur est décrit comme un `<complexType>` avec une liste de colonne à l'intérieur, de
la même manière que l'enregistrement.


<table><thead><tr><th>Nom</th><th>Description</th><th>Valeur par défault</th></thead>
<tbody>
<tr><td>icon</td><td>Identifiant de l'icône du séparateur</td><td></td></tr>
<tr><td>sectionComputed</td><td>1 si le séparateur contient des calculs de fin de ligne (tableau croisé)</td><td>0</td></tr>
<tr>
	<td>sectionLevel</td>
	<td>
		<dl class="number">
			<dt>1</dt><dd>séparateur principal (onglet)</dd>
			<dt>2</dt><dd>séparateur secondaire</dd>
			<dt>3</dt><dd>séquence de de champs</dd>
		</dl>
	</td>
	<td></td>
</tr>
<tr>
	<td>multicolonne</td>
	<td>
		<dl class="number">
			<dt>1</dt><dd>pas de multicolonne</dd>
			<dt>2</dt><dd>sur 2 colonnes</dd>
			<dt>3</dt><dd>sur 3 colonnes</dd>
			<dt>4</dt><dd>sur 4 colonnes</dd>
			<dt>5</dt><dd>sur 5 colonnes</dd>
		</dl>
	</td>
	<td></td>
</tr>
<tr>
	<td>direction</td>
	<td>
		<dl class="number">
			<dt>1</dt><dd>multicolonne horizontal</dd>
			<dt>2</dt><dd>multicolonne vertical</dd>
		</dl>
	</td>
	<td></td>
</tr>
</tbody>
</table>

#### Attributs pour une liste déroulante

> Exemple de liste déroulante à 4 choix

```xml
<xs:element xs:name="type" simax:name="Type" simax:typeElement="simax-choice">
	<xs:simpleType>
		<xs:restriction xs:base="xs:string">
			<xs:enumeration xs:value="Type 1" xs:id="1" icon="453"/>
			<xs:enumeration xs:value="Type 2" xs:id="2" icon="465"/>
			<xs:enumeration xs:value="Type 3" xs:id="3" icon="984"/>
			<xs:enumeration xs:value="Type 4" xs:id="4" icon="246"/>
		</xs:restriction>
	</xs:simpleType>
</xs:element>
```

Une liste déroulante est un `<xs:simpleType>` avec une énumération `<xs:enumeration>` comme restriction.

Nom | Description 
----|-------------
value | Libellé du choix
id | Identifiant SIMAX du choix
icon | Identifant SIMAX de l'icône SIMAX du choix

#### Attributs liés au modèle de la colonne


<table><thead><tr><th>Nom</th><th>Description</th><th>Valeur par défault</th></thead>
<tbody>
<tr><td>phoneNumber</td><td>1 si la colonne est un numéro de téléphone</td><td>0</td></tr>
<tr><td>directory</td><td>1 si la colonne est un répertoire ou un chemin de fichier complet</td><td>0</td></tr>
<tr><td>postalCode</td><td>1 si la colonne est un code postal</td><td>0</td></tr>
<tr><td>city</td><td>1 si la colonne est une ville</td><td>0</td></tr>
<tr><td>inputMask</td><td>masque de saisie pour les réels et les monétaires</td><td></td></tr>
<tr>
	<td>transform</td>
	<td>
		<dl>
			<dt>url</dt><dd>site web, adresse email, url</dd>
			<dt>uppercase</dt><dd>tout en majuscule</dd>
			<dt>firstUppercase</dt><dd>première lettre en majuscule</dd>
			<dt>colorRGB</dt><dd>couleur</dd>
			<dt>secret</dt><dd>mot de passe, masquer l'information</dd>
		</dl>
	</td>
	<td></td>
</tr>
</tbody>
</table>

