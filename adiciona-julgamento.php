<?php

require_once 'classes/Julgamento.php';

$julgamento = new Julgamento();

$recurso = $_POST['recurso_id'];
$resposta = $_POST['resposta'];

$julgamento->resposta = $resposta;
$julgamento->recurso = $recurso;

var_dump($julgamento);

$julgamento->inserir();