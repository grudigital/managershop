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
                                <form class="card-body" action="functions/venda-step1.php" enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Vendas</h4>
                                                <p class="text-muted m-b-30 font-14">Processar venda  / Selecionar cliente</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Busca de cliente</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="busca" type="text" placeholder="Digite o nome do cliente">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input class="form-control" id="id" name="cliente" type="hidden">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input class="form-control" id="nome" type="hidden">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input class="form-control" name="movimento" value="1" type="hidden">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input class="form-control" name="operacao" value="1" type="hidden">
                                        </div>
                                    </div>

                                    <input type="hidden" name="datatransacao">
                                    <input type="hidden" value="3" name="status">

<!--                                    <div class="form-group row">-->
<!--                                        <label for="example-text-input" class="col-sm-2 col-form-label">Forma de pagamento</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <select class="form-control" name="formapagamento">-->
<!--                                                <option>Selecione a forma de pagamento</option>-->
<!--                                                <option value="dinheiro">Dinheiro</option>-->
<!--                                                <option value="cartao-de-debito">Cartão de débito</option>-->
<!--                                                <option value="cartao-de-credito">Cartão de crédito</option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="form-group row">-->
<!--                                        <label for="example-text-input" class="col-sm-2 col-form-label">Parcelas</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <select class="form-control" name="formapagamento">-->
<!--                                                <option>Selecione a quantidade de parcelas</option>-->
<!--                                                <option value="1">A vista</option>-->
<!--                                                <option value="2">2x</option>-->
<!--                                                <option value="3">3x</option>-->
<!--                                                <option value="4">4x</option>-->
<!--                                                <option value="5">5x</option>-->
<!--                                                <option value="6">6x</option>-->
<!--                                                <option value="7">7x</option>-->
<!--                                                <option value="8">8x</option>-->
<!--                                                <option value="9">9x</option>-->
<!--                                                <option value="10">10x</option>-->
<!--                                                <option value="11">11x</option>-->
<!--                                                <option value="12">12x</option>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Selecionar cliente</button>
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
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>