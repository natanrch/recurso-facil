<html>
  <head>
    <title>Area do usuário</title>
    <meta charset="utf-8">
    <link rel="stylesheet"type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid user">
      <div class="row">
        <div class="esquerdo">
          <h4 class="text-center">Usuário</h4>
            <ul>
              <li><a href="#">Configurações</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
        </div>
        <div class="col direito">
          <form class="">
            <div class="">
              <label>Número do auto de infração:</label>
              <input type="text" name="numero_infracao">
            </div>
            <div>
              <label>Recurso Próprio:</label><input type="radio">
              <label>Procurador:</label><input type="radio">
            </div>
            <div>
              <h6>Documentos Obrigatórios</h6>
              <label>CNH:</label><input type="file"/><br/>
              <label>Comprovante de Residência:</label><input type="file"/><br/>
              <label>Documento do Veículo:</label><input type="file"/><br/>
              <label>Cópia da Multa:</label><input type="file"/><br/>
              <label>Comprovante de pagamento da taxa p/ recurso :</label><input type="file"/><br/>
              <label>Procuração (Se processo for feito por procurador):</label><input type="file"/><br/>
              <label>Outros Documentos:</label><input type="file"/><br/>
              <label>Razões do Recurso:</label><textarea></textarea><br/>
              <input type="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
