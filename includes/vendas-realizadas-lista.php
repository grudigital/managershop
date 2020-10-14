<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 10%; font-size:12px">Código</th>
                <th style="width: 18%; font-size:12px">Vendedor</th>
                <th style="width: 18%; font-size:12px">Cliente</th>
                <th style="width: 13%; font-size:12px">Desconto</th>
                <th style="width: 13%; font-size:12px">Valor de venda</th>
                <th style="width: 15%; font-size:12px">Forma de Pagamento</th>
                <th style="width: 13%; font-size:12px">Data venda</th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, u.id uid, u.nome unome, cl.id clid, cl.nome clnome, cvi.id cviid, cvi.codigo cvicodigo, cvi.produto cviproduto, cvi.desconto cvidesconto, cvi.valorvenda cvivalorvenda, sum(cvi.desconto) as descontocodigo FROM caixa as c inner join usuarios as u on c.vendedor = u.id left join clientes as cl on c.cliente = cl.id left join caixa_venda_item as cvi on c.id = cvi.codigo where c.movimento = 1 and c.operacao = 1  group by cvi.codigo order by c.datatransacao desc";
            $result = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style='font-size:12px'>$row[cid]</td>";
                echo "<td style='font-size:12px'>$row[unome]</td>";
                echo "<td style='font-size:12px'>$row[clnome]</td>";
                echo "<td style='font-size:12px'>$row[descontocodigo],00</td>";
                echo "<td style='font-size:12px'>$row[cvalor],00</td>";
                 if($row['cformapagamento'] == 1){
                     echo "<td style='font-size:12px'>Dinheiro</td>";
                 }
                 else if($row['cformapagamento'] == 2){
                     echo "<td style='font-size:12px'>Débito</td>";
                 }
                 else if($row['cformapagamento'] == 3){
                     echo "<td style='font-size:12px'>Crédito</td>";
                 }
                 else if($row['cformapagamento'] == 4){
                     echo "<td style='font-size:12px'>Cheque</td>";
                 }
                 else {
                     echo "<td style='font-size:12px'>Não informado</td>";
                 }








                echo "<td style='font-size:12px'>$row[cdatatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>