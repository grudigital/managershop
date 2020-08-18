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
                            <h3 class="page-title">Painel de Gerenciamento :: Produtos / Parâmetros</h3>
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
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Produtos</h4>
                                                <p class="text-muted m-b-30 font-14">Listagem de parametros de produtos.</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">
                                                <?php
                                                require("connections/conn.php");

                                                $pegaid = (int)$_GET['id'];
                                                $sql = "select * FROM produtos_parametros where id = '$pegaid'";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<a href='produtos_parametros_opcoes_adicionar.php?id=$row[id]'>";
                                                    echo "<button style='float: right' type='button' class='btn btn-success'>
                                                        Adicionar
                                                    </button>";
                                                    echo "</a>";

                                                }
                                                mysqli_close($conn);
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php include 'includes/produtos-parametros-opcoes-lista.php' ?>
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