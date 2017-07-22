<?php

class Home extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->library('session');
        $this->load->model('Home_model', 'model', TRUE);
        $this->load->helper('url');
    }

    public function index() {
        $user = $this->model->home_usuario($this->session->userdata('id_user'));
        $data['nome'] = $user['nome'];
        $data['email'] = $user['email'];
        $data['foto'] = $user['foto'];
        $data['title'] = "Sigere";
        $this->load->view('home_view.php', $data);
    }

    public function sair() {

        if ($this->input->POST('login')) {
            $data = array("nome_de_usuario", "email", "logged_in");
            $this->session->unset_userdata($data);
            $Retorno_sair = 1;
        }

        echo json_encode($Retorno_sair);
    }

    public function upload() {

        $Retorno_upload = [];

        if (!empty($_FILES['file'])) {


            $foto = explode('.', $_FILES['file']['name']);

            var_dump($foto);

            $extensao = $foto.array_pop();
            $nome = array_shift($foto);

            var_dump($nome + $extensao . "2");

            if ($extensao == "jpg" || "jpeg" || "png" || "svg") {


                $endereco = 'assets/images/user/' . $nome . uniqid() . $extensao;

                move_uploaded_file($_FILES['file']['tmp_name'], './' . $endereco);

                $data_model = array(
                    'id' => $this->session->userdata('id_user'),
                    'foto' => $endereco
                );

                $this->model->upload_img($data_model);

                $Retorno_upload['valido'] = TRUE;
                $Retorno_upload['imagem'] = $endereco;
            } else {
                $Retorno_upload['valido'] = FALSE;
                $Retorno_upload['erro'] = "erro";
            }

            echo json_encode($Retorno_upload);
        }
    }

}
