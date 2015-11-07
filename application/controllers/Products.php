<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('products_model');
		$this->load->model('categories_model');

		$this->load->library('pagination');
	}

	public function index() {
		$arrProducts   = $this->products_model->getProducts();
		$arrCategories = $this->categories_model->getAllActiveCategories();

		$config['base_url'] = base_url();
		$config['total_rows'] = 22;
		$config['per_page'] = 20; 

		$this->pagination->initialize($config); 

		echo $this->pagination->create_links();
		exit;

		//Set variables
		$arrData['strTitle']      = 'Products';
		$arrData['strTemplate']   = 'products/index';
		$arrData['arrProducts']   = $arrProducts;
		$arrData['arrCategories'] = $arrCategories;

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */