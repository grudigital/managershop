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

if($_REQUEST['parcelas'] == 0 || $_REQUEST['parcelas'] == 1){
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valor',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
}




else if($_REQUEST['parcelas'] == 2){

    $valordividido2 = ($_REQUEST['valor'] / 2);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido2',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido2','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";

    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

}

else if($_REQUEST['parcelas'] == 3){

    $valordividido3 = ($_REQUEST['valor'] / 3);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido3',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido3','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido3','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 4){

    $valordividido4 = ($_REQUEST['valor'] / 4);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido4',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido4','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido4','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido4','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 5){

    $valordividido5 = ($_REQUEST['valor'] / 5);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido5',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido5','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido5','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido5','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido5','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 6){

    $valordividido6 = ($_REQUEST['valor'] / 6);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido6',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido6','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido6','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido6','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido6','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido6','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 7){

    $valordividido7 = ($_REQUEST['valor'] / 7);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido7',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido7','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido7','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido7','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido7','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido7','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela7 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido7','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 180 day)";
    if (!mysqli_query($conn,$sqlparcela7))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 8){

    $valordividido8 = ($_REQUEST['valor'] / 8);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido8',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela7 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 180 day)";
    if (!mysqli_query($conn,$sqlparcela7))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela8 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido8','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 210 day)";
    if (!mysqli_query($conn,$sqlparcela8))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 9){

    $valordividido9 = ($_REQUEST['valor'] / 9);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido9',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela7 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 180 day)";
    if (!mysqli_query($conn,$sqlparcela7))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela8 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 210 day)";
    if (!mysqli_query($conn,$sqlparcela8))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela9 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido9','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 240 day)";
    if (!mysqli_query($conn,$sqlparcela9))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 10){

    $valordividido10 = ($_REQUEST['valor'] / 10);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido10',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela7 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 180 day)";
    if (!mysqli_query($conn,$sqlparcela7))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela8 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 210 day)";
    if (!mysqli_query($conn,$sqlparcela8))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela9 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 240 day)";
    if (!mysqli_query($conn,$sqlparcela9))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela10 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido10','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 270 day)";
    if (!mysqli_query($conn,$sqlparcela10))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 11){

    $valordividido11 = ($_REQUEST['valor'] / 11);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido11',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela7 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 180 day)";
    if (!mysqli_query($conn,$sqlparcela7))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela8 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 210 day)";
    if (!mysqli_query($conn,$sqlparcela8))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela9 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 240 day)";
    if (!mysqli_query($conn,$sqlparcela9))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela10 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 270 day)";
    if (!mysqli_query($conn,$sqlparcela10))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela11 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido11','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 300 day)";
    if (!mysqli_query($conn,$sqlparcela11))
    {
        die('Error: ' . mysqli_error($conn));
    }
}

else if($_REQUEST['parcelas'] == 12){

    $valordividido12 = ($_REQUEST['valor'] / 12);
    $sql = "update caixa set movimento='$movimento',operacao='$operacao',valor='$valordividido12',cliente='$cliente',vendedor='$vendedor',fornecedor='$fornecedor',formapagamento='$formapagamento',parcelas='$parcelas',despesadescricao='$despesadescricao',status='$status',datatransacao='$datatransacao' where id=$id";
    if (!mysqli_query($conn,$sql))
    {
        die('Error: ' . mysqli_error($conn));
    }
    $sqlparcela2 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 30 day)";
    if (!mysqli_query($conn,$sqlparcela2))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela3 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 60 day)";
    if (!mysqli_query($conn,$sqlparcela3))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela4 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 90 day)";
    if (!mysqli_query($conn,$sqlparcela4))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela5 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 120 day)";
    if (!mysqli_query($conn,$sqlparcela5))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela6 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 150 day)";
    if (!mysqli_query($conn,$sqlparcela6))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela7 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 180 day)";
    if (!mysqli_query($conn,$sqlparcela7))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela8 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 210 day)";
    if (!mysqli_query($conn,$sqlparcela8))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela9 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 240 day)";
    if (!mysqli_query($conn,$sqlparcela9))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela10 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 270 day)";
    if (!mysqli_query($conn,$sqlparcela10))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela11 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 300 day)";
    if (!mysqli_query($conn,$sqlparcela11))
    {
        die('Error: ' . mysqli_error($conn));
    }

    $sqlparcela12 = "insert into caixa (movimento,operacao,valor,cliente,vendedor,fornecedor,formapagamento,parcelas,despesadescricao,status,datatransacao) values ('$movimento','$operacao','$valordividido12','$cliente','$vendedor','$fornecedor','$formapagamento','$parcelas','$despesadescricao','$status',current_date + interval 330 day)";
    if (!mysqli_query($conn,$sqlparcela12))
    {
        die('Error: ' . mysqli_error($conn));
    }
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