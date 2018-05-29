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
		echo "Preencha todos os campos";
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

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container">
	 	<form action="" method="post" class="formulario__login">
			<div class="col-auto mt-5">
     			<label class="sr-only" for="email">Usuário</label>
     		 	<div class="input-group mb-2">
        		<div class="input-group-prepend">
          			<div class="input-group-text"><i class="fas fa-user"></i></div>
        		</div>
       				<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
      			</div>
    		</div>
			<div class="col-auto mt-4">
     			<label class="sr-only" for="senha">Senha</label>
     		 	<div class="input-group mb-2">
        		<div class="input-group-prepend">
          			<div class="input-group-text"><i class="fas fa-key"></i></div>
        		</div>
       				<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
      			</div>
			</div>
				<a href="cadastro.php" class="col-auto text-white formulario__link-cadastro">Cadastre-se</a>
			<div class="text-center mt-2">
				<button type="submit" class="btn btn-dark">Entrar</button>
			</div>
		</form>
	</div>
 </body>
 </html>