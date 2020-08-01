<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>

<?php include 'includes/header.php' ?>

<body class="fixed-left">
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
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
                            <h3 class="page-title">Painel de Gerenciamento</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ==================
                 PAGE CONTENT START
                 ================== -->

            <div class="page-content-wrapper">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">25.140</span>
                                    Transações
                                </div>
                                <div class="clearfix"></div>
                                <p class=" mb-0 m-t-20 text-muted">Últimos 7 dias: R$ 22.506 <span class="pull-right"></span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">65.241</span>
                                    Consultas
                                </div>
                                <div class="clearfix"></div>
                                <p class="text-muted mb-0 m-t-20">Últimos 7 dias: 22.506 <span class="pull-right"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">14.412</span>
                                    Clientes
                                </div>
                                <div class="clearfix"></div>
                                <p class="text-muted mb-0 m-t-20">Últimos 7 dias: 1.841 <span class="pull-right"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter text-blue-grey">20.544</span>
                                    Visitantes
                                </div>
                                <div class="clearfix"></div>
                                <p class="text-muted mb-0 m-t-20">Últimos 7 dias: 2.506 <span class="pull-right"></p>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">Últimas transações</h4>

                                    <div class="table-responsive">
                                        <table class="table table-vertical mb-0">

                                            <tbody>
                                            <tr>
                                                <td>
                                                    Caio Morais
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirmado</td>
                                                <td>
                                                    R$ 14.584
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Lourival Netto
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Aguardando</td>
                                                <td>
                                                    R$ 8.541
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    10/11/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Felipe Sergio
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirmado</td>
                                                <td>
                                                    R$ 954
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    8/11/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Lourival Netto
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Expirado</td>
                                                <td>
                                                    R$ 44.584
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    7/11/2016
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    Felipe Sergio
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirmado</td>
                                                <td>
                                                    R$ 8.844
                                                    <p class="m-0 text-muted font-14"></p>
                                                </td>
                                                <td>
                                                    1/11/2016
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">Últimas consultas</h4>

                                    <div class="table-responsive">
                                        <table class="table table-vertical mb-0">

                                            <tbody>
                                            <tr>
                                                <td>#12354781</td>
                                                <td>
                                                    Felipe Sergio
                                                </td>
                                                <td><span class="badge badge-pill badge-success">Revertido</span></td>
                                                <td>
                                                    R$ 185
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#52140300</td>
                                                <td>
                                                    Lourival Netto
                                                </td>
                                                <td><span class="badge badge-pill badge-success">Revertido</span></td>
                                                <td>
                                                    R$ 1.024
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#96254137</td>
                                                <td>
                                                    Caio Morais
                                                </td>
                                                <td><span class="badge badge-pill badge-danger">Não revertido</span></td>
                                                <td>
                                                    R$ 657
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#12365474</td>
                                                <td>
                                                    Lourival Netto
                                                </td>
                                                <td><span class="badge badge-pill badge-warning">Em andamento</span></td>
                                                <td>
                                                    R$ 8.451
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#85214796</td>
                                                <td>
                                                    Felipe Sergio
                                                </td>
                                                <td><span class="badge badge-pill badge-success">Revertido</span></td>
                                                <td>
                                                    R$ 584
                                                </td>
                                                <td>
                                                    5/12/2016
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/rodape.php' ?>
    </div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>