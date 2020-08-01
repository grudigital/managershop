<?php
require ("../connections/conn.php");
$sql="INSERT INTO fornecedores (cnpjcpf,razaosocial,email,telefone,whatsapp,cep,logradouro,numero,complemento,bairro,cidade,estado,observacoes,imagem,status,datacriacao) VALUES ('$_POST[cnpjcpf]','$_POST[razaosocial]','$_POST[email]','$_POST[telefone]','$_POST[whatsapp]','$_POST[cep]','$_POST[logradouro]','$_POST[numero]','$_POST[complemento]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[observacoes]','$_POST[imagem]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../fornecedores_adicionado.php'>";
mysqli_close($conn);
?>