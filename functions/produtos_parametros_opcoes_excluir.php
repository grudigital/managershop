<?php
$id = intval($_REQUEST['id']);

include("../connections/conn.php");

$result = mysqli_query($conn,"delete from produtos_parametros_opcoes where id = '$id' order by id DESC");

if ($result){

    echo "<meta http-equiv='refresh' content=0;url='../produtos_parametros_atualizado.php'>";

} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>