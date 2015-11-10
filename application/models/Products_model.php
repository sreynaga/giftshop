<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	private function _getTable() {
		return 'products';
	}

	/*
	 * Method to get the all products
	 */
	public function getProducts( $numCategory = 0 ) {
		$this->db->select('p.id AS product_id, p.name AS product_name, p.description, p.price, p.id_category, p.image');
		$this->db->select('c.id AS category_id, c.name AS category_name');

		$this->db->from('products AS p');
		$this->db->join('categories AS c', 'p.id_category = c.id', 'LEFT');

		if ( $numCategory > 0 ) {
			$this->db->where('p.id_category', $numCategory);
		}

		$oQuery = $this->db->get();

		return $oQuery->result();
	}

}

/* End of file products_model.php */
/* Location: ./application/models/products_model.php */