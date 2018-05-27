<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
  </head>
  <body>
    <form method="post" action="" name="cadastro">
      <fieldset>
        <legend>Informações Pessoais</legend>
        <label>Nome:</label><input type="text" name="nome">
        <label>RG:</label><input type="number" name="rg">
        <label>CPF:</label><input type="text" name="nome">
      </fieldset>
    </form>
  </body>
</html>
Nesse tutorial vamos aprender como fazer
um sistema de upload bem fácil. Ideal para iniciantes
em PHP.

Passo 1

Primeiro crie um HTM com o nome upload.htm e adicione
os códigos
abaixo:

<html>
<body>
<form action="upload.php" method="POST"
enctype="multipart/form-data">
Arquivo: <input type="file" name="file"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>

Esse código ira criar o campo onde o arquivo
será selecionado.
Atenção: Não altere o nome do campo
pois o PHP não irá funcionar
corretamente.

Passo 2

Agora iremos criar o PHP cujo qual irá fazer
o Upload
para o servidor:

<?php
$pasta = "/pasta/onde/o/arquivo/sera/salvo";
/* Coloque aqui,
a pasta no servidor onde os arquivos serão salvos.
Atenção: se você não
souber sua pasta no servidor, contate o administrador
do mesmo. */

$dest = $pasta."/".$file_name; // Não
altere esta variável.

if(!move_uploaded_file($file, $dest)) { // Executa o
comando do upload no servidor
   echo "Não foi possível
enviar o arquivo!"; /* Caso não foi possível
enviar o arquivo,
   mostra o erro. */
} else {
   echo "Arquivo enviado com sucesso!";
/* Caso o arquivo tenha sido enviado
   com sucesso, mostra a mensagem de
sucesso. */
}
?>

Obs.: A pasta deve estar com o chmod 777.

Pronto, está criado o sistema de upload.
