<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Data de entrada</th>
                <th style="width: 18%">Produto</th>
                <th style="width: 14%">Categoria</th>
                <th style="width: 13%">Valor compra</th>
                <th style="width: 10%">Valor venda</th>
                <th style="width: 15%">Fornecedor</th>
                <th style="width: 10%">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $pegaid = (int)$_GET['id'];
            $sql = "select c.id cid, c.movimento cmovimento, c.operacao coperacao, c.valor cvalor, c.cliente ccliente, c.vendedor cvendedor, c.fornecedor cfornecedor, c.formapagamento cformapagamento, c.parcelas cparcelas, c.despesadescricao cdespesadescricao, c.status cstatus, c.datatransacao cdatatransacao, p.id pid, p.titulo ptitulo, p.categoria pcategoria, p.codigo pcodigo, p.genero pgenero, p.localarmazenado plocalarmazenado, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, p.status pstatus, p.datacadastro pdatacadastro from caixa as c inner join produtos as p on c.  '$pegaid' order by p.datacadastro ";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[pdatacadastro]</td>";
                echo "<td>$row[ptitulo]</td>";
                echo "<td>$row[pccategoria]</td>";
                echo "<td>$row[pvalorcompra]</td>";
                echo "<td>$row[pvalorvenda]</td>";
                echo "<td>$row[frazaosocial]</td>";
                echo "<td>$row[psstatus]</td>";


            }
            ?>
            </tbody>
        </table>
    </div>
</div>