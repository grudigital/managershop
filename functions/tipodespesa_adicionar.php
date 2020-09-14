<?php
require ("../connections/conn.php");
$sql="INSERT INTO despesa (despesa) VALUES ('$_POST[despesa]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../tipodespesa.php'>";
mysqli_close($conn);
?>