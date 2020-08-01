<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Whatsapp</th>
                <th>Email</th>
                <th>Data de cadastro</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM clientes";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[nome]</th>";
                echo "<td>$row[cpf]</td>";
                echo "<td>$row[telefone]</td>";
                echo "<td>$row[whatsapp]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[datacadastro]</td>";
                echo "<td><a href='clientes_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/clientes_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>