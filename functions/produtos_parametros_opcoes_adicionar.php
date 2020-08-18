<?php

require ("../connections/conn.php");

$sql="INSERT INTO produtos_parametros_opcoes (parametro,opcao) VALUES ('$_POST[parametro]','$_POST[opcao]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_parametros_opcoes_adicionado.php?id=$_POST[parametro]'>";
mysqli_close($conn);
?>


