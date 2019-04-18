<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Clientes_model');
	}


	public function index()
	{

		$data['Clientes'] = $this->Clientes_model->ExibeClientes();

		$this->load->view('welcome_message', $data);
	}
}
