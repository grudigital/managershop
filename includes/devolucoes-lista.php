<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Data de entrada</th>
                <th style="width: 22%">Produto</th>
                <th style="width: 15%">Categoria</th>
                <th style="width: 18%">Fornecedor</th>
                <th style="width: 10%">Status</th>
                <th style="width: 15%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select p.id pid, p.titulo ptitulo,p.categoria pcategoria,p.codigo pcodigo,p.genero pgenero,p.peso ppeso,p.largura plargura,p.altura paltura,p.comprimento pcomprimento, p.localarmazenado plocalarmazenado, p.valorcompra pvalorcompra, p.valorvenda pvalorvenda, p.fornecedor pfornecedor, p.status pstatus, p.datacadastro pdatacadastro, pc.id pcid, pc.categoria pccategoria, f.id fid, f.razaosocial frazaosocial, pa.id paid, pa.local palocal, ps.id psid, ps.status psstatus from produtos as p inner join produtos_categorias as pc on p.categoria = pc.id left join fornecedores as f on p.fornecedor = f.id left join produtos_armazenamento as pa on p.localarmazenado = pa.id left join produtos_status as ps on p.status = ps.id order by p.datacadastro";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[pdatacadastro]</td>";
                echo "<td>$row[ptitulo]</td>";
                echo "<td>$row[pccategoria]</td>";
                echo "<td>$row[frazaosocial]</td>";
                echo "<td>$row[psstatus]</td>";

                if($row['pstatus'] == '4'){
                    echo "<td><a href='devolver_nota.php?id=$row[pid]'><button style='font-size: 13px; width: 100%' type='button' class='btn btn-secondary'>Nota de devolução</button></a></td>";
                } else {
                    echo "<td><a href='functions/devolver_item.php?id=$row[pid]'><button style='font-size: 13px; width: 100%' type='button' class='btn btn-primary'>Devolver item</button></a></td>";
                }
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>