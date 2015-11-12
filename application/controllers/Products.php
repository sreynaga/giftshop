<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('products_model');
		$this->load->model('categories_model');

		$this->load->library('pagination');
	}

	public function index( $numCategory = 0, $numItemsPerPage = Products_model::TOTAL_PRODUCTS_PER_PAGE, $numPage = 0 ) {
		$arrProducts      = $this->products_model->getProducts($numCategory, $numItemsPerPage, $numPage);
		$numTotalProducts = $this->products_model->getTotalProducts($numCategory);
		
		$arrCategories = $this->categories_model->getAllActiveCategories();

		$strUrl = 'products/' . $numCategory . '/' . $numItemsPerPage;

		$config['base_url']   = base_url($strUrl);
		$config['total_rows'] = $numTotalProducts;
		$config['per_page']   = $numItemsPerPage;

		$this->pagination->initialize($config); 

		$strPagination = $this->pagination->create_links();

		//Set variables
		$arrData['strTitle']      = 'Products';
		$arrData['strTemplate']   = 'products/index';
		$arrData['arrProducts']   = $arrProducts;
		$arrData['arrCategories'] = $arrCategories;
		$arrData['numCategory']   = $numCategory;
		$arrData['strPagination'] = $strPagination;

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */