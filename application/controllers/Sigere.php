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
    
    public function inserir($dados) {
        var_dump($dados);
    }

    public function cadastrar() {
        $semente = "##123sigere";
        
        $data = array(
            "nome" => $this->input->Post("name"),
            "email" => $this->input->Post("email"),
            "senha" => md5($this->input->Post("pwd").$semente),
        );
        
          $this->model->inserir($data);
    }

}
