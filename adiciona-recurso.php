<?php

require_once 'classes/Usuario.php';
require_once 'classes/Recurso.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = 'algumacoisa'; //esse e-mail vai ser identificado após analisar o Session
$usuario = new Usuario($email);

$recurso = new Recurso();

$recurso->autoDeInfracao = $_POST['numero_infracao'];
$recurso->usuario = $usuario;
$recurso->cnh = $_POST['cnh'];