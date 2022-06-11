<?php
	
	include_once('conexao.php');

	$sql = "SELECT * FROM clinica";

	$dados = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Listagem Clinica</title>
    <style>
        body{
            background-image: url(61808.jpg) ;
            background-size: 100%;
        }
    </style>
</head>
<body>
   <div class="container">
       <h1 class="text-center">Listagem da Clinica</h1>
       <table class="table table-hover">
           <thead>
               <tr>
                   <th>codigo</th>
                   <th>Nome da clínica</th>
                   <th>CNPJ</th>
                   <th>Endereço</th>
                   <th>Telefone</th>
                   <th>Ações</th>
                  
              </tr>
           </thead>

           <tbody>
           <?php

                while ($linha = mysqli_fetch_assoc($dados) ) {
                    $codigo = $linha['codigo'];
                    $nome = $linha['nome'];
                    $cnpj = $linha['cnpj'];
                    $endereco = $linha['endereco'];
                    $telefone = $linha['telefone'];

                    
                    echo "<tr>
                            <td>$codigo</td> 
                            <td>$nome</td> 
                            <td>$cnpj</td>
                            <td>$endereco</td>
                            <td>$telefone</td>
                        </tr>";
    }

        ?>
           </tbody>


       </table>
       <a class="btn btn-dark" href="javascript:history.back()">salvar</a>
   </div>
</body>
</html>