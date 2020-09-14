<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "select * from caixa where vendedor=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../consultavendedor.php?id=$id'>";
mysqli_close($conn);
?>
