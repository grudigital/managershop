<?php
$id = intval($_REQUEST['id']);
$movimento = $_REQUEST['movimento'];
$operacao = $_REQUEST['operacao'];
$valor = $_REQUEST['valor'];
$cliente = $_REQUEST['cliente'];
$vendedor = $_REQUEST['vendedor'];
$fornecedor = $_REQUEST['fornecedor'];
$formapagamento = $_REQUEST['formapagamento'];
$parcelas = $_REQUEST['parcelas'];
$despesadescricao = $_REQUEST['despesadescricao'];
$status = $_REQUEST['status'];
$datatransacao = $_REQUEST['datatransacao'];

require("../connections/conn.php");
$sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valor',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../abrircaixa_vendarealizada.php'>";
mysqli_close($conn);
?>
