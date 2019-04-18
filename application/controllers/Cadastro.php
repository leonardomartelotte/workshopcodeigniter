<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Clientes_model');

	}



	public function cadastra()
	{
		$data = array(
			'Nome' => $this->input->post('Nome'),
			'Email' => $this->input->post('Email'),
			'Telefone' => $this->input->post('Telefone')
		);

		$this->Clientes_model->CadastraCLientes($data);
		redirect(base_url());

	}


	public function edita()
	{
		$data = array(
			'idCliente' => $this->input->post('idCliente'),
			'Nome' => $this->input->post('Nome'),
			'Email' => $this->input->post('Email'),
			'Telefone' => $this->input->post('Telefone')
		);

		$this->Clientes_model->EditaClientes($data);
		redirect(base_url());

	}

	public function remove()
	{
		$data = array(
			'idCliente' => $this->input->post('idCliente')
		);

		$this->Clientes_model->RemoveClientes($data);
		redirect(base_url());

	}







}
