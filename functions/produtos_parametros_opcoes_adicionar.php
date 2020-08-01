<?php

require ("../connections/conn.php");

$sql="INSERT INTO produtos_parametros_opcoes (produto,opcao) VALUES ('$_POST[produto]','$_POST[opcao]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_parametros_opcoes_adicionado.php?id=$_POST[produto]'>";
mysqli_close($conn);
?>


