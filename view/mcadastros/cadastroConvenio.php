<?php

    include_once('conexao.php');

    if ( isset($_POST['submit']) ) {
        
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cnpj = $_POST['cnpj'];
        $planos = $_POST['planos'];


        $sql = "INSERT INTO covenio 
                    (nome, telefone, endereco, cnpj, planos)
                VALUES 
                    ('$nome', '$telefone', '$endereco', '$cnpj', '$planos')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("$nome foi cadastrado(a) com sucesso!", "success");
        } else {
            mensagem("Não foi possível cadastrar $nome", 'danger');
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro de Convênios</title>
</head>

<style>
    body{
        background-image: url(61808.jpg);
        background-size: 100%;
    }

    h1{
        text-align: center;
        margin-top: 20px;
    }

    .btn{
        margin-top: 8px;
    }
</style>

<body>
    <div class="container">

        <h1>Cadastro de Convênios</h1>

        <form action="cadastroConvenio.php" method="post">
            <div class="row">
                <div class="col">
                    <label>Nome:</label>
                    <input type="text" class="form-control" placeholder="Informe o nome do cliente" name="nome">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" placeholder="Informe o telefone do cliente" name="telefone">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" placeholder="Informe o endereço do cliente" name="endereco">
                </div>

                <div class="col">
                    <label>CNPJ:</label>
                    <input type="number" class="form-control" placeholder="Informe o CNPJ do cliente" name="cnpj">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Digite o convênio:</label>
                    <input type="text" class="form-control" placeholder="Informe o convênio desejado" name="planos">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-dark" value="Cadastrar" name="submit">
                </div>
            </div>
        </form>    
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>