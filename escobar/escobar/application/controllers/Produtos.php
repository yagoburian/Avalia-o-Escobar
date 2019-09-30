<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    //Ação padrão... sempre que entrar, passará aqui.
	public function index()
	{
		echo "Você esta em Produtos.";
	}

    public function cadastro()

    {
        echo "Você está em Cadastros";
    }   

    public function fornecedor()
    {
        echo "Fornecedores dos Produtos";
    }
 }


