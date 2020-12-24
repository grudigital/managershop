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
                            <h3 class="page-title">Painel de Gerenciamento :: Clientes :: Compras realizadas</h3>
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
                                                <h4 class="mt-0 header-title">Clientes</h4>
                                                <p class="text-muted m-b-30 font-14">Visualizar compras</p>
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

                                                $pegaid = (int)$_GET['id'];
                                                $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor ccliente, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, cvi.id cviid, cvi.codigo cvicodigo, cvi.produto cviproduto, cvi.quantidade cviquantidade, cvi.desconto cvidesconto, cvi.valorvenda cvivalorvenda, cvi.datatransacao cvidatatransacao, p.id pid, p.titulo ptitulo, p.quantidade pquantidade, p.categoria pcategoria, p.codigo pcodigo, p.genero pgenero, p.valorcompra pvalorcompra, sum(cvi.valorvenda) as valortotalvenda, p.valorvenda pvalorvenda, p.status pstatus, p.fornecedor pfornecedor, p.imagem pimagem, p.datacadastro pdatacadastro from caixa as c inner join caixa_venda_item as cvi on c.id = cvi.codigo left join produtos as p on p.id = cvi.produto where c.cliente = '$pegaid'";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<div class='alert alert-primary' role='alert'>Dezembro (Total em compras: R$ $row[valortotalvenda]) </div>";
                                                }
                                                mysqli_close($conn);
                                                ?>

                                                <?php
                                                require("connections/conn.php");

                                                $pegaid = (int)$_GET['id'];
                                                $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor ccliente, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, cvi.id cviid, cvi.codigo cvicodigo, cvi.produto cviproduto, cvi.quantidade cviquantidade, cvi.desconto cvidesconto, cvi.valorvenda cvivalorvenda, cvi.datatransacao cvidatatransacao, p.id pid, p.titulo ptitulo, p.quantidade pquantidade, p.categoria pcategoria, p.codigo pcodigo, p.genero pgenero, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.status pstatus, p.fornecedor pfornecedor, p.imagem pimagem, p.datacadastro pdatacadastro from caixa as c inner join caixa_venda_item as cvi on c.id = cvi.codigo left join produtos as p on p.id = cvi.produto where c.cliente = '$pegaid' order by cvi.datatransacao desc";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    echo "<div class='container'>";
                                                    echo "<div class='row'>";
                                                    echo "<div class='col-md-2'>";
                                                    echo "<p style='margin-top: 15px'>";
                                                    echo "$row[cvidatatransacao]";
                                                    echo "</p>";
                                                    echo "</div>";
                                                    echo "<div class='col-md-2'><img style='width: 60px; height:60px' src='uploads/produtos/$row[pimagem]'></div>";
                                                    echo "<div class='col-md-8'>";
                                                    echo "<p style='margin-top: 15px'>";

                                                    echo "<span style='font-weight: bold'>Item: $row[ptitulo]</span> - Valor pago: R$ $row[cvivalorvenda]";
                                                    if ($row['cvidesconto'] != null) {
                                                        echo "(desconto de : R$ $row[cvidesconto])";
                                                    }
                                                    echo "";
                                                    echo "</p>";


                                                    echo "</div>";
                                                    echo "</div>";
                                                    echo "</div>";


                                                    echo "<hr>";


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