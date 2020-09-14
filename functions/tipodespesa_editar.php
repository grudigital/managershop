<?php
$id = intval($_REQUEST['id']);
$despesa = $_REQUEST['despesa'];

require("../connections/conn.php");
$sql = "update despesa set despesa='$despesa' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../tipodespesa.php'>";
mysqli_close($conn);
?>
