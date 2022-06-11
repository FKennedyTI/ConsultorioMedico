<?php
	
	public class Convenio {
		
		private $codigo;
		private $nome;
		private $telefone;
		private $endereco;
		private $cnpj;
        private $convenio;
		

	}

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }


    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }

     
    function getCnpj() {
        return $this->cnpj;
    }

    function getConvenio() {
        return $this->convenio;
    }


    



    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setCnpj($convenio) {
        $this->convenio = $convenio;
    }
     
    

?>