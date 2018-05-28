<?php

require_once 'classes/Conexao.php';

class Usuario {
	protected $id;
	protected $nome;
	protected $rg;
	protected $cpf;
	protected $endereco;
	protected $senha;
	protected $email;
	protected $identidade_arquivo;
	protected $endereco_arquivo;
	protected $selfie_arquivo;

	public function __construct($nome, $rg, $cpf, $endereco, $senha, $email, $identidade_arquivo, $endereco_arquivo, $selfie_arquivo) {
		$this->nome = $nome;
		$this->rg = $rg;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
		$this->senha = $senha;
		$this->email = $email;
		$this->identidade_arquivo = $identidade_arquivo;
		$this->endereco_arquivo = $endereco_arquivo;
		$this->selfie_arquivo = $selfie_arquivo;
	}

    public function inserir()
    {
        $conexao = Conexao::pegarConexao();
        $inserir = $conexao->prepare("INSERT INTO usuarios(nome, rg, cpf, endereco, senha, email, identidade_arquivo, endereco_arquivo, selfie_arquivo) VALUES (:NOME, :RG, :CPF, :ENDERECO, :SENHA, :EMAIL, :IDENTIDADE_ARQUIVO, :ENDERECO_ARQUIVO, :SELFIE_ARQUIVO) ");
        $inserir->bindValue(":NOME", $this->nome, PDO::PARAM_STR);
        $inserir->bindValue(":RG", $this->rg, PDO::PARAM_STR);
        $inserir->bindValue(":CPF", $this->cpf, PDO::PARAM_STR);
        $inserir->bindValue(":ENDERECO", $this->endereco, PDO::PARAM_STR);
        $inserir->bindValue(":SENHA", $this->senha, PDO::PARAM_STR);
        $inserir->bindValue(":EMAIL", $this->email, PDO::PARAM_STR);
        $inserir->bindValue(":IDENTIDADE_ARQUIVO", $this->identidade_arquivo, PDO::PARAM_STR);
        $inserir->bindValue(":ENDERECO_ARQUIVO", $this->endereco_arquivo, PDO::PARAM_STR);
        $inserir->bindValue(":SELFIE_ARQUIVO", $this->selfie_arquivo, PDO::PARAM_STR);
        $inserir->execute();
        return $inserir;
    }

}