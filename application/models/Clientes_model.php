<?php

class Clientes_model extends CI_Model {

function __construct(){
parent::__construct();
}


function CadastraCLientes($data){
    if($this->db->insert('Clientes', $data))
        $this->session->set_flashdata('mensagem' ,'Cadastro realizado com Sucesso!<br><br>');
    else
        $this->session->set_flashdata('mensagem' ,'Opa, ocorreu um erro! Tente novamente!<br><br>');
}

function ExibeClientes(){
    $query = $this->db->query("SELECT * FROM Clientes");
    return $query->result();
}


function EditaClientes($data){
    if($query = $this->db->query("UPDATE Clientes SET Nome = '$data[Nome]', Email = '$data[Email]', Telefone = '$data[Telefone]' WHERE idCliente = '$data[idCliente]'"))
        $this->session->set_flashdata('mensagem' ,'Dados atualizados com sucesso!<br><br>');
    else
        $this->session->set_flashdata('mensagem' ,'Opa, ocorreu um erro! Tente novamente!<br><br>');
}

function RemoveClientes($data){
    if($this->db->query("DELETE FROM Clientes WHERE idCliente = '$data[idCliente]'"))
        $this->session->set_flashdata('mensagem' ,'Cliente removido com sucesso!<br><br>');
    else
        $this->session->set_flashdata('mensagem' ,'Opa, ocorreu um erro! Tente novamente!<br><br>');
}













}