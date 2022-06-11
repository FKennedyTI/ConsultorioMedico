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
        $crm = $_POST['crm'];
        $telefone= $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
    
        $sql = "INSERT INTO medico
                    (nome, cpf, crm, telefone, endereco, sexo)
                VALUES 
                    ('$nome', '$cpf', '$crm', '$telefone', '$endereco', '$sexo')";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            mensagem("$nome cadastrado(a) com sucesso!", "success");
        } else {
            mensagem("não foi possível cadastrar o produto $nome", 'danger');
        }


    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Médicos</title>
    <style>
      body {
        background-color: rgb(17, 92, 79);
            color: white;
      }
      .btn {
        margin-top: 8px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Cadastro de Médicos</h1>
      <form action="CadastroMedicos.php" method="POST">
          <div class="row">
            <div class="col">
              <label>Nome</label>
              <input
                type="text"
                name="nome"
                placeholder="Informe o nome do médico"
                class="form-control"
              />
            </div>
            <div class="col">
              <label>CPF</label>
              <input type="text" name="cpf" placeholder="Informe o CPF" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label>RG</label>
              <input
                type="number"
                name="rg"
                placeholder="Informe o RG (identidade)"
                class="form-control"
              />
            </div>
            <div class="col">
              <label>CRM</label>
              <input type="text" name="crm" placeholder="Informe o CRM" class="form-control" />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label>Telefone</label>
              <input
                type="number"
                name="telefone"
                placeholder="Informe o telefone"
                class="form-control"
              />
            </div>
            <div class="col">
              <label>Endereço</label>
              <input
                type="text"
                name="endereco"
                placeholder="Informe o endereço"
                class="form-control"
              />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label>Sexo</label>
              <input
                type="text"
                name="sexo"
                placeholder="Informe o sexo"
                class="form-control"
              />
            </div>
            <div class="col">
              <label>Senha de acesso</label>
              <input
                type="password"
                name="senha"
                placeholder="Digite sua senha"
                class="form-control"
              />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="submit" name="submit" class="btn btn-dark" value="cadastrar" />
            </div>
          </div>
      <form>

    </div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
