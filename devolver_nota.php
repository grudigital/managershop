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
                            <h3 class="page-title">Painel de Gerenciamento :: Devoluções :: Editar</h3>
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
                                <form class="card-body" enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Devoluções</h4>
                                                <p class="text-muted m-b-30 font-14">Gerenciamento de notas de devolução</p>
                                            </div>
                                            <div class="col-5"></div>
                                            <div class="col-3">

                                                <form>
                                                    <input type="button" style="float:left; font-size:14px; margin-right: 5px;" class='btn btn-secondary' value="Imprimir" onClick="window.print()"/>
                                                </form>

                                                <?php
                                                require("connections/conn.php");

                                                $pegaid = (int)$_GET['id'];
                                                //listagem da tabela produtos
                                                $sql = "select id,titulo,categoria,genero,codigo,localarmazenado,valorcompra,valorvenda,fornecedor,status,datacadastro FROM produtos where id = '$pegaid'";
                                                $result = mysqli_query($conn, $sql);
                                                //listagem da tabela produtos

                                                //listagem da tabela produtos_categorias
                                                $sqlcategorias = "select * from produtos_categorias";
                                                $resultcategorias = mysqli_query($conn, $sqlcategorias);
                                                //listagem da tabela produtos_categorias

                                                //listagem da tabela produtos_categorias x produtos
                                                $sqlcategoriasprodutos = "select c.id cid, c.categoria ccategoria, p.id pid, p.categoria pcategoria from produtos_categorias as c inner join produtos as p on c.id = p.categoria where p.id = '$pegaid'";
                                                $resultcategoriasprodutos = mysqli_query($conn, $sqlcategoriasprodutos);
                                                //listagem da tabela produtos_categorias x produtos

                                                //listagem da tabela produtos_genero
                                                $sqlgenero = "select * from produtos_genero";
                                                $resultgenero = mysqli_query($conn, $sqlgenero);
                                                //listagem da tabela produtos_genero

                                                //listagem da tabela produtos_genero x produtos
                                                $sqlgeneroprodutos = "select g.id gid, g.genero ggenero, p.id pid, p.genero pgenero from produtos_genero as g inner join produtos as p on g.id = p.genero where p.id = '$pegaid'";
                                                $resultgeneroprodutos = mysqli_query($conn, $sqlgeneroprodutos);



                                                //listagem da tabela produtos_armazenamento
                                                $sqlarmazenamento = "select * from produtos_armazenamento";
                                                $resultarmazenamento = mysqli_query($conn, $sqlarmazenamento);

                                                //listagem da tabela produtos_armazenamento x produtos
                                                $sqlarmazenamentoprodutos = "select a.id aid, a.local alocal, p.id pid, p.localarmazenado plocalarmazenado from produtos_armazenamento as a inner join produtos as p on a.id = p.localarmazenado where p.id = '$pegaid'";
                                                $resultarmazenamentoprodutos = mysqli_query($conn, $sqlarmazenamentoprodutos);

                                                //listagem da tabela produtos_status
                                                $sqlstatus = "select * from produtos_status";
                                                $resultstatus = mysqli_query($conn, $sqlstatus);

                                                //listagem da tabela produtos_status x produtos
                                                $sqlstatusprodutos = "select s.id sid, s.status sstatus, p.id pid, p.localarmazenado plocalarmazenado from produtos_status as s inner join produtos as p on s.id = p.status where p.id = '$pegaid'";
                                                $resultstatusprodutos = mysqli_query($conn, $sqlstatusprodutos);





                                                //listagem da tabela fornecedores x produtos
                                                $sqlfornecedoresprodutos = "select f.id fid, f.razaosocial frazaosocial, p.id pid, p.fornecedor pfornecedor from fornecedores as f inner join produtos as p on f.id = p.fornecedor where p.id = '$pegaid'";
                                                $resultsfornecedoreseprodutos = mysqli_query($conn, $sqlfornecedoresprodutos);
                                                //listagem da tabela fornecedores x produtos




                                                while ($row = mysqli_fetch_assoc($result)) {

                                                echo "<a style='float:left;' href='functions/devolver_item2.php?id=$row[id]'>";
                                                    echo "<button style='float: right; font-size:14px' type='button' class='btn btn-danger'>Cancelar devolução</button>";
                                                echo "</a>";

                                                }
                                                mysqli_close($conn);
                                                ?>

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select p.id pid, p.titulo ptitulo,p.categoria pcategoria,p.codigo pcodigo,p.genero pgenero,p.peso ppeso,p.largura plargura,p.altura paltura,p.comprimento pcomprimento, p.localarmazenado plocalarmazenado, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, p.status pstatus, p.datacadastro pdatacadastro, pc.id pcid, pc.categoria pccategoria, f.id fid, f.razaosocial frazaosocial, pa.id paid, pa.local palocal, ps.id psid, ps.status psstatus from produtos as p inner join produtos_categorias as pc on p.categoria = pc.id left join fornecedores as f on p.fornecedor = f.id left join produtos_armazenamento as pa on p.localarmazenado = pa.id left join produtos_status as ps on p.status = ps.id where p.id = '$pegaid' order by p.datacadastro";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<div style='width: 80%; margin-left:30px'>";
                                        echo "<p style='font-size: 20px; font-weight: bold'>Nota de devolução</p>";
                                        echo "<p>Declaramos para os devidos fins que neste ato estamos efetuando a DEVOLUÇÃO do produto descritivo abaixo:</p>";

                                        echo "<p style='margin-top: 40px'><strong>Dados do produto</strong></p>";
                                        echo "<p>Código: $row[pid] | Produto: $row[ptitulo] | Data de entrada: $row[pdatacadastro]</p>";
                                        echo "<p style='margin-top: 40px'><strong>Dados do fornecedor</strong></p>";
                                        echo "<p>Código: $row[fid] | Nome/Razão social: $row[frazaosocial] </p>";
                                        echo "<p style='margin-top: 40px'>E, por ser verdade firma a presente DECLARAÇÃO.</p>";
                                        echo "<p style='margin-top: 60px; text-align: center'>______________________________________________________</p>";
                                        echo "<p style='text-align: center; margin-top: -10px'>Assinatura</p>";
                                        echo "<p style='text-align: center; margin-top: 50px'><img style='width: 200px' src='assets/images/logo.png'></p>";
                                        echo "<div>";
                                    }
                                    mysqli_close($conn);
                                    ?>


<!--                                    <div class="form-group row">-->
<!--                                        <div class="col-sm-12">-->
<!--                                            <button style="float: right" type='submit' class='btn btn-info'>Atualizar-->
<!--                                                informações-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                    </div>-->


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