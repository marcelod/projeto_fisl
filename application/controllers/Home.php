<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->model('produtos_model');
		$this->data['produtos'] = $this->produtos_model->getAll();

		$this->render();
	}
}
