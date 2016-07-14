<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

	public function getAll()
	{
		// $query = $this->db->query("
		// 		SELECT * FROM produtos ORDER BY nome
		// 	");

		$query = $this->db
			->order_by('nome')
			->get('produtos');

		if ($query->num_rows() > 0) {
			return $query->result();
		}

		return array();
	}


}
