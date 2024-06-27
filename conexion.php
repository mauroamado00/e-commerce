<?php

function connection(){

try { 

    $host = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd = 'e-comerce';
    $puerto = 3306;
    $msqli = new msqli($host, $usuario, $password, $bd, $puerto);
    return $msqli;
}catch (exception $e){

    $error = $e->getmessage();
    echo $error;
}

}

?>