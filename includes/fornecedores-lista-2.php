<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 14%">Código</th>
                <th style="width: 23%">Razão social</th>
                <th style="width: 20%">CNPJ / CPF</th>
                <th style="width: 23%">E-mail</th>
                <th style="width: 20%">Data de cadastro</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM fornecedores";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[id]</th>";
                echo "<th>$row[razaosocial]</th>";
                echo "<td>$row[cnpjcpf]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[datacriacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>