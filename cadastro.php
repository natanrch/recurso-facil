<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet"type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container_form col-6 mt-4">
      <form enctype="multipart/form-data" method="post" action="adicona-usuario.php"  name="cadastro" class="form_cad">
        <fieldset>
          <legend class="text-center">Formulário de cadastro</legend>
          <div class="form-group align-self-center">
            <div class="">
              <label>Nome:</label>
              <input type="text" name="nome" class="form-control">
            </div>
            <div class="">
              <label>RG:</label>
              <input type="text" name="rg" class="form-control">
            </div>
            <div class="">
              <label>CPF:</label>
              <input type="text" name="cpf" class="form-control">
            </div>
            <div class="">
              <label>Identidade:</label>
              <input type="file" name="identidade" class="">
            </div>
            <div class="">
              <label>Endereço:</label>
              <input type="text" name="endereco" class="form-control">
            </div>
            <div class="">
              <label>Comprovante de residência:</label>
              <input type="file" name="comprovante_residencia" class="">
            </div>
            <div class="">
              <label>Selfie com identidade:</label>
              <input type="file" name="selfie_identidade" class="">
            </div>
            <div class="">
              <label>Senha:</label>
              <input type="password" name="senha" class="form-control">
            </div>
            <div class="">
              <label>Confirmar Senha:</label>
              <input type="password" name="conf_senha" class="form-control">
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
