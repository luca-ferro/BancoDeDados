<?php
	$conexao = new mysqli('localhost', 'root', '123456', 'easysports');

	$idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : "";

	$sql = "DELETE FROM clientes WHERE idCliente = '$idCliente'";

	$resultado = $conexao->query($sql) or trigger_error($conexao->error);

	if($resultado==true) {
		echo "DEU BOM CARAIO OLHA LÁ";
	} else {
		echo "deu merda.";
	}

	$conexao->close();
	header("HTTP/1.1 302 Found");
	header("Location: http://localhost/easysports/remove.php");
    exit();
?>