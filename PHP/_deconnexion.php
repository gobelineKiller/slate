<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 25/07/2017
 * Time: 14:44
 */


//-------------------------------------------------------------
//ETAPE de DECONNEXION

$oSOAPClient->setSoapHeaderActionContext(null);
$oSOAPClient->setSoapHeaderAutoValidate(null);


$result = $oSOAPClient->Disconnect(null);
$oSOAPClient->log('Disconnect');