<?php

class Usuario {
	public $id;
	public $nome;
	public $rg;
	public $cpf;
	public $endereco;
	public $senha;
	public $email;
	public $identidade_nome_arquivo;
	public $endereco_nome_arquivo;
	public $selfie_nome_arquivo;

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
        $conexao->prepare("INSERT INTO usuarios(nome, rg, cpf, endereco, senha, email, identidade_nome_arquivo, endereco_nome_arquivo, selfie_nome_arquivo) VALUES (:NOME, :RG, :CPF, :ENDERECO, :SENHA, :EMAIL, :IDENTIDADE_NOME_ARQUIVO, :ENDERECO_NOME_ARQUIVO, :SELFIE_NOME_ARQUIVO) ");
        $conexao->exec($query);
    }

}