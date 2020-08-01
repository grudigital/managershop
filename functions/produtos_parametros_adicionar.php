<?php
require ("../connections/conn.php");

$sql="INSERT INTO produtos_parametros (titulo,tipo) VALUES ('$_POST[titulo]','$_POST[tipo]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_parametros_adicionado.php'>";
mysqli_close($conn);
?>


