<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->render();
	}

	protected function render($view = '')
	{

		$this->data['titulo'] = strtoupper($this->router->fetch_class());

		$this->load->view('include/topo', $this->data);
		$this->load->view('include/menu', array('menu_active' => $this->router->fetch_class()));
		$this->load->view($view !== '' ? $view : $this->router->fetch_class(), $this->data);
		$this->load->view('include/rodape');
	}
}
