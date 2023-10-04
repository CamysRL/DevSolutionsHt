<?php
if (!isset($_SESSION)) {
	session_start();
}

include('conexao.php');
include('index.php');

$email = $mysqli->real_escape_string($_POST['email2']);
$senha = $mysqli->real_escape_string($_POST['senha2']);
$nome = $mysqli->real_escape_string($_POST['nome']);

$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

$quantidade = $sql_query->num_rows;

if($quantidade == 1) {
	
	$usuario = $sql_query->fetch_assoc();

	if(!isset($_SESSION)) {
		session_start();
	}

	$_SESSION['id'] = $usuario['id'];
	$_SESSION['nome'] = $usuario['nome'];

	header("Location: painel.php");

	} else {
		echo "Erro ao logar";
		header('Location: ../index.html');
		exit();
	}
?>
