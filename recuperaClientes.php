<?php
	$conexao = new mysqli('localhost', 'root', '123456', 'easysports');

	$sql = "SELECT * FROM CLIENTES";

	$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
	 echo "<span style='font-size: 42px;'>Cliente " . $linha['idCliente'] . ": ". $linha['pnome'] . " | ". $linha['unome'] . " | ". $linha['email'] . " | ". $linha['senha'] . " | ". $linha['endereco'] . " | ". $linha['celular'] . " | </span><br>";

       
    }

    mysqli_free_result($resultado);
} else {
    echo "Erro ao executar a consulta: " . mysqli_error($conexao);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>