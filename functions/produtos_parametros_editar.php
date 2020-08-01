<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$tipo = $_REQUEST['tipo'];


require("../connections/conn.php");
$sql = "update produtos_parametros set titulo='$titulo',tipo='$tipo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_parametros_editar_atualizado.php?id=$id'>";
mysqli_close($conn);
?>
