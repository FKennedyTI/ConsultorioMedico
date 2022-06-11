<?php
public class Paciente{
    private $codigo;
    private $nome;
    private $endereco;
    private $telefone;
    private $cpf;
    private $rg;
    private $sexo;
    private $temconvenio;

    function getCodigo() {
        return $this -> codigo;
    }

    function getNome() {
        return $this -> nome;
    }

    function getEdereco() {
       return $this -> Edereco;
   }

   function getTelefone() {
       return $this -> telefone;
   }

   function getCpf() {
       return $this -> Cpf;
   }

   function getRg() {
       return $this -> rg;
   }

   function getSexo() {
       return $this -> sexo;
   }

   function getTemconvenio() {
       return $this -> temconvenio;
   }



   
   function setCodigo($codigo) {
    $this->codigo = $codigo;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setEdereco($endereco) {
    $this->cpf = $cpf;
}

function setTelefone($telefone) {
    $this->telefone = $telefone;
}

function setCpf($cpf) {
    $this->cpf = $cpf;
}

function setRg($rg) {
    $this->rg = $rg;
}

 function setSexo($sexo) {
    $this->sexo = $sexo;
}

 function setTemconvenio($temconvenio) {
    $this->temconvenio = $temconvenio;
}


}

?>