<?php
    
    // copiando o código do arquivo informado entre parênteses
    // nesse arquivo.
    include_once('conexao.php');
    
    // capturando uma informação enviada por um formulário utilizando
    // o método de envio POST no qual está pegando um campo que tenha
    // um name igual a submit
    
    if ( isset($_POST['submit']) ) {
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];


    
        $sql = "INSERT INTO secretaria
                    (nome, cpf, rg, telefone, endereco, sexo)
                VALUES 
                    ('$nome', '$cpf', '$rg', '$telefone', '$endereco', '$sexo')";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color: rgb(17, 92, 79);
            color: white;
        }

        .btn{
            margin-top:8px;
        }
    </style>
    <title>Cadastro Consultório Médico</title>
</head>
<body>
    <h1 class="text-center">Cadastro Secretária</h1>
    <div class="container">
        <form action="cadastrosecretaria.php" method="POST">
            <div class="row">
            <div class="col">
                <label for="">Nome:</label>
                <input type="text" name="nome" placeholder="Informe o Nome" class="form-control">
            </div>
            <div class="col">
                <label for="">CPF:</label>
                <input type="text" name="cpf" placeholder="Informe o CPF"class="form-control">
            </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">RG:</label>
                    <input type="text" name="rg" placeholder="Informe o RG" class="form-control">
                </div>
                <div class="col">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone"placeholder="Informe o Telefone" class="form-control">
                 </div>
                 </div>
                 <div class="row">
                     <div class="col">
                         <label for="">Cidade:</label>
                         <input type="text" name="cidade"placeholder="Informe a Cidade" class="form-control">
                     </div>
                     <div class="col">
                         <label for="">endereco:</label>
                         <input type="text" name="endereco" placeholder="Informe o endereco" class="form-control">
                     </div>

                 </div>
                 <div class="row">
                    <div class="col">
                        <label for="">Sexo:</label>
                        <select name="sexo" id="" class="form-control">
                            <option value="">Masculino</option>
                            <option value="">Feminino</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Logradouro:</label>
                        <input type="text" nome="logradouro" placeholder="Informe o Logradouro" class="form-control">
                    </div>
                
                 </div>
                 <div class="row">
                     <div class="col">
                         <label for="">Senha:</label>
                         <input type="password" name="senha" placeholder="Digite sua senha" class="form-control">
                     </div>
                     <div class="col"></div>
                 </div>
                 <div class="row">
                     <div class="col">
                        <input type='submit' name="submit" value="Cadastrar" class="btn btn-dark">
                     </div>
                     <div class="col"></div>
                 </div>

        </div>
    </form>
    </div>





    
</body>
</html>