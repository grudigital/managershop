<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>

<?php include 'includes/header.php' ?>

<body class="fixed-left">
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
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
                            <h3 class="page-title">Painel de Gerenciamento</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ==================
                 PAGE CONTENT START
                 ================== -->

            <div class="page-content-wrapper">

                <div class="container-fluid">
<!--                    <div class="col-md-12 col-xl-12" style="background-color: #557390; height: 200px; margin-bottom: 20px; width: 100%; border-radius: 3px; color: #fff; font-weight: 600; font-size:40px; text-align: center; padding-top: 6%; text-decoration: none;"><a href="abrircaixa.php"><button style="width:100%;border: none;background-color: #557390; color: #fff ">Abrir caixa</button></a></div>-->

                    <!--<div style="background-color: #000; height: 200px; width: 100%">-->
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                <?php
                                require ("connections/conn.php");
                                $sqlprodutos = "SELECT * FROM produtos";
                                $executa_query_produtos = mysqli_query($conn, $sqlprodutos);
                                $conta_linhas_produtos = mysqli_num_rows($executa_query_produtos);

                                $sqlprodutos7dias = "select * from produtos where date(datacadastro) > (NOW() - INTERVAL 7 DAY)";
                                $executa_query_produtos_7dias = mysqli_query($conn, $sqlprodutos7dias);
                                $conta_linhas_produtos_7dias = mysqli_num_rows($executa_query_produtos_7dias);

                                echo "<div style='font-size: 15px' class='mini-stat-info'>";
                                echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_produtos produtos</span>";
                                echo "cadastrados";
                                echo "</div>";
                                echo "<div class='clearfix'></div>";
                                echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_produtos_7dias <span class='pull-right'></span></p>";
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                <?php
                                require ("connections/conn.php");
                                $sqlfornecedores = "SELECT * FROM fornecedores";
                                $executa_query_fornecedores = mysqli_query($conn, $sqlfornecedores);
                                $conta_linhas_fornecedores = mysqli_num_rows($executa_query_fornecedores);

                                $sqlfornecedores7dias = "select * from fornecedores where date(datacriacao) > (NOW() - INTERVAL 7 DAY)";
                                $executa_query_fornecedores_7dias = mysqli_query($conn, $sqlfornecedores7dias);
                                $conta_linhas_fornecedores_7dias = mysqli_num_rows($executa_query_fornecedores_7dias);

                                echo "<div style='font-size: 15px' class='mini-stat-info'>";
                                echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_fornecedores fornecedores</span>";
                                echo "cadastrados";
                                echo "</div>";
                                echo "<div class='clearfix'></div>";
                                echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_fornecedores_7dias <span class='pull-right'></span></p>";
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                <?php
                                require ("connections/conn.php");
                                $sqlclientes = "SELECT * FROM clientes";
                                $executa_query_clientes = mysqli_query($conn, $sqlclientes);
                                $conta_linhas_clientes = mysqli_num_rows($executa_query_clientes);

                                $sqlclientes7dias = "select * from clientes where date(datacadastro) > (NOW() - INTERVAL 7 DAY)";
                                $executa_query_clientes_7dias = mysqli_query($conn, $sqlclientes7dias);
                                $conta_linhas_clientes_7dias = mysqli_num_rows($executa_query_clientes_7dias);

                                echo "<div style='font-size: 15px' class='mini-stat-info'>";
                                echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_clientes clientes</span>";
                                echo "cadastrados";
                                echo "</div>";
                                echo "<div class='clearfix'></div>";
                                echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_clientes_7dias <span class='pull-right'></span></p>";
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="mini-stat clearfix bg-white">
                                <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                <?php
                                require ("connections/conn.php");
                                $sqlusuarios = "SELECT * FROM usuarios";
                                $executa_query_usuarios = mysqli_query($conn, $sqlusuarios);
                                $conta_linhas_usuarios = mysqli_num_rows($executa_query_usuarios);

                                $sqlusuarios7dias = "select * from usuarios where date(datacadastro) > (NOW() - INTERVAL 7 DAY)";
                                $executa_query_usuarios_7dias = mysqli_query($conn, $sqlusuarios7dias);
                                $conta_linhas_usuarios_7dias = mysqli_num_rows($executa_query_usuarios_7dias);

                                echo "<div style='font-size: 15px' class='mini-stat-info'>";
                                echo "<span style='font-size: 15px' class='counter text-blue-grey'>$conta_linhas_usuarios usuarios</span>";
                                echo "cadastrados";
                                echo "</div>";
                                echo "<div class='clearfix'></div>";
                                echo "<p class='mb-0 m-t-20 text-muted'>Últimos 7 dias: $conta_linhas_usuarios_7dias <span class='pull-right'></span></p>";
                                ?>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">Últimas entradas</h4>

                                    <div class="table-responsive">
                                        <table class="table table-vertical mb-0">

                                            <tbody>
                                            <?php
                                            require("connections/conn.php");
                                            $sql = "SELECT c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, cl.id clid, cl.nome clnome, f.id fid, f.razaosocial frazaosocial FROM caixa as c inner join clientes as cl on c.cliente = cl.id left join fornecedores as f on c.fornecedor = f.id  where c.operacao = 1 order by c.id desc limit 5";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>$row[clnome]</td>";
                                            if($row['cstatus'] == 1){
                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-success'></i> Ativo</td>";
                                            }
                                            else if($row['cstatus'] == 2){
                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-danger'></i> Cancelado</td>";
                                            }
                                            else if($row['cstatus'] == 3){
                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-warning'></i> Em andamento</td>";
                                            }
                                            else{
                                                echo "<td><i class='mdi mdi-checkbox-blank-circle text-success'></i> Concluído</td>";
                                            }

                                            if($row['cvalor'] == null){
                                                echo "<td>0<p class='m-0 text-muted font-14'></p></td>";
                                            }
                                            else{
                                                echo "<td>R$ $row[cvalor]<p class='m-0 text-muted font-14'></p></td>";
                                            }
                                            echo "<td>$row[cdatatransacao]</td>";
                                            echo "</tr>";
                                                echo "</tr>";
                                            }
                                            ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="mt-0 m-b-30 header-title">Últimas saídas</h4>

                                    <div class="table-responsive">
                                        <table class="table table-vertical mb-0">

                                            <tbody>
                                            <?php
                                            require("connections/conn.php");
                                            $sql = "SELECT * from caixa where movimento = 2 order by id desc limit 5";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>$row[despesadescricao]</td>";
                                                if($row['status'] == 1){
                                                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-success'></i> Ativo</td>";
                                                }
                                                else if($row['status'] == 2){
                                                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-danger'></i> Cancelado</td>";
                                                }
                                                else if($row['status'] == 3){
                                                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-warning'></i> Em andamento</td>";
                                                }
                                                else{
                                                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-success'></i> Concluído</td>";
                                                }

                                                if($row['valor'] == null){
                                                    echo "<td>0<p class='m-0 text-muted font-14'></p></td>";
                                                }
                                                else{
                                                    echo "<td>R$ $row[valor]<p class='m-0 text-muted font-14'></p></td>";
                                                }
                                                echo "<td>$row[datatransacao]</td>";
                                                echo "</tr>";
                                                echo "</tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/rodape.php' ?>
    </div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>