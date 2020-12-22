<?php
require ("../connections/conn.php");
$sql="INSERT INTO produtos (titulo,quantidade,categoria,genero,codigo,localarmazenado,valorcompra,valorvenda,fornecedor,status,datacadastro) VALUES ('$_POST[titulo]','$_POST[quantidade]','$_POST[categoria]','$_POST[genero]',FLOOR(RAND()*11111111111111),'$_POST[localarmazenado]','$_POST[valorcompra]','$_POST[valorvenda]','$_POST[fornecedor]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_adicionado.php'>";
mysqli_close($conn);
?>