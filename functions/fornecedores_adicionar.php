<?php
require ("../connections/conn.php");

$sql="INSERT INTO fornecedores (cnpjcpf,razaosocial,email,senha,telefone,whatsapp,cep,logradouro,numero,complemento,bairro,cidade,estado,observacoes,imagem,status,datacriacao) VALUES ('$_POST[cnpjcpf]','$_POST[razaosocial]','$_POST[email]',MD5('$_POST[senha]'),'$_POST[telefone]','$_POST[whatsapp]','$_POST[cep]','$_POST[logradouro]','$_POST[numero]','$_POST[complemento]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[observacoes]','$_POST[imagem]','$_POST[status]',now())";
$sql2="INSERT INTO usuarios (nome,email,senha,perfil,fornecedor,datacadastro) VALUES ('$_POST[razaosocial]','$_POST[email]',MD5('$_POST[senha]'),3,'$_POST[proximofornecedor]',now())";

if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
if (!mysqli_query($conn,$sql2))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../fornecedores_adicionado.php'>";
mysqli_close($conn);
?>