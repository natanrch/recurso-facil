
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
			$error = 1;
			$msg = "Usuario ou senha errados";
		}
	}
}
?>
<?php 
	require_once 'logica-login.php';
	if(isset($_SESSION['email'])) {
		redireciona();
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container">
	 	<form action="" method="post" class="formulario__login" id="login_usuario">
			<div class="col-auto mt-5">
     			<label class="sr-only" for="email">Usuário</label>
     		 	<div class="input-group mb-2 teste">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-user"></i></div>
					</div>
       				<input type="email" class="form-control" id="email" placeholder="E-mail" name="email_login">
      			</div>
    		</div>
			<div class="col-auto mt-4">
     			<label class="sr-only" for="senha">Senha</label>
     		 	<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-key"></i></div>
					</div>
       				<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha_login">
      			</div>
			</div>
			<a href="cadastro.php" class="col-auto text-white formulario__link-cadastro">Cadastre-se</a>
			<div class="valida_error">
				<?php if(isset($error) && $error): ?>
					<?=  $msg; ?>
				<?php endif; ?>
			</div>
			<div class="text-center mt-2">
				<button type="submit" class="btn btn-dark" name="entrar_login">Entrar</button>
			</div>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="./js/main.js"></script>
 </body>
 </html>
