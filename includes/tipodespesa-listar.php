<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 5%">ID</th>
                <th style="width: 91%">Categoria</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * from despesa";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[id]</td>";
                echo "<td>$row[despesa]</td>";
                echo "<td><a href='tipodespesa_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/tipodespesa_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>