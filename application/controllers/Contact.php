<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');

		$this->load->view('include/topo', array('titulo' => 'CONTATO'));
		$this->load->view('include/menu', array('menu_active' => 'contact'));
		$this->load->view('contact');
		$this->load->view('include/rodape');
	}
}
