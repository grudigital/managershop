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
                            <h3 class="page-title">Painel de Gerenciamento :: Produtos</h3>
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
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Produtos</h4>
                                                <p class="text-muted m-b-30 font-14">Listagem de produtos.</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">
                                                <a href="produtos_adicionar.php">
                                                    <button style="float: right" type='button' class='btn btn-success'>
                                                        Adicionar
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table  table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Titulo</th>
                                                    <th>Código de produto</th>
                                                    <th>Local armazenado</th>
                                                    <th>Valor venda</th>
                                                    <th>Status</th>
                                                    <th>Data de cadastro</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                require("connections/conn.php");
                                                $sql = "select * FROM produtos";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<th>$row[razaosocial]</th>";
                                                    echo "<td>$row[cnpjcpf]</td>";
                                                    echo "<td>$row[email]</td>";
                                                    echo "<td>$row[telefone]</td>";
                                                    echo "<td>$row[whatsapp]</td>";
                                                    echo "<td>$row[datacriacao]</td>";
                                                    echo "<td><a href='fornecedores_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                                                    echo "<td><a href='functions/fornecedores_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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