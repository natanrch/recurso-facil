<?php

require_once 'classes/Conexao.php';

class Usuario {
	public $id;
	public $nome;
	public $rg;
	public $cpf;
	public $endereco;
	public $senha;
	public $email;
	public $identidade_arquivo;
	public $endereco_arquivo;
	public $selfie_arquivo;

	/*public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}*/

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