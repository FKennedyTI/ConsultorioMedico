<?php
	
	public class Secretaria {
		
		private $codigo;
		private $nome;
		private $cpf;
		private $rg;
		private $telefone;
		private $cidade;
		private $bairro;
		private $sexo;
		private $logradouro;
		private $senha;

	}

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }


    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

     
    function getTelefone() {
        return $this->telefone;
    }


    function getCidade() {
        return $this->cidade;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getSenha() {
        return $this->senha;
    }




    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

     function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

     function setCidade($cidade) {
        $this->cidade = $cidade;
    }

     function setBairro($bairro) {
        $this->bairro = $bairro;
    }

     function setSexo($sexo) {
        $this->sexo = $sexo;
    }

     function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

     function setSenha($senha) {
        $this->senha = $senha;
    }

    

?>