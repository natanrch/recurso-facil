<?php 



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Login</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container ">
	 	<form action="" method="post" class="formulario__login">
		 	<div class="form-group">
				<label for="usuario">Usuario</label>
				<input type="text" name="usuario" id="usuario" class="form-control"> 
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" class="form-control"> 
				<a href="#" class="text-center">Cadastre-se</a>
			</div>
			<button type="submit" class="btn btn-primary">Entrar</button>
			
		</form>
	</div>
 </body>
 </html>