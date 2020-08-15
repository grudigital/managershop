<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 80%">Produto</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select p.id pid, p.titulo ptitulo, p.categoria pcategoria, pp.id ppid, pp.titulo pptitulo, pp.tipo pptipo from produtos as p INNER JOIN produtos_parametros as pp on p.categoria = pp.tipo group by p.id order by p.id desc ";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[ptitulo]</th>";
                echo "<td style='width: 2%'><a href='produtos_visualizar.php?id=$row[pid]'><button type='button' class='btn btn-primary'>Visualizar</button></a></td>";
                echo "<td style='width: 2%'><a href='preferencias_editar.php?id=$row[pid]'><button type='button' class='btn btn-secondary'>Preferencias</button></a></td>";
                echo "<td style='width: 2%'><a href='produtos_editar.php?id=$row[pid]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td style='width: 2%'><a href='produtos_imagem.php?id=$row[pid]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td style='width: 2%'><a href='functions/produtos_excluir.php?id=$row[pid]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>