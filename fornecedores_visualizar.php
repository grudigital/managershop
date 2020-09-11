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
                            <h3 class="page-title">Painel de Gerenciamento :: Fornecedores :: Editar</h3>
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
                                <form class="card-body" action="functions/fornecedores_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Fornecedores</h4>
                                                <p class="text-muted m-b-30 font-14">Editar fornecedores</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,cnpjcpf,razaosocial,email,telefone,whatsapp,cep,logradouro,numero,complemento,bairro,cidade,estado,observacoes,imagem,status FROM fornecedores where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<hr>";
                                        echo "<div class='container'>";
                                        echo "<div class='row'>";
                                        echo "<div class='col-4'>";
                                        echo "<h4 class='mt-0 header-title'>Dados do fornecedor</h4>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>CNPJ / CPF</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[cnpjcpf]</p>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Razão social</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[razaosocial]</p>";

                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>E-mail</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[email]</p>";

                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Telefone</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[telefone]</p>";

                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Whatsapp</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[whatsapp]</p>";

                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Endereço</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[logradouro], $row[numero] - $row[complemento] - $row[bairro] - $row[cep] - $row[cidade] / $row[estado] </p>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input'
                                               class='col-sm-2 col-form-label'>Observações</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top:5px;'>$row[observacoes]</p>";

                                        echo "</div>";
                                        echo "</div>";

                                        echo "<hr>";
                                        echo "<div class='container'>";
                                        echo "<div class='row'>";
                                        echo "<div class='col-4'>";
                                        echo "<h4 class='mt-0 header-title'>Imagem do fornecedor</h4>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<hr>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Imagem</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<img style='max-width: 60%' src='uploads/fornecedores/$row[imagem]'>";
                                        echo "</div>";
                                        echo "</div>";



                                    }
                                    mysqli_close($conn);
                                    ?>





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