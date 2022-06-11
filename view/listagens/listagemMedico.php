<?php
	
	include_once('conexao.php');

	$sql = "SELECT * FROM medico";

	$dados = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Medicos</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

        <div class="container" >
            <h1 class="text-center" >Listagem de Médicos</h1>

            <table class="table table-hover">

                <thead>
                    
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>CRM</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Gênero</th>
                        <th>Ações</th>
                    </tr>

                </thead>

                <tbody>

                    <?php

						while ($linha = mysqli_fetch_assoc($dados) ) {
							$nome = $linha['nome'];
							$cpf = $linha['cpf'];
							$rg = $linha['rg'];
							$crm = $linha['crm'];
							$telefone = $linha['telefone'];
                            $endereco = $linha['endereco'];
							$sexo = $linha['sexo'];
							echo "<tr> 
									<td>$nome</td>
									<td>$cpf</td>
									<td>$rg</td>
									<td>$crm</td>
                                    <td>$telefone</td>
                                    <td>$endereco</td>
                                    <td>$sexo</td>
                                    <td>
                            <img src='icons/editar.svg' title='Editar'>  

                            <img src='icons/trash.svg' title='Excluir'>

							</td>
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