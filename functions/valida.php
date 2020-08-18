<?php
session_start();
include_once("../connections/conn.php");
if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $result_usuario = "SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['nome'];
    $_SESSION['usuarioEmail'] = $resultado['email'];
    echo "<meta http-equiv='refresh' content=0;url='../index.php'>";


} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    echo "<meta http-equiv='refresh' content=0;url='../index-acesso-negado.php'>";

}
?>