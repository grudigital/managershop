<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 15%">Vendedor</th>
                <th style="width: 10%">Valor</th>
                <th style="width: 55%">Descrição</th>
                <th style="width: 20%">Data</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM caixa where operacao = 3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[vendedor]</td>";
                echo "<td>$row[valor]</td>";
                echo "<td>$row[despesadescricao]</td>";
                echo "<td>$row[datatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>