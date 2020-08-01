<?php
$id = intval($_REQUEST['id']);
$cnpjcpf = $_REQUEST['cnpjcpf'];
$razaosocial = $_REQUEST['razaosocial'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$whatsapp = $_REQUEST['whatsapp'];
$cep = $_REQUEST['cep'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$observacoes = $_REQUEST['observacoes'];
$imagem = $_REQUEST['imagem'];
$status = $_REQUEST['status'];

require("../connections/conn.php");
$sql = "update fornecedores set cnpjcpf='$cnpjcpf',razaosocial='$razaosocial',email='$email',telefone='$telefone',whatsapp='$whatsapp',cep='$cep',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',estado='$estado',observacoes='$observacoes',imagem='$imagem',status='$status' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../fornecedores_editar_atualizado.php?id=$id'>";
mysqli_close($conn);
?>
