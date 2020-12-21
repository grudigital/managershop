<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 35%">Produto</th>
                <th style="width: 15%">Categoria</th>
                <th style="width: 15%">Local armazenado</th>
                <th style="width: 15%">Valor de venda</th>
                <th style="width: 20%">Nota</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $usuarioid = $_SESSION['usuarioId'];
            $sql = "select p.id pid, p.titulo ptitulo,p.categoria pcategoria,p.codigo pcodigo,p.genero pgenero,p.peso ppeso,p.largura plargura,p.altura paltura,p.comprimento pcomprimento, p.localarmazenado plocalarmazenado, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, p.status pstatus, pc.id pcid, pc.categoria pccategoria, pa.id paid, pa.local palocal, ps.id psid, ps.status psstatus, u.id uid, u.fornecedor ufornecedor from produtos as p inner join produtos_categorias as pc on p.categoria = pc.id left join produtos_armazenamento as pa on p.localarmazenado = pa.id left join produtos_status as ps on p.status = ps.id left join usuarios as u on u.fornecedor = p.fornecedor where u.id = '$usuarioid' and p.status = 4";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[ptitulo]</td>";
                echo "<td>$row[pccategoria]</td>";
                echo "<td>$row[palocal]</td>";
                echo "<td>$row[pvalorvenda]</td>";
                echo "<td><a href='devolver_nota2.php?id=$row[pid]'><button style='font-size: 13px; width: 100%' type='button' class='btn btn-secondary'>Nota de devolução</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>