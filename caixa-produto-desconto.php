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
                            <h3 class="page-title">Painel de Gerenciamento :: Vendas :: Adicionar</h3>
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
                                <form class="card-body" action="functions/venda-desconto.php" enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Vendas</h4>
                                                <p class="text-muted m-b-30 font-14">Processar venda / Selecionar
                                                    desconto</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select cvi.id cviid, cvi.codigo cvicodigo, cvi.produto cviproduto, cvi.desconto cvidesconto, cvi.valorvenda cvivalorvenda, p.id pid, p.titulo ptitulo, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda FROM caixa_venda_item as cvi inner join produtos as p on cvi.produto = p.id where cvi.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Produto</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "$row[ptitulo]";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Valor de venda</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "$row[pvalorvenda]";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Desconto</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input type='text' class='form-control' name='desconto' value='$row[cvidesconto]'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<input type='hidden' value='$pegaid' name='id'>";
                                        echo "<input type='hidden' value='$row[cvicodigo]' name='codigo'>";
                                        echo "<input type='hidden' value='$row[cviproduto]' name='produto'>";
                                        echo "<input type='hidden' value='$row[cvivalorvenda]' name='valorvenda'>";

                                    }
                                    mysqli_close($conn);
                                    ?>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-secondary'>
                                                Aplicar desconto
                                            </button>
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
<script type="text/javascript" src="assets/js/customproduto.js"></script>
</body>
</html>