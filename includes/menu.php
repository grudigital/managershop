<div class="left side-menu">
    <div class="topbar-left">
        <div class="">
            <!--<a href="index.html" class="logo text-center">Admiria</a>-->
            <a href="index.php" class="logo"><img src="assets/images/logo-sm.png" height="36" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                <?php
                require("connections/conn.php");
//                session_start();
                $usuarioid = $_SESSION['usuarioId'];
                $sql = "select * from usuarios where id = '$usuarioid'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    // perfil 1 - administrador
                    if ($row['perfil'] == 1) {
                        echo "<li><a href='index.php' class='waves-effect'><i class='mdi mdi-view-dashboard'></i> <span> Home </span></a></li>";
                        echo "<li><a href='abrircaixa.php' class='waves-effect'><i class='mdi mdi-clipboard-outline'></i><span> Abrir caixa </span></a></li>";
                        echo "<li class='menu-title'>Cadastros</li>";
                        echo "<li><a href='clientes.php' class='waves-effect'><i class='mdi mdi-account-location'></i><span>Clientes</span></a></li>";
                        echo "<li><a href='fornecedores.php' class='waves-effect'><i class='mdi mdi-airplane'></i><span>Fornecedores</span></a></li>";
                        echo "<li><a href='produtos.php' class='waves-effect'><i class='mdi mdi-cart-outline'></i><span>Produtos disponíveis</span></a></li>";
                        echo "<li><a href='produtos_devolvidos.php' class='waves-effect'><i class='mdi mdi-cart-outline'></i><span>Produtos devolvidos</span></a></li>";
                        echo "<li><a href='produtos_excluidos.php' class='waves-effect'><i class='mdi mdi-outbox'></i><span>Produtos excluídos</span></a></li>";
                        echo "<li><a href='produtos_parametros.php' class='waves-effect'><i class='mdi mdi-format-list-bulleted-type'></i><span>Produtos / Parâmetros</span></a></li>";
                        echo "<li><a href='armazenamento.php' class='waves-effect'><i class='mdi mdi-table-column-width'></i><span>Armazenamento</span></a></li>";
                        echo "<li><a href='usuarios.php' class='waves-effect'><i class='mdi mdi-email-outline'></i><span>Usuários</span></a></li>";
                        echo "<li class='menu-title'>PDV</li>";
                        echo "<li><a href='estoque.php' class='waves-effect'><i class='mdi mdi-flask-outline'></i><span>Estoque </span></a></li>";
                        echo "<li><a href='devolucoes.php' class='waves-effect'><i class='mdi mdi-help-circle'></i><span>Devoluções </span></a></li>";
//                        echo "<li><a href='vendasporfornecedor.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Vendas por fornecedor </span></a></li>";
//                        echo "<li><a href='vendasporvendedor.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Vendas por vendedor </span></a></li>";
//                        echo "<li><a href='vendasrealizadas.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Vendas realizadas </span></a></li>";
//                        echo "<li><a href='produtosvendidos.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Produtos vendidos </span></a></li>";
                        echo "<li class='menu-title'>Consultas / Relatórios</li>";
                        echo "<li><a href='relatorio_vendasporperiodo.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Vendas por período</span></a></li>";
                        echo "<li><a href='relatorio_entradassaidas.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Entradas x Saídas</span></a></li>";
                        echo "<li><a href='relatorio_contaspagar.php' class='waves-effect'><i class='mdi mdi-chart-line'></i><span>Contas a pagar</span></a></li>";
                        echo "<li class='menu-title'>Financeiro</li>";
                        echo "<li><a href='tipodespesa.php' class='waves-effect'><i class='mdi mdi-google-pages'></i><span>Tipo de despesa</span></a></li>";
                        echo "<li><a href='functions/sair.php'><button style=' background-color:#fff; color: #263238; font-weight: bold; margin-top:10px; border-radius: 5px; height: 40px; width:100%; border: none'>Sair</button></a></li>";

                    //perfil 2 - vendedor
                    } else if ($row['perfil'] == 2) {
                        echo "<li><a href='index.php' class='waves-effect'><i class='mdi mdi-view-dashboard'></i> <span> Home </span></a></li>";
                        echo "<li><a href='abrircaixa.php' class='waves-effect'><i class='mdi mdi-clipboard-outline'></i><span> Abrir caixa </span></a></li>";
                        echo "<li class='menu-title'>Cadastros</li>";
                        echo "<li><a href='clientes.php' class='waves-effect'><i class='mdi mdi-account-location'></i><span>Clientes</span></a></li>";
                        echo "<li><a href='fornecedores.php' class='waves-effect'><i class='mdi mdi-airplane'></i><span>Fornecedores</span></a></li>";
                        echo "<li><a href='produtos.php' class='waves-effect'><i class='mdi mdi-cart-outline'></i><span>Produtos disponíveis</span></a></li>";
                        echo "<li class='menu-title'>PDV</li>";
                        echo "<li><a href='devolucoes.php' class='waves-effect'><i class='mdi mdi-help-circle'></i><span>Devoluções </span></a></li>";
                        echo "<li style='margin-top: 90px'><a href='functions/sair.php'><button style=' background-color:#fff; color: #263238; font-weight: bold; margin-top:10px; border-radius: 5px; height: 40px; width:100%; border: none'>Sair</button></a></li>";

                    //perfil 3 - fornecedor
                    } else if ($row['perfil'] == 3) {
                        echo "<li><a href='index.php' class='waves-effect'><i class='mdi mdi-view-dashboard'></i> <span> Home </span></a></li>";
                        echo "<li class='menu-title'>Produtos</li>";
                        echo "<li><a href='meus-produtos.php' class='waves-effect'><i class='mdi mdi-cart-outline'></i><span>Produtos disponíveis</span></a></li>";
                        echo "<li><a href='meus-produtos-vendidos.php' class='waves-effect'><i class='mdi mdi-cart-outline'></i><span>Produtos vendidos</span></a></li>";
                        echo "<li><a href='meus-produtos-devolvidos.php' class='waves-effect'><i class='mdi mdi-cart-outline'></i><span>Produtos devolvidos</span></a></li>";
                        echo "<li style='margin-top: 220px'><a href='functions/sair.php'><button style=' background-color:#fff; color: #263238; font-weight: bold; margin-top:10px; border-radius: 5px; height: 40px; width:100%; border: none'>Sair</button></a></li>";
                    }
                }
                mysqli_close($conn);
                ?>


            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
