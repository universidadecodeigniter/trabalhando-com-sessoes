<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function Index()
	{
		$this->load->view('home');
	}

	public function Registrar()
	{
		$this->session->set_userdata('usuario',$this->input->post('nome'));
		redirect();
	}

	public function EncerrarSessao()
	{
		$this->session->unset_userdata('usuario');
		$this->session->set_flashdata('sessao-encerrada','Você encerrou sua sessão.');
		redirect();
	}

	public function SessaoTemporizada()
	{
		$this->session->set_tempdata('sessao-temporizada', '10 segundos', 10);
		redirect();
	}

	public function EncerrarSessoes()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
