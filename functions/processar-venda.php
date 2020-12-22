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

//seleciona os produtos comprados
$sqlselecionaprodutos = "select c.id cid, cvi.codigo cvicodigo, cvi.produto cviproduto, cvi.quantidade cviquantidade, p.id pid, p.quantidade pquantidade from caixa as c inner join caixa_venda_item as cvi on c.id = cvi.codigo left join produtos as p on cvi.produto = p.id where c.id = '$id'";
$resultselecionaprodutos = mysqli_query($conn, $sqlselecionaprodutos);
while ($rowselecionaprodutos = mysqli_fetch_assoc($resultselecionaprodutos)) {

    if($rowselecionaprodutos['pquantidade'] == 1){
        $quantidadeprodutoscomprados = $rowselecionaprodutos['cviquantidade'];
        $quantidadeprodutosdisponiveis = $rowselecionaprodutos['pquantidade'];
        $sqlatualizaprodutos = "update produtos set status= '3',quantidade = ($quantidadeprodutosdisponiveis - $quantidadeprodutoscomprados) where id IN ('$rowselecionaprodutos[pid]')";
        if (!mysqli_query($conn,$sqlatualizaprodutos))
        {
            die('Error: ' . mysqli_error($conn));
        }
    }
    else if ($rowselecionaprodutos['pquantidade'] == $rowselecionaprodutos['cviquantidade']) {
        $quantidadeprodutoscomprados = $rowselecionaprodutos['cviquantidade'];
        $quantidadeprodutosdisponiveis = $rowselecionaprodutos['pquantidade'];
        $sqlatualizaprodutos = "update produtos set status= '3',quantidade = ($quantidadeprodutosdisponiveis - $quantidadeprodutoscomprados) where id IN ('$rowselecionaprodutos[pid]')";
        if (!mysqli_query($conn,$sqlatualizaprodutos))
        {
            die('Error: ' . mysqli_error($conn));
        }
    }else if ($rowselecionaprodutos['pquantidade'] > $rowselecionaprodutos['cviquantidade']){
        $quantidadeprodutoscomprados = $rowselecionaprodutos['cviquantidade'];
        $quantidadeprodutosdisponiveis = $rowselecionaprodutos['pquantidade'];
        $sqlatualizaprodutos = "update produtos set quantidade = ($quantidadeprodutosdisponiveis - $quantidadeprodutoscomprados) where id IN ('$rowselecionaprodutos[pid]')";
        if (!mysqli_query($conn,$sqlatualizaprodutos))
        {
            die('Error: ' . mysqli_error($conn));
        }
    }



    $sqlatualizastatussemestoque = "update produtos set status = '3' where quantidade = '0' or quantidade = null";
    if (!mysqli_query($conn,$sqlatualizastatussemestoque))
    {
        die('Error: ' . mysqli_error($conn));
    }


}

echo "<meta http-equiv='refresh' content=0;url='../abrircaixa_vendarealizada.php'>";
mysqli_close($conn);
?>