<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$categoria = $_REQUEST['categoria'];
$genero = $_REQUEST['genero'];
$codigo = $_REQUEST['codigo'];
$localarmazenado = $_REQUEST['localarmazenado'];
$valorcompra = $_REQUEST['valorcompra'];
$valorvenda = $_REQUEST['valorvenda'];
$status = $_REQUEST['status'];

require("../connections/conn.php");
$sql = "update produtos set titulo='$titulo',categoria='$categoria',genero='$genero',codigo='$codigo',localarmazenado='$localarmazenado',valorcompra='$valorvenda',valorvenda='$valorvenda',status='$status' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_editado.php?id=$id'>";
mysqli_close($conn);
?>
