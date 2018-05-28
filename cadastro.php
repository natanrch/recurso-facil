<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <form method="post" action="" name="cadastro">
      <fieldset>
        <legend>Formulário de cadastro</legend>
        <label>Nome:</label><input type="text" name="nome"></br>
        <label>RG:</label><input type="text" name="rg"></br>
        <label>CPF:</label><input type="text" name="cpf"></br>
        <label>Identidade:</label><input type="file" name="identidade"></input></br>
        <label>Comprovante de residência:</label><input type="file" name="comprovante_residencia"></input></br>
        <label>Selfie com identidade:</label><input type="file" name="selfie_identidade"></input></br>
        <label>Cadastro:</label><input type="password" name="senha"></input></br>
        <label>Confirmar Senha:</label><input type="password" name="conf_senha"></input></br>
        <input type="submit" value="Enviar" name="enviar">
      </fieldset>

    </form>
  </body>
</html>
