<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 24%">Nome</th>
                <th style="width: 24%">E-mail</th>
                <th style="width: 24%">Perfil</th>
                <th style="width: 24%">Data de cadastro</th>
                <th style="width: 2%"></th>
                <th style="width: 1%"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM usuarios";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[nome]</th>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[perfil]</td>";
                echo "<td>$row[datacadastro]</td>";
                echo "<td><a href='usuarios_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/usuarios_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>