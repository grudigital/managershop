<?php
require ("../connections/conn.php");
$sql="INSERT INTO produtos (titulo,codigo,peso,largura,altura,comprimento,localarmazenado,valorcompra,valorvenda,fornecedor,status,datacadastro) VALUES ('$_POST[titulo]','$_POST[codigo]','$_POST[peso]','$_POST[largura]','$_POST[altura]','$_POST[comprimento]','$_POST[localarmazenado]','$_POST[valorcompra]','$_POST[valorvenda]','$_POST[fornecedor]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_adicionado.php'>";
mysqli_close($conn);
?>