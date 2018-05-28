<?php

require_once 'classes/Usuario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$arquivoIdentidade = $_FILES['identidade'];
$nomeIdentidade = $arquivoIdentidade['name'];
var_dump($arquivoIdentidade); 
//echo sys_get_temp_dir();

//move_uploaded_file($nomeIdentidade, 'imagens/');

/*$usuario = new Usuario();

$usario->nome = $_POST['nome'];
$usario->rg = $_POST['rg'];
$usario->cpf = $_POST['cpf'];
$usario->endereco = $_POST['endereco'];
$usario->senha = $_POST['senha'];
$usario->email = $_POST['email'];
$usario->identidade_nome_arqui = $_POST['identidade'];*/