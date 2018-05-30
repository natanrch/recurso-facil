<?php

require_once 'classes/Conexao.php';

class Usuario
{
	public $id;
	public $nome;
	public $rg;
	public $cpf;
	public $endereco;
	public $senha;
	public $email;
	public $identidade_arquivo;
	public $linhaDados;
	public $endereco_arquivo;
	public $selfie_arquivo;

	/*public function __construct($nome, $rg, $cpf, $endereco, $senha, $email, $identidade_arquivo, $endereco_arquivo, $selfie_arquivo) 
	{
		$this->nome = $nome;
		$this->rg = $rg;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
		$this->senha = $senha;
		$this->email = $email;
		$this->identidade_arquivo = $identidade_arquivo;
		$this->endereco_arquivo = $endereco_arquivo;
		$this->selfie_arquivo = $selfie_arquivo;
	}*/

	public function __construct($email = false) {
		if ($email) {
			$this->email = $email;
			$this->carregar();
		}
	}

	public function construirPorId($id)
	{
        $instance = new self();
        $instance->carregaPorId( $id );
        return $instance;
	}

	public function carregar() 
	{
        $conexao = Conexao::pegarConexao();
        $query = "SELECT email, senha, id, nome FROM usuarios where email = '".$this->email."'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->senha = $linha['senha'];
            $this->email = $linha['email'];
            $this->id = $linha['id'];
            $this->nome = $linha['nome'];
        }
		$this->linhaDados = $resultado->rowCount();

	}

	public function carregaPorId($id)
	{
		$conexao = Conexao::pegarConexao();
		$query = "SELECT nome from usuarios where id = ".$id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {

            $this->nome = $linha['nome'];
        }
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