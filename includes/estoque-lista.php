<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 24%">Produto</th>
                <th style="width: 18%">Local armazenado</th>
                <th style="width: 18%">Valor de venda</th>
                <th style="width: 15%">Fornecedor</th>
                <th style="width: 15%">Status</th>
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
            $sql = "select * FROM produtos";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<th>$row[titulo]</th>";
                echo "<td>$row[localarmazenado]</td>";
                echo "<td>$row[valorvenda]</td>";
                echo "<td>$row[fornecedor]</td>";
                echo "<td>$row[status]</td>";
                echo "<td><a href='produtos_visualizar.php?id=$row[id]'><button type='button' class='btn btn-primary'>Visualizar</button></a></td>";
                echo "<td><a href='produtos_cadastrados_parametros.php?id=$row[id]'><button type='button' class='btn btn-secondary'>Parâmetros</button></a></td>";
                echo "<td><a href='produtos_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='produtos_imagem.php?id=$row[id]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='functions/produtos_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>