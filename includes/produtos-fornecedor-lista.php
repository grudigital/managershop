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
            $sql = "select p.id pid, p.titulo ptitulo,p.categoria pcategoria,p.codigo pcodigo,p.genero pgenero,p.peso ppeso,p.largura plargura,p.altura paltura,p.comprimento pcomprimento, p.localarmazenado plocalarmazenado, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, p.status pstatus, p.datacadastro pdatacadastro, pc.id pcid, pc.categoria pccategoria, f.id fid, f.razaosocial frazaosocial, pa.id paid, pa.local palocal, ps.id psid, ps.status psstatus from produtos as p inner join produtos_categorias as pc on p.categoria = pc.id left join fornecedores as f on p.fornecedor = f.id left join produtos_armazenamento as pa on p.localarmazenado = pa.id left join produtos_status as ps on p.status = ps.id where p.fornecedor = '$pegaid' order by p.datacadastro ";
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