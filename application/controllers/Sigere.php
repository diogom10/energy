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
    }

    public function validador() {
        $semente = "##123sigere";
        $retorno_json = [];
        
        $data = array(
            "nome" => $this->input->Post("name"),
            "email" => $this->input->Post("email"),
            "senha" => md5($this->input->Post("pwd") . $semente),
        );

        $valida = $this->model->validar($data);

        if ($valida == 0) {
            $this->cadastrar($data);
            $retorno_json['existe_erro'] = false;
          
        } else {
            $retorno_json['existe_erro'] = true;
            $retorno_json['mensagem'] = "*Ja Existe um usuario com Esse Email";

            
        }
        echo json_encode($retorno_json);
    }

    public function cadastrar($dados) {

        $this->model->inserir($dados);
    }

}
