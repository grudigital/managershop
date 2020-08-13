<?php
$id = intval($_REQUEST['id']);
include("../connections/conn.php");
//pega o codigo para fazer o redirecionamento posterior
$pegacodigo = mysqli_query($conn, "select * from caixa_venda_item where id='$id'");
$total_registros = mysqli_num_rows($pegacodigo);
while ($escrever = mysqli_fetch_array($pegacodigo)) {
    //deleta o registro
    $result = mysqli_query($conn, "delete from caixa_venda_item where id = '$id' order by id DESC");
    echo "<meta http-equiv='refresh' content=0;url='../venda_step3.php?id=" . $escrever['codigo'] . ">";
}
?>