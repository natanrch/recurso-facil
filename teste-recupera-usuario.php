<?php

require_once 'classes/Usuario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = 'div@email.com';

$usuario = new Usuario()

$usuario->carregar($email);

//var_dump($usuario);

echo $usuario->email;
echo '<br>';
echo $usuario->senha;
