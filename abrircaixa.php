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
                            <h3 class="page-title">Painel de Gerenciamento :: Abrir caixa</h3>
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

                    <?php
                    require("connections/conn.php");
                    $usuarioid = $_SESSION['usuarioId'];
                    $sql = "select * from usuarios where id = '$usuarioid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        // perfil 1 - administrador
                        if ($row['perfil'] == 1) {

                            echo "<div class='col-md-4 col-xl-4' style='background-color: #660066; border:5px solid #f4f4f4; height: 200px; margin-bottom: 20px; width: 90%; padding-right: 20px; padding-left: 20px; float:left; border-radius: 3px; color: #fff; font-weight: 600; font-size:40px; text-align: center; padding-top: 6%; text-decoration: none;'><a href='venda.php'><button style='width:100%;border: none;background-color: #660066; color: #fff'>Venda</button></a></div>";
                            echo "<div class='col-md-4 col-xl-4' style='background-color: #00698C; border:5px solid #f4f4f4; height: 200px; padding-bottom: 20px; width: 90%; padding-right: 20px; padding-left: 20px; float:left; border-radius: 3px; color: #fff; font-weight: 600; font-size:40px; text-align: center; padding-top: 6%; text-decoration: none;'><a href='despesa.php'><button style='width:100%;border: none;background-color: #00698C; color: #fff'>Despesa</button></a></div>";
                            echo "<div class='col-md-4 col-xl-4' style='background-color: #D96D00; border:5px solid #f4f4f4; height: 200px; margin-bottom: 20px; width: 90%; padding-right: 20px; padding-left: 20px; float:left; border-radius: 3px; color: #fff; font-weight: 600; font-size:40px; text-align: center; padding-top: 6%; text-decoration: none;'><a href='sangria.php'><button style='width:100%;border: none;background-color: #D96D00; color: #fff'>Sangria</button></a></div>";
                        }else if($row['perfil'] == 2){
                            echo "<div class='col-md-12 col-xl-12' style='background-color: #660066; border:5px solid #f4f4f4; height: 200px; margin-bottom: 20px; width: 100%; padding-right: 20px; padding-left: 20px; float:left; border-radius: 3px; color: #fff; font-weight: 600; font-size:40px; text-align: center; padding-top: 6%; text-decoration: none;'><a href='venda.php'><button style='width:100%;border: none;background-color: #660066; color: #fff'>Venda</button></a></div>";

                        }
                    }
                    mysqli_close($conn);
                    ?>


                    <!--<div style="background-color: #000; height: 200px; width: 100%">-->

                </div>
                <div class="container-fluid">
                    <?php include 'includes/caixa-listar-vendedor.php' ?>

                </div>

            </div>

        </div>
        <?php include 'includes/rodape.php' ?>
    </div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>