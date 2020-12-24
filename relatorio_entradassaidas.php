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

                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-primary col-4">
                                                    <a href="relatorio_entradassaidas_dezembro.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Dezembro</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-secondary col-4">
                                                    <a href="relatorio_entradassaidas_janeiro.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Janeiro</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-primary col-4">
                                                    <a href="relatorio_entradassaidas_fevereiro.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Fevereiro</p></a>
                                                </div>

                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-secondary col-4">
                                                    <a href="relatorio_entradassaidas_marco.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Março</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-primary col-4">
                                                    <a href="relatorio_entradassaidas_abril.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Abril</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-secondary col-4">
                                                    <a href="relatorio_entradassaidas_maio.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Maio</p></a>
                                                </div>

                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-primary col-4">
                                                    <a href="relatorio_entradassaidas_junho.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Junho</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-secondary col-4">
                                                    <a href="relatorio_entradassaidas_julho.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Julho</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-primary col-4">
                                                    <a href="relatorio_entradassaidas_agosto.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Agosto</p></a>
                                                </div>

                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-secondary col-4">
                                                    <a href="relatorio_entradassaidas_setembro.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Setembro</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-primary col-4">
                                                    <a href="relatorio_entradassaidas_outubro.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Outubro</p></a>
                                                </div>
                                                <div style="height: 100px; float: left; border-left:solid 10px #fff; padding-left:10px" class="alert alert-secondary col-4">
                                                    <a href="relatorio_entradassaidas_novembro.php"><p style="text-align: center; color:#222; margin-top:25px; font-weight: bold">Novembro</p></a>
                                                </div>

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