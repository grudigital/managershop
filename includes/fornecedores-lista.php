<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th>Razão social</th>
                <th>CNPJ / CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Whatsapp</th>
                <th>Data de cadastro</th>
                <th></th>
                <th></th>
                <th></th>
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
                echo "<td>$row[cnpjcpf]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[telefone]</td>";
                echo "<td>$row[whatsapp]</td>";
                echo "<td>$row[datacriacao]</td>";
                echo "<td><a href='fornecedores_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='fornecedores_imagem.php?id=$row[id]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='functions/fornecedores_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>