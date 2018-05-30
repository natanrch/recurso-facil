<?php


require_once 'classes/Recurso.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$id = $_GET['id'];

$recurso = new Recurso($id);
//var_dump($recurso);

?>
<?php require_once 'header.php'; ?>

<table class="table">
	<thead>
		<tr colspan="4">
			<th>Informações do processo</th>
		</tr>
		<tr>
			<td>Número: <?= $recurso->id ?></td>
			<td>Auto de Infração: <?= $recurso->autoDeInfracao ?></td>
			<td>Recorrente: <?= $recurso->usuario ?></td>
			<td>CNH: <?= $recurso->cnh ?></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th colspan="4">Documentos Anexados</th>
		</tr>
		<tr>
			<td>CNH: <a href="imagens/<?= $recurso->cnhArquivo ?>"><i class="far fa-file-image"></i></a></td>
			<td>Comprovante de Residência: <a href="imagens/<?= $recurso->enderecoArquivo ?>"><i class="far fa-file-image"></i></a></td>
			<td>Documento do Veículo: <a href="imagens/<?= $recurso->documentoArquivo ?>"><i class="far fa-file-image"></i></a></td>
			<td>Multa: <a href="imagens/<?= $recurso->multaArquivo ?>"><i class="far fa-file-image"></i></a></td>
		</tr>
		<tr>
			<td>Comprovante de pagamento de taxa: <a href="imagens/<?= $recurso->comprovanteTaxaArquivo ?>"><i class="far fa-file-image"></i></a></td>
			<td>Procuração: <a href="imagens/<?= $recurso->procuracaoArquivo ?>"><i class="far fa-file-image"></i></a></td>
			<td>Outros documentos: <a href="imagens/<?= $recurso->outrosDocumentos ?>"><i class="far fa-file-image"></i></a></td>
			<td></td>
		</tr>
		<tr>
			<th colspan="4">Razões do recurso:</th>
		</tr>
	</tbody>
</table>
<p class="border"><?= $recurso->razoes ?></p>

<?php require_once 'footer.php'; ?>