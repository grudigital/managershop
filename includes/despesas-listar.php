<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 9.09%">Movimento</th>
                <th style="width: 9.09%">Operação</th>
                <th style="width: 9.09%">Valor</th>
                <th style="width: 9.09%">Cliente</th>
                <th style="width: 9.09%">Vendedor</th>
                <th style="width: 9.09%">Fornecedor</th>
                <th style="width: 9.09%">Forma Pgto.</th>
                <th style="width: 9.09%">Parcelas</th>
                <th style="width: 9.09%">Status</th>
                <th style="width: 9.09%">Descrição</th>
                <th style="width: 9.09%">Data</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM caixa where operacao = 2";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[movimento]</th>";
                echo "<td>$row[operacao]</td>";
                echo "<td>$row[valor]</td>";
                echo "<td>$row[cliente]</td>";
                echo "<td>$row[vendedor]</td>";
                echo "<td>$row[fornecedor]</td>";
                echo "<td>$row[formapagamento]</td>";
                echo "<td>$row[parcelas]</td>";
                echo "<td>$row[despesadescricao]</td>";
                echo "<td>$row[status]</td>";
                echo "<td>$row[datatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>