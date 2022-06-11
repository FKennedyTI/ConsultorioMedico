<?php
	
	include_once('conexao.php');

    $codigo = $linha['codigo'];
    $nome = $linha['nome'];

	$sql = "DELETE * FROM clinica where codigo = $codigo";

        if (mysqli_query($conexao, $sql) ){
            mensagem("$nome foi exluido com sucesso!", "success");
        } else {
            mensagem("$nome Não foi exluido!", 'danger');
        }

?>
