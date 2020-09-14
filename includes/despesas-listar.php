<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 10%">Movimento</th>
                <th style="width: 10%">Operação</th>
                <th style="width: 10%">Valor</th>
                <th style="width: 40%">Descrição</th>
                <th style="width: 10%">Status</th>
                <th style="width: 20%">Data</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM caixa where operacao = 2";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                //coluna movimento
                if($row['movimento'] == 1){
                    echo "<td>Entrada</td>";
                }
                else{
                    echo "<td>Saída</td>";
                }

                //coluna operação
                if($row['operacao'] == 1){
                    echo "<td>Venda</td>";
                }
                else if($row['operacao'] == 2){
                    echo "<td>Despesa</td>";
                } else {
                    echo "<td>Sangria</td>";
                }

                //coluna valor
                if($row['valor'] == null){
                    echo "<td>R$ 0</td>";
                }else if($row['valor'] == 0){
                    echo "<td>R$ 0</td>";
                }else {
                    echo "<td>R$ $row[valor]</td>";
                }

                echo "<td>$row[despesadescricao]</td>";

                if($row['status'] == 1){
                    echo "<td>Ativo</td>";
                }else if($row['status'] == 2){
                    echo "<td>Cancelado</td>";
                }else if($row['status'] == 3){
                    echo "<td>Em andamento</td>";
                }else{
                    echo "<td>Concluído</td>";
                }

                echo "<td>$row[datatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>