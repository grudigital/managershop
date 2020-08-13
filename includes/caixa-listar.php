<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 25%">Movimento</th>
                <th style="width: 25%">Operação</th>
                <th style="width: 25%">Valor</th>
                <th style="width: 25%">Data</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM caixa";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                if($row['movimento'] ==1){
                    echo "<th>Entrada</th>";
                }else{
                    echo "<th>Saída</th>";
                }

                if($row['operacao'] ==1){
                    echo "<th>Venda</th>";
                } else if($row['operacao'] ==2){
                    echo "<th>Despesa</th>";
                } else{
                    echo "<th>Sangria</th>";
                }
                echo "<td>$row[valor]</td>";
                echo "<td>$row[datatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>