<table class="table table-hover">
    <h2 class="card-title">Endereço</h2>
    <thead>
        <tr>
            <td>Nome</td>
            <td>Estado</td>
            <td>Cidade</td>
            <td>Pais</td>
            <!-- <td colspan='2'>Endereço</td> -->

            <?php

            foreach ($contatos as $linha) {


                echo "<tr>" .
                    "<td>" . $linha->nome . "</td>" .
                    "<td>" . $linha->estado . "</td>" .
                    "<td>" . $linha->cidade . "</td>" .
                    "<td>" . $linha->pais . "</td>" .
                    "</tr>";
            }
            ?>
            </tbody>
</table>