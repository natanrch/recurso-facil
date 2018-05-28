<?php

require_once 'classes/Usuario.php';

class Recurso {
	protected $id;
	protected $autoDeInfracao;
	protected $usuario;
	protected $cnh;
	protected $cnhArquivo;
	protected $enderecoArquivo;
	protected $multaArquivo;
	protected $comprovanteTaxaArquivo;
	protected $procuraoArquivo;
	protected $outrosDocumentos;

	public function __construct($autoDeInfracao, Usuario $usuario, $cnh, $cnhArquivo, $enderecoArquivo, $multaArquivo, $comprovanteTaxaArquivo, $procuracaoArquivo, $outrosDocumentos) {
		$this->autoDeInfracao = $autoDeInfracao;
		$this->usuario = $usuario;
		$this->cnh = $cnh;
		$this->cnhArquivo = $cnhArquivo;
		$this->enderecoArquivo = $enderecoArquivo;
		$this->multaArquivo = $multaArquivo;
		$this->comprovanteTaxaArquivo = $comprovanteTaxaArquivo;
		$this->procuracaoArquivo = $procuracaoArquivo;
		$this->outrosDocumentos = $outrosDocumentos;
	}

}