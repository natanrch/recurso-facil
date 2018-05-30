<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'logica-login.php';
// verificaUsuario();
?>

<?php require_once 'header.php'; ?>
    <div class="container-fluid user">
      <div class="row">
        <!--
        <div class="esquerdo">
          <h4 class="text-center">Usuário</h4>
            <ul>
              <li><a href="#">Configurações</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
        </div>-->
        <div class="col direito ">
          <h2 class="text-center" style="margin-top:100px;">Formulário</h2>
          <h6 class="text-center">Preencha o formulário para recorrer sobre uma multa</h6>
          <form enctype="multipart/form-data" method="post" action="adiciona-recurso.php" class="formulario-recorrer">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label">Número do auto de infração:</label>
              <div class="col-sm-12">
                <input type="text" name="numero_infracao" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label">Número da CNH:</label>
              <div class="col-sm-12">
                <input type="text" name="cnh" class="form-control">
              </div>
            </div>

            <div class="form-group linha">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="recurso" id="proprio" value="opcao1" checked>
              <label class="form-check-label" for="proprio">
                Recurso Próprio
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="recurso" id="procurador" value="opcao1" checked>
              <label class="form-check-label" for="procurador">
                Procurador
              </label>
            </div>
            </div>

            <div>
              <h5 class="text-center">Documentos Obrigatórios</h5>
              <div class="form-group linha">
                <label>CNH:</label>
                <div class="col-sm-7">
                  <input type="file" name="cnh_arquivo" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group linha">
                <label>Comprovante de Residência:</label>
                <div class="col-sm-7">
                  <input type="file" name="comprovante_residencia" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group linha">
                <label>Documento do Veículo:</label>
                <div class="col-sm-7">
                  <input type="file" name="documento_veiculo" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group linha">
                <label>Cópia da Multa:</label>
                <div class="col-sm-7">
                  <input type="file" name="multa_arquivo" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group linha">
                <label>Comprovante de pagamento da taxa p/ recurso :</label>
                <div class="col-sm-7">
                  <input type="file" name="comprovante" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group linha">
                <label>Procuração (Se processo for feito por procurador):</label>
                <div class="col-sm-7">
                  <input type="file" name="procuracao" class="form-control-file"/>
                </div>
              </div>
              <div class="form-group linha">
                <label>Outros Documentos:</label>
                <div class="col-sm-7">
                  <input type="file" name="outros_documentos" />
                </div>
              </div>
              <div class="form-group linha">
                <label>Razões do Recurso:</label>
                <textarea name="razoes" class="form-control" rows=9></textarea>
              </div>
              <div class="container">
                <input type="submit" value="Enviar" name="" class="btn btn-primary col-2 mb-4">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php require_once 'footer.php' ?>
