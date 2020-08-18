<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Categoria</th>
                <th style="width: 78%">Parametro</th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro, pc.categoria pccategoria FROM produtos_parametros as pp inner join produtos_categorias as pc on pp.categoria = pc.id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[pccategoria]</th>";
                echo "<th>$row[ppparametro]</th>";
                echo "<td><a href='produtos_parametros_opcoes.php?id=$row[ppid]'><button type='button' class='btn btn-info'>Opções</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>