<?php
$id = intval($_REQUEST['id']);

$titulo = $_REQUEST['titulo'];
$roupa_categoria = $_REQUEST['roupa_categoria'];
$roupa_cor = $_REQUEST['roupa_cor'];
$roupa_tamanho = $_REQUEST['roupa_tamanho'];
$roupa_marca = $_REQUEST['roupa_marca'];
$roupa_condicao = $_REQUEST['roupa_condicao'];
$roupa_higienizacao = $_REQUEST['roupa_higienizacao'];

$calcado_numero = $_REQUEST['calcado_numero'];
$calcado_cor = $_REQUEST['calcado_cor'];
$calcado_marca = $_REQUEST['calcado_marca'];
$calcado_categoria = $_REQUEST['calcado_categoria'];
$calcado_condicao = $_REQUEST['calcado_condicao'];
$calcado_higienizacao = $_REQUEST['calcado_higienizacao'];
$outros_categoria = $_REQUEST['outros_categoria'];
$outros_condicao = $_REQUEST['outros_condicao'];
$outros_higienizacao = $_REQUEST['outros_higienizacao'];

require("../connections/conn.php");
$sql = "update produtos set titulo='$titulo',roupa_categoria='$roupa_categoria',roupa_cor='$roupa_cor',roupa_tamanho='$roupa_tamanho',roupa_marca='$roupa_marca',roupa_condicao='$roupa_condicao',roupa_higienizacao='$roupa_higienizacao',calcado_numero='$calcado_numero',calcado_cor='$calcado_cor',calcado_marca='$calcado_marca',calcado_categoria='$calcado_categoria',calcado_condicao='$calcado_condicao',calcado_higienizacao='$calcado_higienizacao',outros_categoria='$outros_categoria',outros_condicao='$outros_condicao',outros_higienizacao='$outros_higienizacao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../preferencias_editar.php?id=$id'>";
//echo "<meta http-equiv='refresh' content=0;url='../produtos_preferencias_editado.php?id=$id'>";
mysqli_close($conn);
?>