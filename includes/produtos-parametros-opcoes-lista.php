<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 79%">Titulo</th>
                <th style="width: 19%">Tipo</th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $pegaid = (int)$_GET['id'];
            $sql = "select pp.id ppid, pp.titulo pptitulo, pp.tipo pptipo, ppo.id ppoid, ppo.produto ppoproduto, ppo.opcao ppoopcao  FROM produtos_parametros as pp inner join produtos_parametros_opcoes as ppo on pp.id = ppo.produto where pp.id = $pegaid";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[pptitulo]</th>";
                echo "<th>$row[pptipo]</th>";
                echo "<td><a href='functions/produtos_parametros_opcoes_excluir.php?id=$row[ppoid]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>