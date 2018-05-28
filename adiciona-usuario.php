<?php

require_once 'classes/Usuario.php';

$usuario = new Usuario();

$usario->nome = $_POST['nome'];
$usario->rg = $_POST['rg'];
$usario->cpf = $_POST['cpf'];