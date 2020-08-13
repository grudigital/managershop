<?php
require ("../connections/conn.php");

$sql="INSERT INTO caixa (movimento,operacao,cliente,status,datatransacao) VALUES ('$_POST[movimento]','$_POST[operacao]','$_POST[cliente]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
$lastid = mysqli_insert_id($conn);
echo "<meta http-equiv='refresh' content=0;url='../venda_step2.php?id=$lastid'>";
mysqli_close($conn);
?>


