<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	const TOTAL_PRODUCTS_PER_PAGE = 5;

	public function __construct() {
		parent::__construct();

		$this->load->model('products_model');
		$this->load->model('categories_model');

		$this->load->library('pagination');
	}

	public function index( $numCategory = 0 ) {
		var_dump($numCategory);
		exit;
		$arrProducts   = $this->products_model->getProducts($numCategory);
		$arrCategories = $this->categories_model->getAllActiveCategories();

		var_dump(count($arrProducts));

		$config['base_url']   = base_url();
		$config['total_rows'] = count($arrProducts);
		$config['per_page']   = self::TOTAL_PRODUCTS_PER_PAGE;

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