<?php

class Julgamento
{
	public $id;
	public $resposta;
	public $recurso;

	public function inserir()
	{
		$query = "INSERT INTO julgamentos (resposta, recurso_id, ) VALUES
		(
		'".$this->resposta."',
		".$this->recurso.", 
		)";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);

	}

}