### UsernameToken

```xml
<UsernameToken>
	<Username>Web</Username>
	<Password Type="wsse:PasswordDigest">7eAHpM56Q...=</Password>
	<Nonce>147852369azerty</Nonce>
	<Created>2008-06-18T17:13:00</Created>
</UsernameToken>
```

> Calcul du mot de passe

```php
$secret = !empty($password) ? base64_encode(md5($password, true)) : 'AAAAAAAAAAAAAAAAAAAAAA==';
$encoded = base64_encode(sha1($nonce.$created.$secret, true));
```

Ce paramètre permet de renseigner les informations nécessaire à l'identification suivant le standart [OASIS WS-Security 1.1](https://www.oasis-open.org/committees/download.php/16790/wss-v1.1-spec-os-SOAPMessageSecurity.pdf).
La balise se décompose de la manière suivante :
 
* `Username` : identifiant SIMAX
* `Password` : mot de passe encodé
* `Nonce` : chaîne générée de manière aléatoire
* `Created` : date et heure de création du `Nonce`

<aside class="notice">
Rappel : Le mode de passe s'encode de la manière suivante (OASIS) :<br>
<code>
secret = Base64(MD5 (mot de passe en clair du compte ))<br>
password = Base64(SHA-1 (nonce + created + secret))
</code>
</aside>

<aside class="notice">
Cas particulier : si le mot de passe est vide, le MD5 est composé de 16 octets null. En base 64 cela donne
<code>AAAAAAAAAAAAAAAAAAAAA===</code>
</aside>

Les informations dans le `UsernameToken` doivent être conformes au standart OASIS excepté pour l'information de session propre à SIMAX.

