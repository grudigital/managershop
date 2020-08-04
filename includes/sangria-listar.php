<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 14.28%">Movimento</th>
                <th style="width: 14.28%">Operação</th>
                <th style="width: 14.28%">Valor</th>
                <th style="width: 14.28%">Vendedor</th>
                <th style="width: 14.28%">Forma de pagamento</th>
                <th style="width: 14.28%">Status</th>
                <th style="width: 14.28%">Data de transação</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM caixa where operacao = 3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[movimento]</th>";
                echo "<td>$row[operacao]</td>";
                echo "<td>$row[valor]</td>";
                echo "<td>$row[vendedor]</td>";
                echo "<td>$row[formapagamento]</td>";
                echo "<td>$row[status]</td>";
                echo "<td>$row[datatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>