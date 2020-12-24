<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 32%">Razão social</th>
                <th style="width: 13%">Razão social</th>
                <th style="width: 2%"></th>

                <?php
                require("connections/conn.php");
                $usuarioid = $_SESSION['usuarioId'];
                $sql = "select * from usuarios where id = '$usuarioid'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    // perfil 1 - administrador
                    if ($row['perfil'] == 1) {
                        echo "<th style='width: 2%'></th>";
                        echo "<th style='width: 2%'></th>";
                        echo "<th style='width: 2%'></th>";
                    }
                }
                mysqli_close($conn);
                ?>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM fornecedores";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[razaosocial]</th>";
                echo "<td><a href='fornecedores_vendas.php?id=$row[id]'><button type='button' class='btn btn-secondary'>Vendas realizadas</button></a></td>";
                echo "<td><a href='fornecedores_visualizar.php?id=$row[id]'><button type='button' class='btn btn-primary'>Visualizar</button></a></td>";

            $usuarioid = $_SESSION['usuarioId'];
            $sql2 = "select * from usuarios where id = '$usuarioid'";
            $result2 = mysqli_query($conn, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {

            // perfil 1 - administrador
            if ($row2['perfil'] == 1) {

                echo "<td><a href='fornecedores_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='fornecedores_imagem.php?id=$row[id]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='functions/fornecedores_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
            }
            }

                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>