<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->

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
                                <form class="card-body" action="functions/processar-venda.php"
                                      enctype="multipart/form-data"
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
                                    $sqlvalor = "select id,codigo,produto,desconto,valorvenda, quantidade, sum(valorvenda * quantidade) as somavalortotal, sum(desconto) as somavalordesconto, sum(valorvenda * quantidade) - sum(desconto) as valortotalcomdesconto  from caixa_venda_item where codigo = '$pegaid'";
                                    $resultvalor = mysqli_query($conn, $sqlvalor);

                                    while ($rowvalor = mysqli_fetch_assoc($resultvalor)) {
                                        if ($sqlvalor = null) {
                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Total a pagar</label>";
                                            echo "<div class='col-sm-10'>";


                                            if($rowvalor['somavalordesconto'] == null){
                                                echo "<input type='text' name='valor' class='form-control' readonly value='$rowvalor[somavalortotal]'>";

                                            }
                                            else{
                                                echo "<input type='text' name='valor' class='form-control' readonly value='$rowvalor[valortotalcomdesconto]'>";

                                            }


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
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Forma de
                                            pagamento</label>
                                        <div class="col-sm-10">
                                            <select required name="formapagamento" id="mySelect" class="form-control">
                                                <option value="" selected disabled>Selecione a forma de pagamento</option>
                                                <option value="1">Pagamento em dinheiro</option>
                                                <option value="2">Cartão de débito</option>
                                                <option value="3">Cartão de credito</option>
                                                <option value="4">Cheque</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" value="1" name="parcelas">

                                    <div id="inputOculto" class='form-group row'>
                                        <label for='example-text-input' class='col-sm-2 col-form-label'>Parcelas</label>
                                        <div class='col-sm-10'>
                                            <input type="number" name="parcelas" class="form-control"/>
                                        </div>
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
                                        Prosseguir transação
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

<script>
    $(document).ready(function () {
        $('#inputOculto').hide();
        $('#mySelect').change(function () {
            if ($('#mySelect').val() == '3') {
                $('#inputOculto').show();
            } else if ($('#mySelect').val() == '4') {
                $('#inputOculto').show();
            }else {
                $('#inputOculto').hide();
            }
        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
<script type="text/javascript">
    $("#formapagamento").select2();
</script>

<script type="text/javascript" src="assets/js/customproduto.js"></script>
</body>
</html>