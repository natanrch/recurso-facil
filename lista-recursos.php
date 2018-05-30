<?php
	require_once 'classes/Recurso.php';
	$recurso = new Recurso();
	$lista = $recurso->listar();
	require_once 'header.php'; 
?>
<h1>Recursos Para Julgamento</h1>
<table class="table table-striped">

<?php foreach ($lista as $l): ?>

<tr>
	<td>Id: <?= $l['id'] ?></td>
	<td>Auto de Infração: <?= $l['auto_de_infracao'] ?></td>
	<td><a href="recurso.php?id=<?=$l['id'] ?>" class="btn btn-info">Ver</a></td>
</tr>

<?php endforeach ?>
</table>
<?php require_once 'footer.php'; ?>
