<?php
$id = intval($_REQUEST['id']);
$local = $_REQUEST['local'];

require("../connections/conn.php");
$sql = "update produtos_armazenamento set local='$local' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../armazenamento_atualizado.php'>";
mysqli_close($conn);
?>
