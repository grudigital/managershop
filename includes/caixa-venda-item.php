<hr>
<h4 class="mt-0 header-title" style="background-color: #6C757D; padding-top: 7px; padding-left:10px; height: 40px; color: #fff; font-size: 20px"> Produtos selecionados</h4>

<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Imagem</th>
                <th style="width: 35%">Produto</th>
                <th style="width: 17%">Valor Unit.</th>
                <th style="width: 12%">Desconto</th>
                <th style="width: 14%">Quantidade</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $pegaid = (int)$_GET['id'];
            $sql = "select cv.id cvid, cv.codigo cvcodigo, cv.produto cvproduto, cv.quantidade cvquantidade, cv.desconto cvdesconto, cv.valorvenda cvvalorvenda, p.id pid, p.titulo ptitulo, p.codigo pcodigo, p.imagem pimagem from caixa_venda_item as cv inner join produtos as p on cv.produto = p.id where cv.codigo = '$pegaid'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img style='width: 100px; height: 100px' src='uploads/produtos/$row[pimagem]'></td>";
                echo "<td>$row[ptitulo] <br/> ( Código: $row[pcodigo] )</td>";
                echo "<td>R$ $row[cvvalorvenda]</td>";

                if($row['cvdesconto'] == null){
                    echo "<td>0</td>";
                }
                else{
                    echo "<td>R$ $row[cvdesconto]</td>";
                }

                if($row['cvquantidade'] == null){
                    echo "<td>1</td>";
                }else{
                    echo "<td>$row[cvquantidade]</td>";
                }


                echo "<td><a href='caixa-produto-desconto.php?id=$row[cvid]'><button type='button' class='btn btn-warning'>Desconto</button></a></td>";
                echo "<td><a href='functions/caixa_retirar.php?id=$row[cvid]'><button type='button' class='btn btn-danger'>Retirar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
