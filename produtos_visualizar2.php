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
                            <h3 class="page-title">Painel de Gerenciamento :: Produtos :: Visualizar</h3>
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
                                <form class="card-body" action="#"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Produtos</h4>
                                                <p class="text-muted m-b-30 font-14">Visualizar produto</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    //listagem da tabela produtos
                                    $sql = "select p.id pid, p.titulo ptitulo,p.categoria pcategoria,p.codigo pcodigo,p.genero pgenero,p.peso ppeso,p.largura plargura,p.altura paltura,p.comprimento pcomprimento, p.localarmazenado plocalarmazenado, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, p.status pstatus, p.imagem pimagem,p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria, p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pc.id pcid, pc.categoria pccategoria, f.id fid, f.razaosocial frazaosocial, pa.id paid, pa.local palocal, ps.id psid, ps.status psstatus from produtos as p inner join produtos_categorias as pc on p.categoria = pc.id left join fornecedores as f on p.fornecedor = f.id left join produtos_armazenamento as pa on p.localarmazenado = pa.id left join produtos_status as ps on p.status = ps.id where p.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);
                                    //listagem da tabela produtos

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[pid]'
                                                   id='example-text-input'>";

                                        if ($row['ptitulo'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Titulo</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[ptitulo]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pccategoria'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pccategoria]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }



                                        if ($row['ppeso'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Peso</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[ppeso]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['plargura'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Largura</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[plargura]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['paltura'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Altura</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[paltura]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcomprimento'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Comprimento</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcomprimento]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }



                                        if ($row['pvalorcompra'] == null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Valor de compra</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pvalorcompra]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        echo "<hr>";
                                        echo "<div class='container'>";
                                        echo "<div class='row'>";
                                        echo "<div class='col-4'>";
                                        echo "<h4 class='mt-0 header-title'>Parâmetros do produto</h4>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";


                                        if ($row['proupacategoria'] == null || $row['proupacategoria'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria da peça</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[proupacategoria]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['proupacor'] == null || $row['proupacor'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Cor da peça</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[proupacor]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['proupatamanho'] == null || $row['proupatamanho'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Tamanho da peça</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[proupatamanho]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['proupamarca'] == null || $row['proupamarca'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Marca da peça</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[proupamarca]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['proupacondicao'] == null || $row['proupacondicao'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Condição da peça</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[proupacondicao]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['proupahigienizacao'] == null || $row['proupahigienizacao'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Higienização da peça</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[proupahigienizacao]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcalcadonumero'] == null || $row['pcalcadonumero'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Número do calçado</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcalcadonumero]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcalcadocor'] == null || $row['pcalcadocor'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Cor do calçado</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcalcadocor]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcalcadomarca'] == null || $row['pcalcadomarca'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Marca do calçado</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcalcadomarca]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcalcadocategoria'] == null || $row['pcalcadocategoria'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria do calçado</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcalcadocategoria]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcalcadocondicao'] == null || $row['pcalcadocondicao'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Condição do calçado</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcalcadocondicao]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['pcalcadohigienizacao'] == null || $row['pcalcadohigienizacao'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Higienização do calçado</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[pcalcadohigienizacao]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['poutroscategoria'] == null || $row['poutroscategoria'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria - Diversos</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[poutroscategoria]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['poutroscondicao'] == null || $row['poutroscondicao'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Condição - Diversos</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[poutroscondicao]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        if ($row['poutroshigienizacao'] == null || $row['poutroshigienizacao'] == 0 ) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Higienização - Diversos</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<input class='form-control' name='titulo' readonly type='text' value='$row[poutroshigienizacao]'
                                                   id='example-text-input'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }




                                        echo "<hr>";
                                        echo "<div class='container'>";
                                        echo "<div class='row'>";
                                        echo "<div class='col-4'>";
                                        echo "<h4 class='mt-0 header-title'>Imagem do produto</h4>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        if ($row['pimagem'] == null) {
                                            echo "Nenhuma imagem cadastrada";
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Imagem</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<img style='max-width: 60%' src='uploads/produtos/$row[pimagem]'>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                    }
                                    mysqli_close($conn);
                                    ?>
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