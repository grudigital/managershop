<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>
<?php include 'includes/header.php' ?>
<body class="fixed-left">
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
<div id="wrapper">
    <?php include 'includes/menu.php' ?>
    <div class="content-page">
        <div class="content">
            <div class="topbar">
                <nav class="navbar-custom">
                    <!-- Page title -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Painel de Gerenciamento :: Relatório :: Entradas x Saídas</h3>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <form class="card-body" action="#" enctype="multipart/form-data" method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Relatórios</h4>
                                                <p class="text-muted m-b-30 font-14">Entradas x Saídas</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">

                                                <?php
                                                require("connections/conn.php");

                                                $sql = "select id, movimento, operacao, valor,cliente,vendedor,fornecedor, sum(valor) as valorpagarmes, formapagamento,parcelas,despesadescricao,status,datatransacao from caixa where movimento = '2' and operacao = '2' and MONTH(datatransacao) = '07'";
                                                $result = mysqli_query($conn, $sql);


                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $sqlentradas = "select id, movimento, operacao, valor,cliente,vendedor,fornecedor, sum(valor) as valorrecebidomes, formapagamento,parcelas,despesadescricao,status,datatransacao from caixa where movimento = '1' and MONTH(datatransacao) = '07'";
                                                    $resultentradas = mysqli_query($conn, $sqlentradas);
                                                    while ($rowentradas = mysqli_fetch_assoc($resultentradas)) {
                                                        $totalmes = ($rowentradas['valorrecebidomes'] - $row['valorpagarmes']);
                                                        if($totalmes < '0'){
                                                            echo "<div class='alert alert-danger' role='alert'>Julho (Entradas: R$ $rowentradas[valorrecebidomes] - Saídas: R$ $row[valorpagarmes] - <span style='font-weight: bold'> Balanço do mês: R$ $totalmes </span>)</div>";
                                                        }
                                                        else{
                                                            echo "<div class='alert alert-primary' role='alert'>Julho (Entradas: R$ $rowentradas[valorrecebidomes] - Saídas: R$ $row[valorpagarmes] - <span style='font-weight: bold'> Balanço do mês: R$ $totalmes </span>)</div>";
                                                        }


                                                    }
                                                }
                                                mysqli_close($conn);
                                                ?>

                                                <?php
                                                require("connections/conn.php");
                                                $sql = "select id, movimento, operacao, valor,cliente,vendedor,fornecedor, formapagamento,parcelas,despesadescricao,status,datatransacao from caixa where MONTH(datatransacao) = '07'";
                                                $result = mysqli_query($conn, $sql);


                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    if ($row['movimento'] == 2) {
                                                        echo "<div class='container'>";
                                                        echo "<div role='alert' class='row alert alert-danger'>";
                                                        echo "<div class='col-md-2'>";
                                                        echo "<p style='margin-top: 15px'>";
                                                        echo "$row[datatransacao]";
                                                        echo "</p>";
                                                        echo "</div>";
                                                        echo "<div class='col-md-8'>";
                                                        echo "<p style='margin-top: 15px; text-align: center'>";
                                                        echo "<span style='font-weight: bold'>$row[despesadescricao]</span>";
                                                        echo "</p>";
                                                        echo "</div>";
                                                        echo "<div class='col-md-2'>";
                                                        echo "<p style='margin-top: 15px; text-align: right'>";
                                                        echo "<span> Valor: R$ $row[valor]</span>";
                                                        echo "</p>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "<hr>";
                                                    } else if ($row['movimento'] == 1) {

                                                        $idcliente = $row['cliente'];
                                                        $sqlcliente = "select * from clientes where id = '$idcliente'";
                                                        $resultcliente = mysqli_query($conn, $sqlcliente);
                                                        while ($rowcliente = mysqli_fetch_assoc($resultcliente)) {


                                                            echo "<div class='container'>";
                                                            echo "<div role='alert' class='row alert alert-success'>";
                                                            echo "<div class='col-md-2'>";
                                                            echo "<p style='margin-top: 15px'>";
                                                            echo "$row[datatransacao]";
                                                            echo "</p>";
                                                            echo "</div>";
                                                            echo "<div class='col-md-8'>";
                                                            echo "<p style='text-align: center;margin-top: 15px'>";
                                                            echo "<span style='font-weight: bold;'>$rowcliente[nome]</span>";
                                                            echo "</p>";
                                                            echo "</div>";
                                                            echo "<div class='col-md-2'>";
                                                            echo "<p style='margin-top: 15px; text-align: right'>";
                                                            if ($row['formapagamento'] == 3) {
                                                                echo "<span> Valor: R$ $row[valor] <br/>por parcela</span>";
                                                            } else if ($row['formapagamento'] == 4) {
                                                                echo "<span> Valor: R$ $row[valor] <br/>por parcela</span>";
                                                            } else {
                                                                echo "<span> Valor: R$ $row[valor]</span>";
                                                            }


                                                            echo "</p>";
                                                            echo "</div>";

                                                            $sqlprodutocomprado = "select c.id cid, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.status cstatus, (cvi.valorvenda - p.valorcompra) as lucroproduto, cvi.id cviid, cvi.codigo cvicodigo, cvi.produto cviproduto, cvi.quantidade cviquantidade, cvi.desconto cvidesconto, cvi.valorvenda cvivalorvenda, p.id pid, p.titulo ptitulo, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda from caixa as c inner join caixa_venda_item as cvi on c.id = cvi.codigo left join produtos as p on cvi.produto = p.id where c.id = $row[id] ";
                                                            $resultprodutocomprado = mysqli_query($conn, $sqlprodutocomprado);
                                                            while ($rowprodutocomprado = mysqli_fetch_assoc($resultprodutocomprado)) {

                                                                echo "<div class='col-md-12'>";
                                                                echo "<p>. $rowprodutocomprado[ptitulo] - Valor de venda: R$ $rowprodutocomprado[cvivalorvenda] - (Custo do produto: R$ $rowprodutocomprado[pvalorcompra] - Lucro de R$ $rowprodutocomprado[lucroproduto] ) </p>";
                                                                echo "</div>";


                                                            }


                                                            if ($row['formapagamento'] == 1) {
                                                                echo "<div class='container'>";
                                                                echo "<p>Forma de pagamento: Dinheiro</p>";
                                                                echo "</div>";
                                                            } else if ($row['formapagamento'] == 2) {
                                                                echo "<div class='container'>";
                                                                echo "<p>Forma de pagamento: Débito</p>";
                                                                echo "</div>";
                                                            } else if ($row['formapagamento'] == 3) {
                                                                echo "<div class='container'>";
                                                                echo "<p>Forma de pagamento: Crédito ($row[parcelas] parcelas)</p>";
                                                                echo "</div>";
                                                            } else if ($row['formapagamento'] == 3) {
                                                                echo "<div class='container'>";
                                                                echo "<p>Forma de pagamento: Cheque ($row[parcelas] parcelas)</p>";
                                                                echo "</div>";
                                                            }

                                                            echo "</div>";
                                                            echo "</div>";
                                                            echo "<hr>";
                                                        }
                                                    }


                                                }
                                                mysqli_close($conn);
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>
    <?php include 'includes/rodape.php' ?>
</div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>