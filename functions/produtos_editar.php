<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$codigo = $_REQUEST['codigo'];
$peso = $_REQUEST['codigo'];
$largura = $_REQUEST['codigo'];
$altura = $_REQUEST['codigo'];
$comprimento = $_REQUEST['codigo'];
$localarmazenado = $_REQUEST['codigo'];
$valorcompra = $_REQUEST['codigo'];
$valorvenda = $_REQUEST['codigo'];
$fornecedor = $_REQUEST['codigo'];
$status = $_REQUEST['codigo'];


require("../connections/conn.php");
$sql = "update produtos set titulo='$titulo',codigo='$codigo',peso='$peso',largura='$largura',comprimento='$comprimento',localarmazenado='$localarmazenado',valorcompra='$valorcompra',valorvenda='$valorvenda',fornecedor='$fornecedor',status='$status' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos_editado.php?id=$id'>";
mysqli_close($conn);
?>
