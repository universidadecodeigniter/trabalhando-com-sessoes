<?php $this->load->view('commons/cabecalho'); ?>

<div class="container">
	<div class="page-header">
		<h1>Trabalhando com sessões no CodeIgniter</h1>
	</div>
	<?php if ($this->session->flashdata('sessao-encerrada') == TRUE): ?>
		<div class="alert alert-info"><?= $this->session->flashdata('sessao-encerrada'); ?></div>
	<?php endif; ?>
	<?php if ($this->session->tempdata('sessao-temporizada') == TRUE): ?>
		<div class="alert alert-warning">Você possui uma sessão temporizada que vai durar <?= $this->session->tempdata('sessao-temporizada'); ?> segundos.</div>
	<?php endif; ?>
	<?php if(!$this->session->has_userdata('usuario')){ ?>
	<p class="lead">
		Registre-se para prosseguir.
	</p>
	<p>
		<em>O registro é apenas na sessão, seus dados não serão armazenados em banco de dados.</em>
	</p>
	<form action="<?=base_url('registrar')?>" method="POST">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required/>
		</div>
		<div class="form-group">
			<input type="submit" value="Registrar" class="btn btn-success" />
		</div>
	</form>
<?php } else{ ?>
<p class="lead">Olá <strong><?=$this->session->userdata('usuario')?></strong>!</p>
<p>Para encerrar sua sessão, clique <a href="<?=base_url('encerrar-sessao')?>">aqui</a>.</p>

<p>
	Clique <a href="<?=base_url('sessao-temporizada')?>">aqui</a> para criar uma sessão que vai durar apenas 10 segundos.
</p>

<p>
	Clique <a href="<?=base_url('encerrar-sessoes')?>">aqui</a> para encerrar todas as sessões.
</p>
<?php } ?>
</div>

<?php $this->load->view('commons/rodape'); ?>
