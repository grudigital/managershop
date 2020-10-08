<?php
require ("../connections/conn.php");

$sql="INSERT INTO produtos_armazenamento (local) VALUES ('$_POST[local]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../armazenamento_adicionado.php'>";
mysqli_close($conn);
?>


