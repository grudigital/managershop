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
            $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, u.id uid, u.nome unome, u.email uemail, u.perfil uperfil FROM caixa as c inner join usuarios as u on c.vendedor = u.id where c.operacao = 3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[unome]</td>";
                echo "<td>$row[cvalor]</td>";
                echo "<td>$row[cdespesadescricao]</td>";
                echo "<td>$row[cdatatransacao]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>