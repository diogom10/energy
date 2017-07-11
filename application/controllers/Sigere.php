<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sigere extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->model('Sigere_model', 'model', TRUE);
    }

    public function index() {
        $this->load->helper('form');
        $data['title'] = "Sigere";
        $this->load->view('login_view.php', $data);
        //$this->load->view('home_view.php', $data);
<<<<<<< HEAD
    
    }
    public function cadastrar() {
        $semente = "##123sigere";
        
        $data = array(
=======
    }

    public function validador_cadastro() {


        $dados_cadastro = array(
>>>>>>> c0d284981c6bdc3f17da362f0ed8f6f5ea2ba4fd
            "nome" => $this->input->Post("name"),
            "email" => $this->input->Post("email"),
            "senha" => md5($this->input->Post("pwd") . HASH),
        );

        $retorno_cadastro = [];


        $valida = $this->model->valida_cadastro($dados_cadastro);

        if ($valida == 0) {
            $this->cadastrar($dados_cadastro);
            $retorno_cadastro['existe_erro'] = false;
        } else {
            $retorno_cadastro['existe_erro'] = true;
            $retorno_cadastro['mensagem'] = "*Ja Existe um usuario com Esse Email";
        }
        echo json_encode($retorno_cadastro);
    }

    public function cadastrar($dados) {

        $this->model->inserir($dados);
    }

    public function validador_login() {

        $dados_login = array(
            "email" => $this->input->Post("email_login"),
            "senha" => md5($this->input->Post("pwd_login") . HASH),
        );

        $retorno_login = [];

        $valida = $this->model->valida_login($dados_login);

        if ($valida == 0) {
            $retorno_login['existe_erro'] = "email";
            $retorno_login['mensagem'] = "*Email Não Encontrado";
        } else if ($valida == 1) {
           $retorno_login['existe_erro'] = "senha";
            $retorno_login['mensagem'] = "*Senha Incorreta";
        } else {
            $retorno_login['existe_erro'] = "valido";
          
        }
        
         echo json_encode($retorno_login);
    }

}
