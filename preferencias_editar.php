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
                                    //listagem da tabela produtos
                                    $sql = "select id,titulo,categoria,genero,codigo,localarmazenado,valorcompra,valorvenda,fornecedor,status,roupa_categoria,roupa_cor,roupa_tamanho,roupa_marca,roupa_condicao,roupa_higienizacao,calcado_numero,calcado_cor,calcado_marca,calcado_categoria,calcado_condicao,calcado_higienizacao,outros_categoria,outros_condicao,outros_higienizacao,datacadastro FROM produtos where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);
                                    //listagem da tabela produtos

                                    //listagem da tabela produtos_categorias
                                    $sqlcategorias = "select * from produtos_categorias";
                                    $resultcategorias = mysqli_query($conn, $sqlcategorias);
                                    //listagem da tabela produtos_categorias






                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Titulo</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='titulo' readonly type='text' value='$row[titulo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";


                                        if($row['categoria'] == 1){
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>categoria 1</label>";
                                        } else if($row['categoria'] == 2){
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>categoria 2</label>";
                                        } else if($row['categoria'] == 3){
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>categoria 3</label>";
                                        } else if($row['categoria'] == 4){
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>categoria 4</label>";
                                        } else if($row['categoria'] == 5){
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>categoria 5</label>";
                                        } else {
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>nao encontrado</label>";
                                        }













                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select class='form-control' name='categoria'>";

                                        //Retorno da opção selecionada
                                        while ($categoriasxprodutos = mysqli_fetch_array($resultcategoriasprodutos)){
                                            echo "<option style='background-color: #263238; color: #fff' selected value='$categoriasxprodutos[cid]'>$categoriasxprodutos[ccategoria]</option>";
                                        }
                                        //Retorno da opção selecionada

                                        //Retorno das demais opções
                                        while ($categorias = mysqli_fetch_array($resultcategorias)){
                                            echo "<option value='$categorias[id]'>$categorias[categoria]</option>";
                                        }
                                        //Retorno das demais opções
                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";


                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Genero</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select class='form-control' name='genero'>";

                                        //Retorno da opção selecionada
                                        while ($generoprodutos = mysqli_fetch_array($resultgeneroprodutos)){
                                            echo "<option style='background-color: #263238; color: #fff' selected value='$generoprodutos[gid]'>$generoprodutos[ggenero]</option>";
                                        }
                                        //Retorno da opção selecionada

                                        //Retorno das demais opções
                                        while ($generos = mysqli_fetch_array($resultgenero)){
                                            echo "<option value='$generos[id]'>$generos[genero]</option>";
                                        }
                                        //Retorno das demais opções
                                        echo "</select>";

                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Código</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='codigo' type='text' value='$row[codigo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Local armazenado</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select class='form-control' name='localarmazenado'>";

                                        //Retorno da opção selecionada
                                        while ($localprodutos = mysqli_fetch_array($resultarmazenamentoprodutos)){
                                            echo "<option style='background-color: #263238; color: #fff' selected value='$localprodutos[aid]'>$localprodutos[alocal]</option>";
                                        }
                                        //Retorno da opção selecionada

                                        //Retorno das demais opções
                                        while ($local = mysqli_fetch_array($resultarmazenamento)){
                                            echo "<option value='$local[id]'>$local[local]</option>";
                                        }
                                        //Retorno das demais opções
                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Valor de compra</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' readonly name='valorcompra' type='number' value='$row[valorcompra]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Valor de venda</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='valorvenda' type='number' value='$row[valorvenda]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Fornecedor</label>";
                                        echo "<div class='col-sm-10'>";
                                        while ($row2 = mysqli_fetch_array($resultsfornecedoreseprodutos)){
                                            echo "<input class='form-control' readonly type='text' value='$row2[frazaosocial]' 
                                                   id='example-text-input'>";
                                        }
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Status</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select class='form-control' name='status'>";

                                        //Retorno da opção selecionada
                                        while ($statusprodutos = mysqli_fetch_array($resultstatusprodutos)){
                                            echo "<option style='background-color: #263238; color: #fff' selected value='$statusprodutos[sid]'>$statusprodutos[sstatus]</option>";
                                        }
                                        //Retorno da opção selecionada

                                        //Retorno das demais opções
                                        while ($status = mysqli_fetch_array($resultstatus)){
                                            echo "<option value='$status[id]'>$status[status]</option>";
                                        }
                                        //Retorno das demais opções
                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Data de cadastro</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='datacadastro' readonly type='text' value='$row[datacadastro]'
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