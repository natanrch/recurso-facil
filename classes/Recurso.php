<?php

require_once 'classes/Conexao.php';

class Recurso
{
	public $id;
	public $autoDeInfracao;
	public $usuario;
	public $cnh;
	public $cnhArquivo;
	public $enderecoArquivo;
	public $documentoArquivo;
	public $multaArquivo;
	public $comprovanteTaxaArquivo;
	public $procuracaoArquivo;
	public $outrosDocumentos;
	public $razoes;
/*
	public function inserir()
	{
		$conexao = Conexao::pegarConexao();
		$inserir = $conexao->prepare("INSERT INTO recursos (auto_de_infracao, usuario_id, cnh, cnh_arquivo, veiculo_arquivo, endereco_arquivo, multa_arquivo, coprovante_taxa_arquivo, procuracao_arquivo, outros_documentos, razoes) VALUES :AUTO_DE_INFRACAO, :USUARIO, :CNH, :CNH_ARQUIVO, :VEICULO_ARQUIVO, :ENDERECO_ARQUIVO, :MULTA_ARQUIVO, :COMPROVANTE_TAXA_ARQUIVO, :PROCURACAO_ARQUIVO, :OUTROS_DOCUMENTOS, :RAZOES)");
		$inserir->bindValue(":AUTO_DE_INFRACAO", $this->autoDeInfracao, PDO::PARAM_STR);
		$inserir->bindValue(":USUARIO", $this->usuario, PDO::PARAM_INT);
		$inserir->bindValue(":CNH", $this->cnh, PDO::PARAM_STR);
		$inserir->bindValue(":CNH_ARQUIVO", $this->cnhArquivo, PDO::PARAM_STR);
		$inserir->bindValue(":VEICULO_ARQUIVO", $this->documentoArquivo, PDO::PARAM_STR);
		$inserir->bindValue(":ENDERECO_ARQUIVO", $this->enderecoArquivo, PDO::PARAM_STR);
		$inserir->bindValue(":MULTA_ARQUIVO", $this->multaArquivo, PDO::PARAM_STR);
		$inserir->bindValue(":COMPROVANTE_TAXA_ARQUIVO", $this->comprovanteTaxaArquivo, PDO::PARAM_STR);
		$inserir->bindValue(":PROCURACAO_ARQUIVO", $this->procuracaoArquivo, PDO::PARAM_STR);
		$inserir->bindValue(":OUTROS_DOCUMENTOS", $this->outrosDocumentos, PDO::PARAM_STR);
		$inserir->bindValue(":RAZOES", $this->razoes, PDO::PARAM_STR);
		return $inserir;

	}*/
	public function __construct($id = false) {
		if ($id) {
			$this->id = $id;
			$this->carregar();
		}
	}

	public function inserir()
	{
		$query = "INSERT INTO recursos (auto_de_infracao, usuario_id, cnh, cnh_arquivo, veiculo_arquivo, endereco_arquivo, multa_arquivo, comprovante_taxa_arquivo, procuracao_arquivo, outros_documentos, razoes) VALUES
		(
		'".$this->autoDeInfracao."', 
		{$this->usuario}, 
		'".$this->cnh."', 
		'".$this->cnhArquivo."', 
		'".$this->documentoArquivo."', 
		'".$this->enderecoArquivo."', 
		'".$this->multaArquivo."', 
		'".$this->comprovanteTaxaArquivo."', 
		'".$this->procuracaoArquivo."', 
		'".$this->outrosDocumentos."', 
		'".$this->razoes."'
		)";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);

	}

	public function listar()
    {
        $query = "SELECT id, auto_de_infracao FROM recursos";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar()
    {
        $conexao = Conexao::pegarConexao();
    	$query = "SELECT * FROM recursos where id = ".$this->id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->id = $linha['id'];
            $this->autoDeInfracao = $linha['auto_de_infracao'];
            $this->usuario = $linha['usuario_id'];
            $this->cnh = $linha['cnh'];
            $this->cnhArquivo = $linha['cnh_arquivo'];
            $this->documentoArquivo = $linha['veiculo_arquivo'];
            $this->enderecoArquivo = $linha['endereco_arquivo'];
            $this->multaArquivo = $linha['multa_arquivo'];
            $this->comprovanteTaxaArquivo = $linha['comprovante_taxa_arquivo'];
            $this->procuracaoArquivo = $linha['procuracao_arquivo'];
            $this->outrosDocumentos = $linha['outros_documentos'];
            $this->razoes = $linha['razoes'];
        }

    }
}