<?php
	$conexao = new mysqli('localhost', 'root', '123456', 'easysports');

	$pnome = isset($_POST['pnome']) ? $_POST['pnome'] : "";
	$unome = isset($_POST['unome']) ? $_POST['unome'] : "";
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$senha = isset($_POST['senha']) ? $_POST['senha'] : "";
	$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
	$celular = isset($_POST['celular']) ? $_POST['celular'] : "";

	$sql = "INSERT INTO clientes ( pnome, unome, email, senha, endereco, celular) values ('$pnome','$unome','$email','$senha','$endereco','$celular')";

	$resultado = $conexao->query($sql) or trigger_error($conexao->error);

	if($resultado==true) {
		echo "DEU BOM CARAIO OLHA LÁ";
	} else {
		echo "deu merda.";
	}

	$conexao->close();

	header("HTTP/1.1 302 Found");
	header("Location: http://localhost/easysports/registroMusica.php");
    exit();
?>