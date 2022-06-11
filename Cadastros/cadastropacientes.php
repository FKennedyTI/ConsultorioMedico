<?php
    
    // copiando o código do arquivo informado entre parênteses
    // nesse arquivo.
    include_once('conexao.php');
    
    // capturando uma informação enviada por um formulário utilizando
    // o método de envio POST no qual está pegando um campo que tenha
    // um name igual a submit
    
    if ( isset($_POST['submit']) ) {
        
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $sexo = $_POST['sexo'];
        $convenio = $_POST['convenio'];


        $sql = "INSERT INTO paciente
                    (nome, endereco, telefone, cpf, rg, sexo, convenio )
                VALUES 
                    ('$nome', '$endereco, '$telefone', '$cpf', '$rg', '$sexo', '$convenio')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("$nome cadastrado com sucesso!", "success");
        } else {
            mensagem("não foi possível cadastrar o produto $nome", 'danger');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastrar Pacientes</title>
    <style>
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
    <div class="container">
    <h1 class="text-center">Cadastrar Pacientes</h1>
    <form action="cadastropacientes.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="">Nome:</label>
                <input type="text" name="nome" placeholder="Digite nome do Paciente" class="form-control">
            </div>
            <div class="col">
                <label for="">Endereço:</label>
                <input type="text" name="endereco" placeholder="Endereço do Paciente" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Telefone:</label>
                <input type="text" name="telefone"  placeholder="Digite numero de telefone" class="form-control">
            </div>
            <div class="col">
                <label>CPF:</label>
                <input type="text" name="cpf"  placeholder="Digite CPF do paciente" class="form-control">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">RG:</label>
                <input type="text" name="rg" placeholder="Digite o RG do paciente" class="form-control">


            </div>
            <div class="col">
                <label for="">Sexo:</label>
                <select name="sexo" id="" class="form-select">
                    <option value="">Masculino</option>
                    <option value="">Feminino</option>
                </select>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label for="">Paciente tem convênio:</label>
                <select name="convenio" id="" class="form-select">
                    <option value="">Sim</option>
                    <option value="">Não</option>
                </select>
            
        </div>
        <div class="col">

        </div>
        </div>
        <div class="row">
            <div class="col">
            <input type="submit" name="submit" value="Cadastrar" class="btn btn-dark">
        </div>
        </div>
        </form>
    </div>
    
</body>
</html>