<?php

require_once 'classes/Recurso.php';

$recurso = new Recurso();

$recurso->id = 1;

$resultado = $recurso->mostraDetalhes();

var_dump($resultado);