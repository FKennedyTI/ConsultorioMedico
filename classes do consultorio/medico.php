<?php 
     public class Medico {
         private $codigo;
         private $nome;
         private $cpf;
         private $rg;
         private $crm;
         private $telefone;
         private $endereço;
         private $sexo;
         private $senha;


         function getCodigo() {
             return $this -> codigo;
         }

         function getNome() {
             return $this -> nome;
         }

         function getCpf() {
            return $this -> cpf;
        }

        function getRg() {
            return $this -> rg;
        }

        function getCrm() {
            return $this -> crm;
        }

        function getTelefone() {
            return $this -> telefone;
        }

        function getEndereço() {
            return $this -> endereço;
        }

        function getSexo() {
            return $this -> sexo;
        }

        function getSenha() {
            return $this -> senha;
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
    
         function setCrm($crm) {
            $this->crm = $crm;
        }
    
         function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
    
         function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    
         function setSexo($sexo) {
            $this->sexo = $sexo;
        }
    
    
         function setSenha($senha) {
            $this->senha = $senha;
        }
    

     }





?>