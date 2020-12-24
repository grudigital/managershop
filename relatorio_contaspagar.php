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
                            <h3 class="page-title">Painel de Gerenciamento :: Relatório :: Contas a pagar</h3>
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
                                                <p class="text-muted m-b-30 font-14">Contas a pagar</p>
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

                                                $sql = "select id, movimento, operacao, valor,cliente,vendedor,fornecedor, sum(valor) as valorpagarmes, formapagamento,parcelas,despesadescricao,status,datatransacao from caixa where movimento = '2' and operacao = '2' and MONTH(datatransacao) = '12'";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<div class='alert alert-primary' role='alert'>Dezembro (Total do mês: R$ $row[valorpagarmes]) </div>";
                                                }
                                                mysqli_close($conn);
                                                ?>

                                                <?php
                                                require("connections/conn.php");
                                                $sql = "select id, movimento, operacao, valor,cliente,vendedor,fornecedor, formapagamento,parcelas,despesadescricao,status,datatransacao from caixa where movimento = '2' and MONTH(datatransacao) = '12'";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<div class='container'>";
                                                    echo "<div class='row'>";
                                                    echo "<div class='col-md-2'>";
                                                    echo "<p style='margin-top: 15px'>";
                                                    echo "$row[datatransacao]";
                                                    echo "</p>";
                                                    echo "</div>";
                                                    echo "<div class='col-md-8'>";
                                                    echo "<p style='margin-top: 15px'>";
                                                    echo "<span style='font-weight: bold'>$row[despesadescricao]</span>";
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