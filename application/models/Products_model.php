<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	const TOTAL_PRODUCTS_PER_PAGE = 5;

	private function _getTable() {
		return 'products';
	}

	/*
	 * Method to get the all products
	 */
	public function getProducts( $numCategory = 0, $strSearch = '', $numLimit = 0, $numStart = 0 ) {
		$this->db->select('p.id AS product_id, p.name AS product_name, p.description, p.price, p.id_category, p.image');
		$this->db->select('c.id AS category_id, c.name AS category_name');

		$this->db->from('products AS p');
		$this->db->join('categories AS c', 'p.id_category = c.id', 'LEFT');

		if ( $numCategory > 0 ) {
			$this->db->where('p.id_category', $numCategory);
		}

		if ( $strSearch != '' ) {
			$this->db->group_start();
			$this->db->like('p.name', $strSearch);
			$this->db->or_like('p.description', $strSearch);
			$this->db->group_end();
		}

		$this->db->order_by('p.id', 'asc');

		$this->db->limit($numLimit, $numStart);

		$oQuery = $this->db->get();

		//var_dump($this->db->last_query());

		return $oQuery->result();
	}

	/**
	 * Method to get the total of products
	 */
	public function getTotalProducts( $numCategory = 0, $strSearch = '' ) {
		if ( $numCategory > 0 ) {
			$this->db->where('id_category', $numCategory);
		}

		if ( $strSearch != '' ) {
			$this->db->group_start();
			$this->db->like('name', $strSearch);
			$this->db->or_like('description', $strSearch);
			$this->db->group_end();
		}

		return $this->db->count_all_results($this->_getTable());
	}

	public function getProductById( $numProductId = 0 ) {
		$mixRet = false;

		if ( $numProductId > 0 ) {
			$this->db->select('p.id AS product_id, p.name AS product_name, p.description, p.price, p.id_category, p.image');
			$this->db->select('c.id AS category_id, c.name AS category_name');

			$this->db->from('products AS p');
			$this->db->join('categories AS c', 'p.id_category = c.id', 'LEFT');
			
			$this->db->where('p.id', $numProductId);

			$oQuery = $this->db->get();

			$mixRet = $oQuery->row();
		}

		return $mixRet;
	}

}

/* End of file products_model.php */
/* Location: ./application/models/products_model.php */