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
                            <h3 class="page-title">Painel de Gerenciamento :: Produtos :: Editar</h3>
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
                                <form class="card-body" action="functions/produtos_preferencias_editar.php" enctype="multipart/form-data" method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Produtos</h4>
                                                <p class="text-muted m-b-30 font-14">Editar produto</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");

                                    $pegaid = (int)$_GET['id'];
                                    //listagem da tabela produtos
                                    $sql = "select id,titulo,categoria,genero,codigo,localarmazenado,valorcompra,valorvenda,fornecedor,status,roupa_categoria,roupa_cor,roupa_tamanho,roupa_marca,roupa_condicao,roupa_higienizacao,calcado_numero,calcado_cor,calcado_marca,calcado_categoria,calcado_condicao,calcado_higienizacao,outros_categoria,outros_condicao,outros_higienizacao,datacadastro FROM produtos where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);
                                    //listagem da tabela produtos

                                    //listagem da tabela produtos_categorias
                                    $sqlcategorias = "select * from produtos_categorias";
                                    $resultcategorias = mysqli_query($conn, $sqlcategorias);
                                    //listagem da tabela produtos_categorias

                                    $roupacategorias = mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 14 and p.id = '$pegaid'");
                                    $roupacor= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 15 and p.id = '$pegaid'");
                                    $roupatamanho= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 16 and p.id = '$pegaid'");
                                    $roupamarca= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 17 and p.id = '$pegaid'");
                                    $roupacondicao= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 18 and p.id = '$pegaid'");
                                    $roupahigienizacao= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 19 and p.id = '$pegaid'");

                                    $calcadonumero= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 20 and p.id = '$pegaid'");
                                    $calcadocor= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 21 and p.id = '$pegaid'");
                                    $calcadomarca= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 22 and p.id = '$pegaid'");
                                    $calcadocategoria= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 23 and p.id = '$pegaid'");
                                    $calcadocondicao= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 24 and p.id = '$pegaid'");
                                    $calcadohigienizacao= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 25 and p.id = '$pegaid'");

                                    $outroscategoria= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 26 and p.id = '$pegaid'");
                                    $outroscondicao= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 27 and p.id = '$pegaid'");
                                    $outroshigienizacao= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where ppo.parametro = 28 and p.id = '$pegaid'");

                                    // listagem de campos selecionados

                                    $roupacategoriasselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 14 group by pid");
                                    $roupacorselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 15 group by pid");
                                    $roupatamanhoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 16 group by pid");
                                    $roupamarcaselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 17 group by pid");
                                    $roupacondicaoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 18 group by pid");
                                    $roupahigienizacaoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 19 group by pid");

                                    $calcadonumeroselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 20 group by pid");
                                    $calcadocorselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 21 group by pid");
                                    $calcadomarcaselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 22 group by pid");
                                    $calcadocategoriaselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 23 group by pid");
                                    $calcadocondicaoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 24 group by pid");
                                    $calcadohigienizacaoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 25 group by pid");

                                    $outroscategoriaselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 26 group by pid");
                                    $outroscondicaoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 27 group by pid");
                                    $outroshigienizacaoselecionado= mysqli_query($conn,"select p.id pid, p.categoria pcategoria, p.roupa_categoria proupacategoria, p.roupa_cor proupacor, p.roupa_tamanho proupatamanho, p.roupa_marca proupamarca, p.roupa_condicao proupacondicao, p.roupa_higienizacao proupahigienizacao, p.calcado_numero pcalcadonumero, p.calcado_cor pcalcadocor, p.calcado_marca pcalcadomarca, p.calcado_categoria pcalcadocategoria, p.calcado_categoria pcalcadocategoria, p.calcado_condicao pcalcadocondicao, p.calcado_higienizacao pcalcadohigienizacao, p.outros_categoria poutroscategoria,p.outros_condicao poutroscondicao, p.outros_higienizacao poutroshigienizacao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id inner join produtos as p on pp.categoria = p.categoria where p.id = '$pegaid' and ppo.parametro = 28 group by pid");

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Titulo</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='titulo' type='text' value='$row[titulo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        //quando for roupas
                                        if ($row['categoria'] == 1) {

                                            echo "<input name='calcado_numero' type='hidden' value='$row[calcado_numero]'>";
                                            echo "<input name='calcado_cor' type='hidden' value='$row[calcado_cor]'>";
                                            echo "<input name='calcado_marca' type='hidden' value='$row[calcado_marca]'>";
                                            echo "<input name='calcado_categoria' type='hidden' value='$row[calcado_categoria]'>";
                                            echo "<input name='calcado_condicao' type='hidden' value='$row[calcado_condicao]'>";
                                            echo "<input name='calcado_higienizacao' type='hidden' value='$row[calcado_higienizacao]'>";

                                            echo "<input name='outros_categoria' type='hidden' value='$row[outros_categoria]'>";
                                            echo "<input name='outros_condicao' type='hidden' value='$row[outros_condicao]'>";
                                            echo "<input name='outros_higienizacao' type='hidden' value='$row[outros_higienizacao]'>";

                                            echo "<div class='form-group row'>";
                                            echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria de roupa</label>";
                                            echo "<div class='col-sm-10'>";
                                            echo "<select class='form-control' name='roupa_categoria'>";

                                            //Retorno de categorias de roupas selecionada
                                            while ($listacategoriaroupaselecionada = mysqli_fetch_array($roupacategoriasselecionado)){
                                                echo "<option style='background-color: #263238; color: #fff' selected value='$listacategoriaroupaselecionada[aid]'>$listacategoriaroupaselecionada[ppoopcao]</option>";
                                            }
                                            //Retorno de categorias de roupas selecionada

                                            //Retorno de todas categorias de roupas
                                            while ($listacategoriasderoupas = mysqli_fetch_array($roupacategorias)){
                                                echo "<option value='$listacategoriasderoupas[ppoid]'>$listacategoriasderoupas[ppoopcao]</option>";
                                            }
                                            //Retorno de todas categorias de roupas
                                            echo "</select>";
                                            echo "</div>";
                                            echo "</div>";


                                        }
                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Atualizar
                                                informações
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