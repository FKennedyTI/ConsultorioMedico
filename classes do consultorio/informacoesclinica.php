<?php

public class InformacoesClinica{
    private $codigo;
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;
}

function getCodigo() {
    return $this->codigo;
}

function getNome() {
    return $this->nome;
}


function getCnpj() {
    return $this->cnpj;
}

function getEndereco() {
    return $this->endereco;
}

 
function getTelefone() {
    return $this->telefone;
}






function setCodigo($codigo) {
    $this->codigo = $codigo;
}

function setNome($nome) {
    $this->nome = $nome;
}

function setCnpj($cnpj) {
    $this->cnpj = $cnpj;
}

function setEndereco($endereco) {
    $this->endereco = $endereco;
}

 function setTelefone($telefone) {
    $this->telefone = $telefone;
}


?>