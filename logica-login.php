<?php

if(isset($_POST['email']) && isset($_POST['senha'])){
	
	require 'classes/Usuario.php';
	session_start();
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
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
			header("Location: index.php");
		}else {
			header("Location: login.php");
		}
	}	
}