### UsernameToken (entête)

L'entête `UsernameToken` fonctionne est le même que le [paramètre](#usernametoken) que pour la méthode [GetTokenSession](#gettokensession).

Les balises `Nonce` et `Created` doivent être régénérer à chaque requête (ce qui implique que `Password` doit être aussi recalculé). 