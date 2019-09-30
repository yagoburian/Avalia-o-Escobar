<?php

class Contatos extends CI_Controller
{

    public function index()
    {
        $this->load->model("Contatos_Model");

        $contatos = $this->Contatos_Model->buscarTodos();

        $pacote = array(
            "contatos" => $contatos,
            "pagina" => "tabela.php"
        );

        // $this->load->view("tabela", $pacote);
        $this->load->view("index", $pacote);
    }
    public function novo()
    {
        // $this->load->view('contatoNovo');
        $pacote = array(
            "pagina" => "contatoNovo.php"
        );
        $this->load->view('index', $pacote);
    }
    public function salvarNovo()
    {
        //var_dump($_POST);
        $dados = array(
            'nome' => $_POST['nome'],
            'telefone' => $_POST['telefone'],
            'email' => $_POST['email'],
            'estado' => $_POST['estado'],
            'cidade' => $_POST['cidade'],
            'pais' => $_POST['pais']

        );

        $this->load->model('Contatos_Model');
        $this->Contatos_Model->salvarNew($dados);



        redirect('index.php/contatos');
    }
    //Controller Contatos
    public function alterar($identificador)
    {

        $this->load->model("Contatos_Model");
        $contato = $this->Contatos_Model->buscarId($identificador);
        $pacote = array(
            "contato" => $contato,
            "pagina" => "contatoAlterar.php"
        );

        $this->load->view('index', $pacote);
    }

    //Controller
    public function salvarAlterar()
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $pais = $_POST['pais'];


        $this->load->model("Contatos_Model");
        $this->Contatos_Model->salvarAlterar($id, $nome, $telefone, $email, $estado, $cidade, $pais);
        redirect("contatos");
    }

    //Deletar Contatos
    public function DeletarContato($id)
    {

        $this->load->model("Contatos_Model");
        $this->Contatos_Model->DeletarContato($id);
        redirect("contatos");
    }

    //buscar endereco
    public function endereco()
    {
        $this->load->model("Contatos_Model");

        $contatos = $this->Contatos_Model->buscarTodos();

        $pacote = array(
            "contatos" => $contatos,
            "pagina" => "endereco.php"
        );
        $this->load->view('index', $pacote);
    }
}
