<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

	const ACTIVE_STATUS = 1;

	private function _getTable() {
		return 'categories';
	}

	public function getAllActiveCategories() {
		$this->db->select('id, name');
		$this->db->where('status', self::ACTIVE_STATUS);
		$oQuery = $this->db->get($this->_getTable());

		return $oQuery->result();
	}

}

/* End of file categories_model.php */
/* Location: ./application/models/categories_model.php */