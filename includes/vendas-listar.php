<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 10%">Movimento</th>
                <th style="width: 10%">Operação</th>
                <th style="width: 10%">Valor</th>
                <th style="width: 10%">Cliente</th>
                <th style="width: 10%">Fornecedor</th>
                <th style="width: 10%">Forma Pgto.</th>
                <th style="width: 10%">Parcelas</th>
                <th style="width: 10%">Status</th>
                <th style="width: 10%">Data</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, cl.id clid, cl.nome clnome, f.id fid, f.razaosocial frazaosocial FROM caixa as c inner join clientes as cl on c.cliente = cl.id left join fornecedores as f on c.fornecedor = f.id where c.operacao = 1 order by c.datatransacao desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                if($row['cmovimento'] == 1){
                   echo "<td>Entrada</td>";
                }
                else{
                    echo "<td>Saída</td>";
                }

                if($row['coperacao'] == 1){
                    echo "<td>Venda</td>";
                }
                else if ($row['coperacao'] == 2){
                    echo "<td>Despesa</td>";
                }
                else
                    {
                    echo "<td>Sangria</td>";
                }

                if($row['cvalor'] != 0 || null){
                    echo "<td>R$ $row[cvalor]</td>";
                }
                else{
                    echo "<td>R$ 0</td>";
                }







                echo "<td>$row[clnome]</td>";
                echo "<td>$row[frazaosocial]</td>";
                echo "<td>$row[cformapagamento]</td>";
                echo "<td>$row[cparcelas]</td>";

                if($row['cstatus'] == 1){
                    echo "<td>Ativo</td>";
                }
                else if($row['cstatus'] == 1){
                    echo "<td>Cancelado</td>";
                }
                else if($row['cstatus'] == 1){
                    echo "<td>Em andamento</td>";
                }
                else{
                    echo "<td>Concluído</td>";
                }





                echo "<td>$row[cdatatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>