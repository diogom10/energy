<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Sigere_model extends CI_Model {

    public function valida_cadastro($dados) {

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

    public function valida_login($dados) {
        $retorno = 0;
        $this->db->select('email,senha');
        $this->db->where('email', $dados['email']);
        $query = $this->db->get('usuario')->result();

        foreach ($query as $login) {

            if ($login->email == $dados['email']) {

                if ($login->senha == $dados['senha']) {

                    $retorno = 2; //senha e login corretos
                } else {
                    $retorno = 1; //senha incorreta
                }
            } else {
                $retorno = 0; //email incorreto    
            }
        }
        return $retorno;
    }

}
?>

