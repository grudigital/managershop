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
                                <form class="card-body" action="functions/processar-venda.php" enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Vendas</h4>
                                                <p class="text-muted m-b-30 font-14">Processar venda / Selecionar
                                                    produto(s)</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select ca.id caid,ca.movimento camovimento,ca.operacao caoperacao,ca.cliente cacliente,ca.fornecedor cafornecedor,ca.despesadescricao cadespesadescricao, ca.status castatus,ca.datatransacao cadatatransacao, cl.id clid, cl.nome clnome FROM caixa as ca inner join clientes as cl on ca.cliente = cl.id  where ca.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Cliente</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input type='text' class='form-control' readonly value='$row[clnome] ( código: $row[clid] )'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<input type='hidden' value='$pegaid' name='id'>";
                                        echo "<input type='hidden' value='$row[cadatatransacao]' name='datatransacao'>";
                                        echo "<input type='hidden' value='$row[camovimento]' name='movimento'>";
                                        echo "<input type='hidden' value='$row[caoperacao]' name='operacao'>";
                                        echo "<input type='hidden' value='$row[cacliente]' name='cliente'>";
                                        echo "<input type='hidden' value='$row[cafornecedor]' name='fornecedor'>";
                                        echo "<input type='hidden' value='$row[cadespesadescricao]' name='despesadescricao'>";
                                        echo "<input type='hidden' value='4' name='status'>";


                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,codigo,produto,desconto,valorvenda, sum(valorvenda) as somavalortotal, sum(desconto) as somavalordesconto, sum(valorvenda) - sum(desconto) as valortotalcomdesconto  from caixa_venda_item where codigo = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);


                                    while ($row = mysqli_fetch_assoc($result)) {

                                        if ($sql = null) {

                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Total a pagar</label>";
                                            echo "<div class='col-sm-10'>";

                                            echo "<input type='text' class='form-control' name='valor' readonly value='$row[valortotalcomdesconto]'>";
                                            echo "</div>";
                                            echo "</div>";



                                            include 'includes/caixa-venda-item.php';
                                            echo "<hr>";

                                            echo "<h4 class=\"mt-0 header-title\" style=\"background-color: #6C757D; padding-top: 7px; padding-left:10px; height: 40px; color: #fff; font-size: 20px\">Pagamento</h4>";

                                        }


                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <hr>




                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Forma de pagamento</label>
                                        <div class="col-sm-10">
                                            <select name="formapagamento" class="form-control">
                                                <option value="">Selecione a forma de pagamento</option>
                                                <option value="dinheiro">Pagamento em dinheiro</option>
                                                <option value="debito">Cartão de débito</option>
                                                <option value="credito">Cartão de credito</option>
                                                <option value="cheque">Cheque</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Parcelas</label>
                                        <div class="col-sm-10">
                                            <select name="parcelas" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                    </div>


                                    <!--Gravando os campos de vendedor-->
                                    <?php
                                    echo "<input type='hidden' name='vendedor' value='$_SESSION[usuarioId]'>";
                                    ?>
                                    <!--Gravando os campos de vendedor-->

                                    <div class="form-group row">
                                        <div style=' margin-top: 10px' class="col-sm-12">
                                            <button style=' width: 100%' type='submit' class='btn btn-primary'>
                                                Concluir venda
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