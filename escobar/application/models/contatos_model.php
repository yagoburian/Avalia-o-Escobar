<?php

class Contatos_Model extends CI_Model
{

    public $id;
    public $nome;
    public $telefone;
    public $email;
    public $estado;
    public $cidade;
    public $pais;

    public function buscarTodos()
    {
        //SELECT * FROM contatos
        $retornoBanco = $this->db->get("contatos");
        $dados = $retornoBanco->result();
        return $dados;
    }
    public function salvarNew($linha)
    {
        $this->db->insert('contatos', $linha);
    }
    //Contatos_Model
    public function buscarId($id)
    {
        $sql = "SELECT * FROM contatos WHERE id = $id";
        $retorno = $this->db->query($sql);

        return  $retorno->result();
    }
    public function salvarAlterar($id, $nome, $telefone, $email, $estado, $cidade, $pais)
    {
        $this->db->where("id", $id);
        $this->db->set("nome", $nome);
        $this->db->set("telefone", $telefone);
        $this->db->set("email", $email);
        $this->db->set("estado", $estado);
        $this->db->set("cidade", $cidade);
        $this->db->set("pais", $pais);
        $this->db->update("contatos");
    }

    public function DeletarContato($id)
    {
        $deletar = $this->db->query("DELETE FROM contatos WHERE id = '$id'");
        return;
        //return $deletar->result();
    }

    public function endereco()
    {
        //SELECT * FROM contatos
        $retornoBanco = $this->db->query("SELECT nome,estado,cidade,pais FROM contatos");

        return $retornoBanco->result();
    }
}
