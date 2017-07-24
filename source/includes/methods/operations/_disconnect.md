### Disconnect


> Requête SOAP

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
        <SessionToken>7cec0345-3abb-4353-bfb9-aacc143a2d05</SessionToken>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <Disconnect xmlns="http://www.nout.fr/wsdl/SimaxService.wsdl/" />
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

> Réponse SOAP

```xml
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
                   xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                   xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/">
    <SOAP-ENV:Header>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <DisconnectResponse />
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
```

Cette méthode permet de fermer la session ouverte par [GetTokenSession](#gettokensession). Elle ne prend aucun paramètre.