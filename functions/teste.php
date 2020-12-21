<header class="w-100 h-auto sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm px-0 justify-content-center">
        <div class="container align-items-center no-gutters">



            <div class="col-md-3 col-8 nao-exibir-elemento-mobile">
                <a href="index.php">
                    <img src="./images/logo.png" class="img-fluid d-block ml-md-0 mx-auto">
                </a>
            </div>

            <div class="col-md-3 col-8 exibir-elemento-mobile-apenas">
                <a href="index.php">
                    <img style='width:90%' src="./images/logo.png" class="img-fluid d-block ml-md-0 mx-auto">
                </a>
            </div>

            <div style="z-index: 9999" class="col-md-4 nao-exibir-elemento-mobile">
                <form method="POST" action="pesquisar.php">
                    <div style="margin-left: 30px" class="input-group">
                        <input type="text" class="form-control search border-right-0" id="search" name="pesquisar"
                               placeholder="Busque por produto, serviço, loja ou região...">
                        <input type="hidden" name="categoria" value="todos">
                        <div class="input-group-append">
                            <button style="width: 40px" type="submit" class="input-group-text bg-transparent">
                                <img src="icons/search.svg" class="img-fluid" width="15"/>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-3 ">
                <div class="col-lg col-md-2 col-3 text-center">
                    <ul class="navbar-nav justify-content-end d-lg-flex d-none align-items-center">

                        <?php
                        require("admin/connections/conn.php");
                        session_start();
                        $usuarioid = $_SESSION['usuarioId'];
                        $sql = "select c.id cid, cl.id clid, cl.cliente clcliente from clientes as c inner join clientes_loja as cl on c.id = cl.cliente where cl.cliente = '$usuarioid'";
                        $result = mysqli_query($conn, $sql);
                        $resultado = mysqli_fetch_assoc($result);

                        if ($result && $result->num_rows == null) {
                            echo "<li class='nav-item mr-3 '>";
                            echo "<button style=' height: 39px' class='button-vender'><a class='' href='quero-vender.php'>Quero vender</a></button>";
                            echo "</li>";
                        } else if ($result && $result->num_rows != null) {
                            echo "<li class='nav-item mr-3 '>";
                            echo "<button style=' height: 39px' class='button-vender'><a class='' href='quero-vender.php'>Quero vender</a></button>";
                            echo "</li>";
                        }
                        mysqli_close($conn);
                        ?>

                        <li style='margin-right: 10px' class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">vizinhança</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="vizinhos.php">Vizinhos</a>
                                <a class="dropdown-item" href="influenciadores.php">Influenciadores</a>
                                <a class="dropdown-item" href="eventos.php">Eventos</a>
                                <a class="dropdown-item" href="indique.php">Eu Indico</a>
                                <a class="dropdown-item" href="apoieumacausa.php">Apoie um Causa</a>
                                <a class="dropdown-item" href="blog.php">Blog</a>
                                <div class="dropdown-divider"></div>
                                <?php
                                error_reporting(E_ERROR | E_WARNING | E_PARSE);
                                session_start();
                                if ($_SESSION['usuarioId'] == '') {

                                    echo "<a class='dropdown-item' href='planos.php'>Planos Conecta</a>";
                                } else {
                                    echo "<a class='dropdown-item' href='planos.php'>Planos Conecta</a>";

                                }
                                ?>
                            </div>
                        </li>
                        <li style="margin-right:10px; color:#CED4DA">|</li>

                        <?php
                        error_reporting(E_ERROR | E_WARNING | E_PARSE);
                        session_start();
                        $usuarioid = $_SESSION['usuarioId'];

                        if ($_SESSION['usuarioId'] == '') {
                            echo "<li  style='margin-right: 20px' class='nav-item buttom-menu px-2'>";
                            echo "<a href='duvidas-frequentes.php'>";
                            echo "<img src='./images/chat.png' alt='whatsapp'>";
                            echo "</a>";
                            echo "</li>";
                            echo "<li class='nav-item mr-6'>";
                            echo "<a class='nav-link' style='cursor: pointer' data-toggle='modal' data-target='#exampleModal'>login</a>";
                            echo "</li>";

                        } else {

                            echo "<li  style='margin-right: 20px' class='nav-item buttom-menu px-2'>";
                            echo "<a href='duvidas-frequentes.php'>";
                            echo "<img src='./images/chat.png' alt='whatsapp'>";
                            echo "</a>";
                            echo "</li>";

                            echo "<li class='nav-item dropdown '>";
                            echo "<a class='nav-link dropdown-toggle ' data-toggle='dropdown' href='#' role='button' style='font-weight: bold; color:#E30356 ' aria-haspopup='true' aria-expanded='false'>";
                            echo substr($_SESSION['usuarioNome'], 0, 8);
                            echo "</a>";
                            echo "<div class='dropdown-menu'>";

                            echo "<a class='dropdown-item' href='meus-dados.php'>Meus dados</a>";
                            echo "<a class='dropdown-item' href='minha-lojinha.php'>Minha lojinha</a>";

                            require("admin/connections/conn.php");
                            $sqlbuscaplanocliente = "select * from clientes where id = '$usuarioid'";
                            $resultbuscaplanocliente = mysqli_query($conn, $sqlbuscaplanocliente);

                            while ($rowbuscaplanocliente = mysqli_fetch_assoc($resultbuscaplanocliente)) {

                                if ($rowbuscaplanocliente['plano'] == 103) {
                                } else if ($rowbuscaplanocliente['plano'] == 104) {
                                } else if ($rowbuscaplanocliente['plano'] == 105) {
                                } else if ($rowbuscaplanocliente['plano'] == 1) {
                                    echo "<a class='dropdown-item' href='minha-conta.php'>Minha conta</a>";
                                    echo "<a class='dropdown-item' href='meus-produtos.php'>Meus produtos</a>";
                                    echo "<a class='dropdown-item' href='meus-servicos.php'>Meus serviços</a>";
                                    //echo "<a class='dropdown-item' href='meus-cupons.php'>Meus cupons</a>";
                                    echo "<a class='dropdown-item' href='meus-eventos.php'>Meus eventos</a>";
                                    echo "<a class='dropdown-item' href='minhas-causas.php'>Minhas causas</a>";
                                    echo "<a class='dropdown-item' href='meus-pedidos.php'>Meus pedidos</a>";
                                    echo "<a class='dropdown-item' href='minhas-indicacoes.php'>Minhas indicações</a>";
                                    echo "<a class='dropdown-item' href='conectavantagens.php'>Conecta vantagens</a>";
                                    echo "<a class='dropdown-item' href='cancelar-assinatura.php'>Cancelar assinatura</a>";
                                } else {
                                    echo "<a class='dropdown-item' href='minha-conta.php'>Minha conta</a>";
                                    echo "<a class='dropdown-item' href='meus-produtos.php'>Meus produtos</a>";
                                    echo "<a class='dropdown-item' href='meus-servicos.php'>Meus serviços</a>";
                                    //echo "<a class='dropdown-item' href='meus-cupons.php'>Meus cupons</a>";
                                    echo "<a class='dropdown-item' href='meus-eventos.php'>Meus eventos</a>";
                                    echo "<a class='dropdown-item' href='minhas-causas.php'>Minhas causas</a>";
                                    echo "<a class='dropdown-item' href='meus-pedidos.php'>Meus pedidos</a>";
                                    echo "<a class='dropdown-item' href='minhas-indicacoes.php'>Minhas indicações</a>";
                                    echo "<a class='dropdown-item' href='conectavantagens.php'>Conecta vantagens</a>";
                                }
                            }
                            echo "<div class='dropdown-divider'></div>";
                            echo "<a class='dropdown-item' href='functions/sair.php'>Sair</a>";
                            echo "</div>";
                            echo "</li>";
                        }
                        ?>
                    </ul>
                    <div style='width:50px; margin-left:10px ;float:right' class="exibir-elemento-mobile-apenas">
                        <?php
                        require("admin/connections/conn.php");
                        session_start();
                        $usuarioid = $_SESSION['usuarioId'];
                        $sql = "select c.id cid, c.nome cnome, c.imagem cimagem from clientes as c where c.id = '$usuarioid'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['cimagem'] == null) {
                                echo "<button style='float:right; width:30px;height:30px; border:none; background-color:#fff;margin-left:20px' onclick='openNavb()'><img style='width:30px;height:30px;' class='rounded-circle'  src='../images/semfoto.jpg'></button>";
                            } else {
                                echo "<button style='float:right; width:30px;height:30px; border:none; background-color:#fff;margin-left:20px;' onclick='openNavb()'><img style='width:30px;height:30px;' class='rounded-circle'  src='../admin/uploads/clientes/$row[cimagem]'></button>";
                            }
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                    <div style='float:left; width:30px;margin-left:20px' class="exibir-elemento-mobile-apenas">
                        <button style="float:right;margin-right:5px" class="navbar-toggler p-0 border-0" type="button"
                                onclick="openNav()">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>


            <div style="z-index: 9999; margin-top:20px" class="col-10 exibir-elemento-mobile-apenas">
                <form method="POST" action="pesquisar.php">
                    <div style="margin-left: 31px" class="input-group">
                        <input type="text" class="form-control search border-right-0" id="search" name="pesquisar"
                               placeholder="Busque por produto, serviço, loja ou região...">
                        <input type="hidden" name="categoria" value="todos">
                        <div class="input-group-append">
                            <button style="width: 40px" type="submit" class="input-group-text bg-transparent">
                                <img src="icons/search.svg" class="img-fluid" width="15"/>
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </nav>
</header>
