<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{
		$this->load->helper('form');

		$this->render();
	}
}
