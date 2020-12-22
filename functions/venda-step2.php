<?php
require ("../connections/conn.php");

$sql="INSERT INTO caixa_venda_item (codigo,produto,valorvenda,quantidade) VALUES ('$_POST[codigo]','$_POST[produto]','$_POST[valorvenda]','$_POST[quantidade]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../venda_step2.php?id=$_POST[codigo]'>";
mysqli_close($conn);
?>