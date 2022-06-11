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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Listagem Pacientes</title>
    <style>
        body{
            background-image: url(61808.jpg);
            background-size: 100%;
        }

        img:hover{
            -webkit-transform: scale(1.3);
             transform: scale(1.3);
        }
    </style>
</head>
<body>
   <div class="container">
       <h1 class="text-center">Listagem de usuário Paciente</h1>
       <table class="table table-hover">
           <thead class="" >
               <tr>
                   <th>Nome</th>
                   <th>Endereço</th>
                   <th>Telefone</th>
                   <th>CPF</th>
                   <th>RG</th>
                   <th>sexo</th>
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
                        <td>$nome</td> 
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$cpf</td>
                        <td>$rg</td>
                        <td>$sexo</td>
                        <td>$convenio</td>
                        <td>
                            <img src='icons/editar.svg' title='Editar'>  

                            <img src='icons/trash.svg' title='Excluir'>

							</td>
                    </tr>";
                }

            ?>
           </tbody>


       </table>
       <a class="btn btn-dark" href="javascript:history.back()">salvar</a>
   </div>
</body>
</html>