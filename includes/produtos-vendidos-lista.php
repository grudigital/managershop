<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%; font-size:12px">Código</th>
                <th style="width: 20%; font-size:12px">Título</th>
                <th style="width: 20%; font-size:12px">Valor compra</th>
                <th style="width: 20%; font-size:12px">Valor venda</th>
                <th style="width: 20%; font-size:12px">Fornecedor</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select p.id pid, p.titulo ptitulo, p.codigo pcodigo, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, f.id fid, f.razaosocial frazaosocial from produtos as p inner join fornecedores as f on p.fornecedor = f.id";
            $result = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style='font-size:12px'>$row[pcodigo]</td>";
                echo "<td style='font-size:12px'>$row[ptitulo]</td>";
                echo "<td style='font-size:12px'>$row[pvalorcompra],00</td>";
                echo "<td style='font-size:12px'>$row[pvalorvenda],00</td>";
                echo "<td style='font-size:12px'>$row[frazaosocial]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>