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
                                <form class="card-body" action="functions/venda-step2.php" enctype="multipart/form-data"
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
                                    $sql = "select ca.id caid,ca.movimento camovimento,ca.operacao caoperacao,ca.cliente cacliente,ca.status castatus,ca.datatransacao cadatatransacao, cl.id clid, cl.nome clnome FROM caixa as ca inner join clientes as cl on ca.cliente = cl.id  where ca.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Cliente</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input type='text' class='form-control' readonly value='$row[clnome] ( código: $row[clid] )'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<input type='hidden' value='$pegaid' name='codigo'>";


                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sqlvalor = "select id,codigo,produto,desconto,valorvenda, sum(valorvenda * quantidade) as somavalortotal, sum(desconto) as somavalordesconto, sum(valorvenda * quantidade) - sum(desconto) as valortotalcomdesconto  from caixa_venda_item where codigo = '$pegaid'";
                                    $resultvalor = mysqli_query($conn, $sqlvalor);


                                    while ($rowvalor = mysqli_fetch_assoc($resultvalor)) {

                                        if ($sqlvalor = null) {

                                        } else {
                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Total a pagar</label>";
                                            echo "<div class='col-sm-10'>";

                                            if($rowvalor['somavalordesconto'] == null){
                                                echo "<input type='text' name='valorvenda' class='form-control' readonly value='$rowvalor[somavalortotal]'>";

                                            }
                                            else{
                                                echo "<input type='text' name='valorvenda' class='form-control' readonly value='$rowvalor[valortotalcomdesconto]'>";

                                            }
                                            echo "</div>";
                                            echo "</div>";
                                            include 'includes/caixa-venda-item.php';
                                            echo "<hr>";
                                            echo "<h4 class=\"mt-0 header-title\" style=\"background-color: #6C757D; padding-top: 7px; padding-left:10px; height: 40px; color: #fff; font-size: 20px\">Adicione mais produtos</h4>";
                                        }
                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <hr>


                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Busca de
                                            produto</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="busca" type="text"
                                                   placeholder="Digite o código do produto">
                                            <!--se colocar o name com codigo funciona porém surge erros de secao-->
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Produto</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="titulo" readonly type="text">
                                        </div>
                                    </div>

<!--                                    --><?php
//                                    require("connections/conn.php");
//                                    $pegaid = (int)$_GET['id'];
//                                    $sql = "select * from caixa where id = '$pegaid'";
//                                    $result = mysqli_query($conn, $sql);
//                                    while ($row = mysqli_fetch_assoc($result)) {
//                                        echo "<input type='hidden' value='$pegaid' name='caixa'>";
//                                    }
//                                    mysqli_close($conn);
//                                    ?>



                                    <input type="hidden" name="produto" id="id">

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Valor</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="valorvenda" id="valorvenda" readonly
                                                   type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Quantidade dispon.</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="quantidade"
                                                   type="number" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Quantidade</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="1" name="quantidade" type="number">
                                        </div>
                                    </div>





                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-secondary'>
                                                Adicionar produto
                                            </button>
                                        </div>
                                    </div>
                                    <hr>




                                </form>

                                <?php
                                require("connections/conn.php");
                                $pegaid = (int)$_GET['id'];
                                $sql = "select id,codigo,produto,desconto,valorvenda, sum(valorvenda) as somavalortotal, sum(desconto) as somavalordesconto, sum(valorvenda) - sum(desconto) as valortotalcomdesconto  from caixa_venda_item where codigo = '$pegaid'";
                                $result = mysqli_query($conn, $sql);



                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<div class='form-group'>";
                                    echo "<div style='float: right;' class='col-sm-12'>";
                                    echo "<a href='venda_step3.php?id=$pegaid'><button style=' margin-left:10px; width: 98%' type='submit' class='btn btn-success'>Processar pagamento</button></a>";
                                    echo "</div>";
                                    echo "</div>";

                                }
                                mysqli_close($conn);
                                ?>
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