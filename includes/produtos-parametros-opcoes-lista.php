<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 79%">Parametro</th>
                <th style="width: 19%">Opção</th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $pegaid = (int)$_GET['id'];
            $sql = "select ppo.id ppoid, ppo.parametro ppoparametro, ppo.opcao ppoopcao, pp.id ppid, pp.categoria ppcategoria, pp.parametro ppparametro from produtos_parametros_opcoes as ppo inner join produtos_parametros as pp on ppo.parametro = pp.id where pp.id = '$pegaid'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[ppparametro]</th>";
                echo "<th>$row[ppoopcao]</th>";
                echo "<td><a href='functions/produtos_parametros_opcoes_excluir.php?id=$row[ppoid]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>