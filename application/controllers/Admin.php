<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->_isAdmin();

		$this->load->model('products_model');

		$this->load->library('cart');
	}

	public function index() {
		$arrProducts = $this->products_model->getProducts();

		//Set variables
		$arrData['strTitle']            = 'Administrator';
		$arrData['strTemplate']         = 'admin/index';
		$arrData['numTotalCarProducts'] = $this->cart->total_items();
		$arrData['arrProducts']         = $arrProducts;

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

	private function _isAdmin() {
		if ( !$this->session->userdata('is_admin') ) {
			redirect('products');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */