<?php
	
	include_once('conexao.php');

	$sql = "SELECT * FROM secretaria";

	$dados = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Listagem</title>
    <style>
        body{
            background-image: url(61808.jpg);
            background-size: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Listagem de Secretaria</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>codigo</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Sexo</th>
                    <th>Ações</th>
                </tr>
                
            </thead>

            <tbody>

            <?php

            while ($linha = mysqli_fetch_assoc($dados) ) {
                $codigo = $linha['codigo'];
                $nome = $linha['nome'];
                $cpf = $linha['cpf'];
                $rg = $linha['rg'];
                $telefone = $linha['telefone'];
                $endereco = $linha['endereco'];
                $sexo = $linha['sexo'];

                
                echo "<tr>
                        <td>$codigo</td> 
                        <td>$nome</td> 
                        <td>$cpf</td>
                        <td>$rg</td>
                        <td>$telefone</td>
                        <td>$endereco</td>
                        <td>$sexo</td> 
                    </tr>";
                }

            ?>

            </tbody>
        </table>
        <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>
    </div>

    <script src="js/bootstrap.min.js" ></script> 
    
</body>
</html>