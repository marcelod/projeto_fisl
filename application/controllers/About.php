<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('include/topo', array('titulo' => 'SOBRE'));
		$this->load->view('include/menu', array('menu_active' => 'about'));
		$this->load->view('about');
		$this->load->view('include/rodape');
	}


}
