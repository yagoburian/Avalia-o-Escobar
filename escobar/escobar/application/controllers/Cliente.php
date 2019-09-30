<?php

class Cliente extends CI_Controller {
    public function index(){

        echo "Você está em clientes";
    }
    public function buscar(){
      $this->load->model("Cliente_Model");
      $clientes = $this->Cliente_Model->PegarCliente();
      /*echo "<table border=1>".
                "<tr>".
                   "<td>Id</td>".
                   "<td>Nome</td>".
                   "<td>Apelido</td>". 
                   "<td>Idade</td>".
                   "<tr>"; */

                   foreach($clientes as $linha) {
                       echo $linha->id;
                       echo " - ";
                       echo $linha->nome;
                                            

                   }
    }                   
}

?>       