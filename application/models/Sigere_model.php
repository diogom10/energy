<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Sigere_model extends CI_Model {

    public function validar() {
        
    }

    public function inserir($dados) {


        $this->db->insert('usuario', $dados);

    }

        public function cadastrar($dados) {
            
        }

    }


?>

