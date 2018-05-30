<?php


require_once 'logica-login.php';
require_once 'header.php';
?>
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
<?php require_once 'footer.php'; ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="./js/main.js"></script>
