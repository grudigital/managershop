<?php
require ("../connections/conn.php");
$sql="INSERT INTO caixa (movimento,operacao,valor,vendedor,despesadescricao,status,datatransacao) VALUES ('$_POST[movimento]','$_POST[operacao]','$_POST[valor]','$_POST[vendedor]','$_POST[despesadescricao]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../sangria_adicionada.php'>";
mysqli_close($conn);
?>