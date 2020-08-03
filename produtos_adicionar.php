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
                            <h3 class="page-title">Painel de Gerenciamento :: Produtos :: Adicionar</h3>
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
                                <form class="card-body" action="functions/produtos_adicionar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Produtos</h4>
                                                <p class="text-muted m-b-30 font-14">Adicionar produto</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Título</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="titulo" type="text" placeholder="Título"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Categoria</label>
                                        <div class="col-sm-10">
                                            <select name="categoria" class="form-control">
                                                <option value="roupa">Roupa</option>
                                                <option value="calcado">Calçado</option>
                                                <option value="decoracao">Decoração</option>
                                                <option value="brinquedos">Brinquedos</option>
                                                <option value="outros">Outros</option>
                                            </select>
                                            <input class="form-control" name="titulo" type="text" placeholder="Título"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Código</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="codigo" type="number" placeholder="Código"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Peso</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="peso" type="number" placeholder="Peso"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Largura</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="largura" type="number"
                                                   placeholder="Largura"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Altura</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="altura" type="number" placeholder="Altura"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Comprimento</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="comprimento" type="number"
                                                   placeholder="Comprimento"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Local armazenado</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="localarmazenado" type="text"
                                                   placeholder="Local armazenado"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Valor de compra</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="valorcompra" type="number"
                                                   placeholder="Valor de compra"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Valor de venda</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="valorvenda" type="number"
                                                   placeholder="Valor de venda"
                                                   id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input"
                                               class="col-sm-2 col-form-label">Fornecedor</label>
                                        <div class="col-sm-10">
                                            <select name="fornecedor" class="form-control">
                                                <?php
                                                require("connections/conn.php");

                                                $sql = "select id,razaosocial FROM fornecedores ";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='$row[id]'>$row[razaosocial]</option>";
                                                }
                                                mysqli_close($conn);
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <input class="form-control" name="imagem" type="hidden"
                                           id="example-text-input">
                                    <input class="form-control" name="status" type="hidden" value="1"
                                           id="example-text-input">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Salvar
                                                produto
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