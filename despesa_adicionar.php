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
                            <h3 class="page-title">Painel de Gerenciamento :: Despesa :: Adicionar</h3>
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
                                <form class="card-body" action="functions/despesa_adicionar.php" enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Despesa</h4>
                                                <p class="text-muted m-b-30 font-14">Processar despesa  / Selecionar cliente</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>


                                    <input class="form-control" name="movimento" value="2" type="hidden">

                                    <input class="form-control" name="operacao" value="2" type="hidden">


                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Valor</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="valor" type="text" placeholder="Valor"
                                                   id="valor1">
                                        </div>
                                    </div>

                                    <?php
                                    echo "<input class='form-control' name='vendedor' value='$_SESSION[usuarioId]' type='hidden'>";
                                    ?>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Descrição / Motivo</label>
                                        <div class="col-sm-10">
                                            <select name="despesadescricao" class="form-control">
                                                <option value="">Selecione uma opção</option>
                                                <?php
                                                require("connections/conn.php");
                                                $sql = "select * FROM despesa";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='$row[despesa]'>$row[despesa]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Data da despesa</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="datatransacao" type="date"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <input type="hidden" value="4" name="status">


                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Processar despesa</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script>
    $(function() {
        $('#valor1').maskMoney({ decimal: '.', thousands: '', precision: 2 });
    });
    $(function() {
        $('#valor2').maskMoney({ decimal: '.', thousands: '', precision: 2 });
    })
</script>
</body>
</html>