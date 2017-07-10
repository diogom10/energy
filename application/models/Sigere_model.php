<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Sigere_model extends CI_Model {

    public function validar($dados) {
 
        $retorno = 0; 
        $this->db->select('email');
        $this->db->where('email', $dados['email']);
        $query = $this->db->get('usuario')->result();

        foreach ($query as $usuario) {


            if ($usuario->email == $dados['email']) {
                
                $retorno = 1;
            } else {
                $retorno = 0;
            }
        }
        
        return $retorno; 
    }
    

    public function inserir($dados) {


        $this->db->insert('usuario', $dados);
    }

}
?>

