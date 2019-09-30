
     
 <table class ="table table-hover">
 <h2 class="card-title">Contatos</h2>    
           <thead>
               <tr>
               <td>Nome</td>
               <td>E-mail</td>
               <td>Telefone</td>
               <td colspan='2'>Opções</td>

           </thead>
          
               <!--
-->

               <?php
              //  $cor = "#CCE5FF";
                //$aux = 1;

                foreach ($contatos as $linha) {
                   // if ($aux % 2 == 1) {
                    //    $cor = "#FFF";
                    //} else {
                     //   $cor = "#CCE5FF";
                    //}

                    //$aux = $aux + 1;

                    echo "<tr>" .
                        "<td>" . $linha->nome . "</td>" .
                        "<td>" . $linha->email . "</td>" .
                        "<td>" . $linha->telefone . "</td>" .
                        "<td>" .
                        "<a style='color:#fff' class='btn btn-warning btn-fw' href='contatos/alterar/" . $linha->id . " '>" .
                        "Alterar" .
                        "</a" .

                        "</td>" .
                       
                        "<td><a style='color:#fff' class='btn btn-warning btn-fw' href='contatos/DeletarContato/". $linha->id . "'>Excluir</a></td>" .

                       // "<td><a style='color:#fff' class='btn btn-warning btn-fw'>Endereco</a></td>" .

                        "</tr>";
                }
                ?>
           </tbody>
       </table>
 