<?php
$id = intval($_REQUEST['id']);
$nome = $_REQUEST['nome'];
$cpf = $_REQUEST['cpf'];
$telefone = $_REQUEST['telefone'];
$whatsapp = $_REQUEST['whatsapp'];
$email = $_REQUEST['email'];
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];

require("../connections/conn.php");
$sql = "update clientes set nome='$nome',cpf='$cpf',telefone='$telefone',whatsapp='$whatsapp',email='$email',cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',estado='$estado' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../clientes_editar_atualizado.php?id=$id'>";
mysqli_close($conn);
?>
