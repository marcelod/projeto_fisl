<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('include/topo', array('titulo' => 'HOME'));
		$this->load->view('include/menu', array('menu_active' => 'home'));
		$this->load->view('home');
		$this->load->view('include/rodape');
	}


}
