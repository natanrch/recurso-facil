<?php
	require_once 'classes/Recurso.php';
	$recurso = new Recurso();
	$lista = $recurso->listar();
?>

<table>

<?php foreach ($lista as $l): ?>

<tr>
	<td>Id: <?= $l['id'] ?></td>
	<td>Auto de Infração: <?= $l['auto_de_infracao'] ?></td>
</tr>

<?php endforeach ?>
</table>
