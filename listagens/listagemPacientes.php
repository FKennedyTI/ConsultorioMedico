<?php
	
	include_once('conexao.php');

	$sql = "SELECT * FROM paciente";

	$dados = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            background-image: url(61808.jpg);
            background-size: 100%;
        }
    </style>
</head>
<body>
   <div class="container">
       <h1 class="text-center">Listagem de usuário Paciente</h1>
       <table class="table table-hover">
           <thead class="" >
               <tr>
                   <th>codigo</th>
                   <th>Nome</th>
                   <th>Endereço</th>
                   <th>Telefone</th>
                   <th>CPF</th>
                   <th>RG</th>
                   <th>Sexo</th>
                   <th>convênio</th>
                   <th>Ações</th>
              </tr>
           </thead>

           <tbody>

           <?php

            while ($linha = mysqli_fetch_assoc($dados) ) {
                $codigo = $linha['codigo'];
                $nome = $linha['nome'];
                $endereco = $linha['endereco'];
                $telefone = $linha['telefone'];
                $cpf = $linha['cpf'];
                $rg = $linha['rg'];
                $sexo = $linha['sexo'];
                $convenio = $linha['convenio'];

                
                echo "<tr>
                        <td>$codigo</td> 
                        <td>$nome</td> 
                        <td>$telefone</td>
                        <td>R$$cpf</td>
                        <td>R$$rg</td>
                        <td>$sexo</td>
                        <td>$convenio</td> 
                    </tr>";
                }

            ?>
           </tbody>


       </table>
       <a class="btn btn-dark" href="javascript:history.back()">salvar</a>
   </div>
</body>
</html>