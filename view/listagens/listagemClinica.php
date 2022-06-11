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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Listagem Clinica</title>
    <style>
        body{
            background-image: url(61808.jpg) ;
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
       <h1 class="text-center">Listagem da Clinica</h1>
       <table class="table table-hover">
           <thead>
               <tr>
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
                            <td>$nome</td> 
                            <td>$cnpj</td>
                            <td>$endereco</td>
                            <td>$telefone</td>
                            <td>

                            <a><img src='icons/editar.svg' title='Editar'></a>  

                            <a data-bs-toggle='modal' data-bs-target='#exampleModal' onclick=" . '"' . "obterDados($codigo, '$nome')" . '"' . "><img src='icons/trash.svg' title='Excluir'></a>

							</td>
                        </tr>";
    }

        ?>
           </tbody>


       </table>
   </div>

            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exclusão de Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="excluir_script.php">
            <div class="modal-body">
                <p>Realmente deseja exluir <strong id="nome_clinica"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="coidgo" id="codigo_pessoa" value="">
                <input type="hidden" name="nome_clinica" id="nome_clinica_post">
                <input type="submit" class="btn btn-danger" value="Sim">
            </div>
            </form>
            </div>
        </div>
        </div>

        <script>
            function obterDados(codigo, nome){
                document.getElementById('codigo_pessoa').value = codigo;
                document.getElementById('nome_clinica').innerHTML = nome;
                document.getElementById('nome_clinica_post').value = nome;
            }
        </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>