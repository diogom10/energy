<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Home_model extends CI_Model {

    public function home_usuario($dados) {
        $retorno = [];
        $this->db->where('id', $dados);
        $query = $this->db->get('usuario')->result();

        foreach ($query as $result) {
            $retorno['nome'] = $result->nome;
            $retorno['email'] = $result->foto;
            $retorno['foto'] = $result->foto;
        }
        
        return $retorno;
    }

}
