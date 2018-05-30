<?php
	require_once 'classes/Recurso.php';
	$recurso = new Recurso();
	$lista = $recurso->listar();
	require_once 'header.php'; 
?>
<h1 class="text-center mb-5 mt-3 display-5s">Recursos Para Julgamento</h1>
<div class="container">
<table class="table table-striped">

<?php foreach ($lista as $l): ?>

<tr>
	<td>Número do Processo: <?= $l['id'] ?></td>
	<td>Auto de Infração: <?= $l['auto_de_infracao'] ?></td>
	<td class="ml-2"><a href="recurso.php?id=<?=$l['id'] ?>" class="btn btn-info"><i class="fas fa-search"></i></a></td>
</tr>

<?php endforeach ?>
</table>
</div>
<?php require_once 'footer.php'; ?>
