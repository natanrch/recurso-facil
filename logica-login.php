<?php
session_start();
if(isset($_POST['email_login']) && isset($_POST['senha_login'])){

	require 'classes/Usuario.php';

	$email = $_POST['email_login'];
	$senha = $_POST['senha_login'];
	$usuario = new Usuario($email);
	$senhaUsuario = $usuario->senha;
	$linhasAfetadas = $usuario->linhaDados;

	if(empty($email) || empty($senha)){
		$msg = "Preencha todos os campos";
		$error = 1;
	}else{
		if($linhasAfetadas > 0 && $senha == $senhaUsuario ){
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha;
			header("Location: cabecalho.php");
		}else {
			$error = 1;
			$msg = "Usuario ou senha errados";
		}
	}
}
function estaLogado() {
	return isset($_SESSION['email']);
}

function verificaUsuario() {
	if(!estaLogado()) {
		header("Location: login.php");
	}
}