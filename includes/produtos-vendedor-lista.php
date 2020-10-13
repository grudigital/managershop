<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Data de transação</th>
                <th style="width: 15%">Valor</th>
                <th style="width: 20%">Cliente</th>
                <th style="width: 20%">Fornecedor</th>
                <th style="width: 15%">Forma pagamento</th>
                <th style="width: 10%">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $pegaid = (int)$_GET['id'];
            $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, cl.id clid, cl.nome clnome, f.id fid, f.razaosocial frazaosocial from caixa as c inner join clientes as cl on c.cliente = cl.id left join fornecedores as f on c.fornecedor = f.id  where c.movimento = 1 and c.operacao = 1 and c.vendedor = '$pegaid' order by c.datatransacao ";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[cdatatransacao]</td>";
                echo "<td>R$ $row[cvalor],00</td>";
                echo "<td>$row[clnome]</td>";
                echo "<td>$row[frazaosocial]</td>";

                if($row['cformapagamento'] == 1){
                    echo "<td>Dinheiro</td>";
                }
                else if($row['cformapagamento'] == 2){
                    echo "<td>Débito</td>";
                }else if($row['cformapagamento'] == 3){
                    echo "<td>Crédito</td>";
                }else if($row['cformapagamento'] == 4){
                    echo "<td>Cheque</td>";
                }else{
                    echo "<td>Não informado</td>";
                }

                if($row['cstatus'] == 1){
                echo "<td>Ativo</td>";
                }
                else if($row['cstatus'] == 2){
                    echo "<td>Cancelado</td>";
                }else if($row['cstatus'] == 3){
                    echo "<td>Em andamento</td>";
                }else if($row['cstatus'] == 4){
                    echo "<td>Concluído</td>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>