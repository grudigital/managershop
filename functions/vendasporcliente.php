<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "select * from produtos where cliente=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../consultacliente.php?id=$id'>";
mysqli_close($conn);
?>
