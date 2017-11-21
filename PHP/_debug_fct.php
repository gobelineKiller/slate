<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 21/11/2017
 * Time: 09:35
 */

function debug_log($titre, $message)
{
    echo "<h1>$titre</h1>";
    echo "<pre style=\"border: solid 1px red;\">";
    echo $message;
    echo "</pre>";
}