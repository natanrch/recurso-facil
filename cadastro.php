<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet"type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/cadastro.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container_form col-6 mt-4">
      <form enctype="multipart/form-data" method="post" action="adiciona-usuario.php"  name="cadastro" class="form_cad">
        <fieldset>
          <legend class="text-center">Formulário de cadastro</legend>
          <div class="form-group align-self-center">
            <div class="" >
              <label>Nome:</label>
              <input type="text" name="nome" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">Preencha o campo Nome</p>
            </div>
            <div class="">
              <label>RG:</label>
              <input type="text" name="rg" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">Preencha o campo RG</p>
            </div>
            <div class="">
              <label>CPF:</label>
              <input type="text" name="cpf" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">Preencha o campo CPF</p>
            </div>
            <div class="">
              <label>Identidade:</label>
              <input type="file" name="identidade" class="">
              <p class="msg" style="color:rgb(222, 59, 59);">Selecione a foto da identidade</p>
            </div>
            <div class="">
              <label>Selfie com identidade:</label>
              <input type="file" name="selfie_identidade" class="">
              <p class="msg" style="color:rgb(222, 59, 59);">Selecione a selfie com a identidade</p>
            </div>
            <div class="">
              <label>Endereço:</label>
              <input type="text" name="endereco" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">Preencha o campo Endereço</p>
            </div>
            <div class="">
              <label>Comprovante de residência:</label>
              <input type="file" name="comprovante_residencia" class="">
              <p class="msg" style="color:rgb(222, 59, 59);">Selecione a imagem do comprovante de endereço</p>
            </div>
            <div class="">
              <label>E-mail:</label>
              <input type="email" name="email" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">Preencha o campo E-mail</p>
            </div>
            <div class="">
              <label>Senha:</label>
              <input type="password" name="senha" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">Preencha o campo Senha</p>
            </div>
            <div class="">
              <label>Confirmar Senha:</label>
              <input type="password" name="conf_senha" class="form-control">
              <p class="msg" style="color:rgb(222, 59, 59);">As senhas devem ser iguais</p>
            </div>
            <div class="text-center mt-3">
              <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </body>
</html>
