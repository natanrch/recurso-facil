<?php

require_once 'classes/Usuario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//trata arquivo identidade
$arquivoIdentidade = $_FILES['identidade'];
$nomeIdentidade = $arquivoIdentidade['name'];
$nomeTempIdentidade = $arquivoIdentidade['tmp_name'];
move_uploaded_file($nomeTempIdentidade, 'imagens/'.$nomeIdentidade);

//trata arquivo endereço
$arquivoEndereco = $_FILES['endereco'];
$nomeEndereco = $arquivoEndereco['name'];
$nomeTempEndereco = $arquivoIdentidade['tmp_name'];
move_uploaded_file($nomeEndereco, 'imagens/'.$nomeEndereco);

//trata arquivo selfie
$arquivoSelfie = $_FILES['selfie'];
$nomeSelfie = $arquivoSelfie['name'];
$nomeTempSelfie = $arquivoSelfie['tmp_name'];
move_uploaded_file($nomeTempSelfie, 'imagens/'.$nomeSelfie);

$usuario = new Usuario();

$usario->nome = $_POST['nome'];
$usario->rg = $_POST['rg'];
$usario->cpf = $_POST['cpf'];
$usario->endereco = $_POST['endereco'];
$usario->senha = $_POST['senha'];
$usario->email = $_POST['email'];
$usario->identidade_arquivo = $nomeIdentidade;
$usario->endereco_arquivo = $nomeEndereco;
$usario->selfie_arquivo = $nomeSelfie;