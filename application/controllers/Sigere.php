<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sigere extends CI_Controller {

	public function __construct() {
            
          parent:: __construct();
          $this->load->model('', 'model', TRUE);
        }
	
	public function index()
	{
        $this->load->helper('form');
        $data['title'] = "Sigere";
        $this->load->view('_view.php', $data);
               
	}
}
