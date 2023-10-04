<?php

include('conexao.php');

$nome = $mysqli->real_escape_string($_POST['nome']);
$email = $mysqli->real_escape_string($_POST['email2']);
$senha = $mysqli->real_escape_string($_POST['senha2']);

$sql_code = "SELECT 'email' FROM usuarios WHERE '$email'";
$result = $mysqli->query($sql_code);
$row = mysqli_fetch_assoc($result);


if ($row == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: ../login.html');
    exit;
}else{

    $sql_code = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if($mysqli->query($sql_code) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }
    if (!isset($_SESSION)) {
        session_start();
    }
    header('Location: confimaCadastro.php');
}
?>