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
$arquivoEndereco = $_FILES['comprovante_residencia'];
$nomeEndereco = $arquivoEndereco['name'];
$nomeTempEndereco = $arquivoEndereco['tmp_name'];
move_uploaded_file($nomeTempEndereco, 'imagens/'.$nomeEndereco);

//trata arquivo selfie
$arquivoSelfie = $_FILES['selfie_identidade'];
$nomeSelfie = $arquivoSelfie['name'];
$nomeTempSelfie = $arquivoSelfie['tmp_name'];
move_uploaded_file($nomeTempSelfie, 'imagens/'.$nomeSelfie);

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$usuario = new Usuario($nome, $rg, $cpf, $endereco, $senha, $email, $nomeIdentidade, $nomeEndereco, $nomeSelfie);

/*$usuario->nome = $_POST['nome'];
$usuario->rg = $_POST['rg'];
$usuario->cpf = $_POST['cpf'];
$usuario->endereco = $_POST['endereco'];
$usuario->senha = $_POST['senha'];
$usuario->email = $_POST['email'];
$usuario->identidade_arquivo = $nomeIdentidade;
$usuario->endereco_arquivo = $nomeEndereco;
$usuario->selfie_arquivo = $nomeSelfie;*/

var_dump($usuario);

$usuario->inserir();