<?php
$id = intval($_REQUEST['id']);
$codigo = $_REQUEST['codigo'];
$produto = $_REQUEST['produto'];
$desconto = $_REQUEST['desconto'];
$valorvenda = $_REQUEST['valorvenda'];

require("../connections/conn.php");
$sql = "update caixa_venda_item set codigo='$codigo',produto='$produto',desconto='$desconto',valorvenda='$valorvenda' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../venda_step3.php?id=$codigo'>";
mysqli_close($conn);
?>
