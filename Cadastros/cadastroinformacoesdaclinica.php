<?php
    
    // copiando o código do arquivo informado entre parênteses
    // nesse arquivo.
    include_once('conexao.php');
    
    // capturando uma informação enviada por um formulário utilizando
    // o método de envio POST no qual está pegando um campo que tenha
    // um name igual a submit
    
    if ( isset($_POST['submit']) ) {
        
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
    
        $sql = "INSERT INTO clinica 
                    (nome, cnpj, endereco, telefone)
                VALUES 
                    ('$nome', $cnpj, $endereco, '$telefone')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("$nome cadastrado com sucesso!", "success");
        } else {
            mensagem("não foi possível cadastrar o produto $nome", 'danger');
        }


    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro Informações da clinica</title>
    <style>
        h1{
            text-align: center;
        }
        .btn{
            margin-top: 8px;
        }
        body{
            background-color: rgb(17, 92, 79);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Cadastrar Dados da Clinica</h1>
    <div class="container">
        <form action="cadastroinformacoesdaclinica.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="">Nome da Clinica:</label>
                <input type="text" name="nome" placeholder="Informe o nome da Clinica" class="form-control">
            </div>
            <div class="col">
                <label for="">CNPJ:</label>
                <input type="text" name="cnpj" placeholder="Informe o CNPJ da Clinica" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Endereço:</label>
                <input type="text" name="endereco" placeholder="Informe o endereço" class="form-control">
            </div>
            <div class="col">
                <label for="">Telefone:</label>
                <input type="number" name= "telefone"placeholder="Informe o telefone" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" name="submit" class="btn btn-dark" value="Cadastrar">
            </div>
        </div>
        </form>
    </div>
    

    
</body>
</html>