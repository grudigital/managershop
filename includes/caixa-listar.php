<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 15%">Movimento</th>
                <th style="width: 15%">Operação</th>
                <th style="width: 25%">Descrição</th>
                <th style="width: 15%">Status</th>
                <th style="width: 15%">Valor</th>
                <th style="width: 15%">Data</th>

            </tr>
            </thead>
            <tbody>

            <?php
            require("connections/conn.php");
            $sql = "SELECT * from caixa order by datatransacao desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                if($row['movimento'] == 1){
                    echo "<td>entrada</td>";
                }
                else{
                    echo "<td>saída</td>";
                }
                if($row['operacao'] == 1){
                    echo "<td>venda</td>";
                }
                else if($row['operacao'] == 2){
                    echo "<td>despesa</td>";
                }
                else{
                    echo "<td>sangria</td>";
                }

                if($row['despesadescricao'] == null){
                    echo "<td>venda</td>";
                }else{
                    echo "<td>$row[despesadescricao]</td>";
                }


                if($row['status'] == 1){
                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-success'></i> Ativo</td>";
                }
                else if($row['status'] == 2){
                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-danger'></i> Cancelado</td>";
                }
                else if($row['status'] == 3){
                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-warning'></i> Em andamento</td>";
                }
                else{
                    echo "<td><i class='mdi mdi-checkbox-blank-circle text-success'></i> Concluído</td>";
                }

                if($row['valor'] == null){
                    echo "<td>0<p class='m-0 text-muted font-14'></p></td>";
                }
                else{
                    echo "<td>R$ $row[valor]<p class='m-0 text-muted font-14'></p></td>";
                }
                echo "<td>$row[datatransacao]</td>";
                echo "</tr>";
                echo "</tr>";
            }
            ?>








            </tbody>
        </table>
    </div>
</div>