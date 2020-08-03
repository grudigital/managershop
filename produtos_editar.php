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
                            <h3 class="page-title">Painel de Gerenciamento :: Produtos :: Editar</h3>
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
                                <form class="card-body" action="functions/produtos_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Produtos</h4>
                                                <p class="text-muted m-b-30 font-14">Editar produto</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,titulo,codigo,peso,largura,altura,comprimento,localarmazenado,valorcompra,valorvenda,fornecedor,status FROM produtos where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Titulo</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='titulo' type='text' value='$row[titulo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Codigo</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='codigo' type='number' value='$row[codigo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Peso</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='peso' type='number' value='$row[peso]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Largura</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='largura' type='number' value='$row[largura]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Altura</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='altura' type='number' value='$row[altura]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Comprimento</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='comprimento' type='number' value='$row[comprimento]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Local armazenado</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='localarmazenado' type='text' value='$row[localarmazenado]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Valor de compra</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='valorcompra' type='number' value='$row[valorcompra]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Valor de venda</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='valorvenda' type='number' value='$row[valorvenda]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Fornecedor</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='fornecedor' type='text' value='$row[fornecedor]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Status</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='status' type='text' value='$row[status]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                    }
                                    mysqli_close($conn);
                                    ?>


                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Atualizar
                                                informações
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
</body>
</html>