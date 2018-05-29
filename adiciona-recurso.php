<?php

require_once 'classes/Usuario.php';
require_once 'classes/Recurso.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'página funciona';

$email = 'div@email.com'; //esse e-mail vai ser identificado após analisar o Session
$usuario = new Usuario($email);

//trata arquivo cnh
$arquivoCNH = $_FILES['cnh_arquivo'];
$nomeCNH = $arquivoCNH['name'];
$nomeTempCNH = $arquivoCNH['tmp_name'];
move_uploaded_file($nomeTempCNH, 'imagens/'.$nomeCNH);

//trata arquivo comprovante de residencia
$arquivoResidencia = $_FILES['comprovante_residencia'];
$nomeResidencia = $arquivoResidencia['name'];
$nomeTempResidencia = $arquivoResidencia['tmp_name'];
move_uploaded_file($nomeTempResidencia, 'imagens/'.$nomeResidencia);

//trata arquivo documento do veículo
$arquivoDocumento = $_FILES['documento_veiculo'];
$nomeDocumento = $arquivoDocumento['name'];
$nomeTempDocumento = $arquivoDocumento['tmp_name'];
move_uploaded_file($nomeTempDocumento, 'imagens/'.$nomeDocumento);

//trata arquivo multa
$arquivoMulta = $_FILES['multa_arquivo'];
$nomeMulta = $arquivoMulta['name'];
$nomeTempMulta = $arquivoMulta['tmp_name'];
move_uploaded_file($nomeTempMulta, 'imagens/'.$nomeMulta);

//trata arquivo comprovante de pagamento
$arquivoComprovante = $_FILES['comprovante'];
$nomeComprovante = $arquivoComprovante['name'];
$nomeTempComprovante = $arquivoComprovante['tmp_name'];
move_uploaded_file($nomeTempComprovante, 'imagens/'.$nomeComprovante);

//trata arquivo procuração
$arquivoProcuracao = $_FILES['procuracao'];
$nomeProcuracao = $arquivoProcuracao['name'];
$nomeTempProcuracao = $arquivoProcuracao['tmp_name'];
move_uploaded_file($nomeTempProcuracao, 'imagens/'.$nomeProcuracao);

//trata arquivo outros documentos
$arquivoOutros = $_FILES['outros_documentos'];
$nomeOutros = $arquivoOutros['name'];
$nomeTempOutros = $arquivoOutros['tmp_name'];
move_uploaded_file($nomeTempOutros, 'imagens/'.$nomeOutros);

$recurso = new Recurso();

$recurso->autoDeInfracao = $_POST['numero_infracao'];
$recurso->usuario = $usuario->id;
$recurso->cnh = $_POST['cnh'];
$recurso->cnhArquivo = $nomeCNH;
$recurso->enderecoArquivo = $nomeResidencia;
$recurso->documentoArquivo = $nomeDocumento;
$recurso->multaArquivo = $nomeMulta;
$recurso->comprovanteTaxaArquivo = $nomeComprovante;
$recurso->procuracaoArquivo = $nomeProcuracao;
$recurso->outrosDocumentos = $nomeOutros;
$recurso->razoes = $_POST['razoes'];

var_dump($recurso);

$resultado = $recurso->inserir();
header("Location: user.php");