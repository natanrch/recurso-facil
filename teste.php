<?php

echo 'funciona';
require_once 'classes/Recurso.php';
require_once 'classes/Usuario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = 1;

$recurso = new Recurso($id);
var_dump($recurso);


//$usuario = new Usuario('div@email.com');
