<?php
require ("../connections/conn.php");
$sql="INSERT INTO clientes (nome,cpf,telefone,whatsapp,email,cep,logradouro,numero,complemento,bairro,cidade,estado,datacadastro) VALUES ('$_POST[nome]','$_POST[cpf]','$_POST[telefone]','$_POST[whatsapp]','$_POST[email]','$_POST[cep]','$_POST[logradouro]','$_POST[numero]','$_POST[complemento]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../clientes_adicionado.php'>";
mysqli_close($conn);
?>