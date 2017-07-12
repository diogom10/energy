<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sigere extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->library('session');
        $this->load->model('Sigere_model', 'model', TRUE);
        $this->load->helper('url');
    }

    public function index() {

        $this->load->helper('form');
        $data['title'] = "Sigere";
        $this->load->view('login_view.php', $data);
    }

    
    public function home_view() {
        $data['title'] = "Sigere";
        $this->load->view('home_view.php', $data);
    }
    

    public function validador_cadastro() {


        $dados_cadastro = array(
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
        $dados_sessao = 0;

        $dados_login = array(
            "email" => $this->input->Post("email_login"),
            "senha" => md5($this->input->Post("pwd_login") . HASH),
        );
        $retorno_login = [];
        $valida = $this->model->valida_login($dados_login);

        if ($valida['json'] == 0) {
            $retorno_login['existe_erro'] = "email";
            $retorno_login['mensagem'] = "*Email Não Encontrado";
        } else if ($valida['json'] == 1) {
            $retorno_login['existe_erro'] = "senha";
            $retorno_login['mensagem'] = "*Senha Incorreta";
        } else {
            $retorno_login['existe_erro'] = "valido";
            $retorno_login['usuario'] = $valida["nome_login"];
            $usuario = explode(' ', $valida["nome_login"]);
            $dados_sessao = array(
                'nome_de_usuario' => $usuario[0] . " " . $usuario[1],
                'email' => $dados_login['email'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($dados_sessao);
        }
        echo json_encode($retorno_login);
    }

}
