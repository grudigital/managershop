<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$roupa_categoria = $_REQUEST['roupa_categoria'];


require("../connections/conn.php");
$sql = "update produtos set titulo='$titulo',roupa_categoria='$roupa_categoria' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../preferencias_editar.php?id=$id'>";
//echo "<meta http-equiv='refresh' content=0;url='../produtos_preferencias_editado.php?id=$id'>";
mysqli_close($conn);
?>
