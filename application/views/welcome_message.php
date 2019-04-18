<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

		<link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
		<script src="<?php echo base_url('js/jquery-3.3.1.min.js');?>"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

</head>
<body>

<?php echo $this->session->userdata('mensagem'); ?>

Cadastrar cliente

<br>
<?php echo form_open('cadastro/cadastra'); ?>
<input type="text" name="Nome" class="form-control m-3" placeholder="Informe o seu nome" required>
<input type="email" name="Email"  class="form-control m-3" placeholder="Informe o seu email" required>
<input type="number" name="Telefone"  class="form-control m-3" placeholder="Informe o seu telefone" required>

<?php echo form_submit(array('value' => 'Cadastrar' ,'class' =>'btn btn-warning m-3')).form_close(); ?>

<br>
<br>
<br>

<?php
foreach($Clientes as $InfoClientes){
 echo 'Nome: '.$InfoClientes->Nome;
 echo '<br>';
 echo 'Nome: '.$InfoClientes->Email;
 echo '<br>';
 echo 'Nome: '.$InfoClientes->Telefone;
 echo '<br>';


echo '
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Editar'.$InfoClientes->idCliente.'">
Editar Dados
</button>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Apagar'.$InfoClientes->idCliente.'">
Apagar Cliente</button>
<br>
<br>

<!-- Modal Edita CLiente -->
<div class="modal fade" id="Editar'.$InfoClientes->idCliente.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
	  '.form_open('cadastro/edita').'
		<input type="hidden" name="idCliente" value="'.$InfoClientes->idCliente.'">
		Nome: <input type="text" name="Nome" placeholder="'.$InfoClientes->Nome.'" value="'.$InfoClientes->Nome.'" class="" required>
		<br>
		Email: <input type="email" name="Email" placeholder="'.$InfoClientes->Email.'" value="'.$InfoClientes->Email.'" class="" required>
		<br>
		Telefone: <input type="number" name="Telefone" placeholder="'.$InfoClientes->Telefone.'" value="'.$InfoClientes->Telefone.'" class="" required>
		<br>
		<button type="button" class="btn btn-secondary btn-sm m-1 px-1" data-dismiss="modal">Voltar</button>
		'.form_submit(array('value' => 'Salvar Alterações', 'class'=>'')).form_close().'
      </div>
    </div>
  </div>
</div>


<!-- Modal Apaga CLiente -->
<div class="modal fade" id="Apagar'.$InfoClientes->idCliente.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="modal-body">
	  '.form_open('cadastro/remove').'
	  <br>
	  Tem certeza que deseja apagar os dados de '.$InfoClientes->Nome.'?
	  <br>
	  <br>
		<input type="hidden" name="idCliente" value="'.$InfoClientes->idCliente.'">
		
		
		<button type="button" class="btn btn-secondary btn-sm m-1 px-1" data-dismiss="modal">Voltar</button>
		'.form_submit(array('value' => 'Remover Cliente', 'class'=>'')).form_close().'
      </div>
    </div>
  </div>
</div>
';


}
?>



</body>
</html>