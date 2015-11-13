<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('products_model');
		$this->load->model('categories_model');

		$this->load->library('pagination');
		$this->load->library('cart');

		$this->load->helper('cookie');
	}

	public function index( $numCategory = 0 ) {
		$strSearch        = ( $this->input->get('query') != '' ) ? $this->input->get('query', true) : '';
		$numTotalProducts = $this->products_model->getTotalProducts($numCategory, $strSearch);
		$arrCategories    = $this->categories_model->getAllActiveCategories();
		$mixCategory      = ( $numCategory > 0 ) ? $numCategory : 'all';
		

		if ( $this->input->post('products_per_page') != '' ) {
			$numProductsPerPage = (int) $this->input->post('products_per_page');
			setcookie('products_per_page', $numProductsPerPage, 0, base_url());

			$strRedirect = 'products/' . $mixCategory;

			if ( $strSearch != '' ) {
				$strRedirect .= '?query=' . $strSearch;
			}

			redirect($strRedirect);
		}
		
		$numProductsPerPage = ( get_cookie('products_per_page') ) ? get_cookie('products_per_page') : products_model::TOTAL_PRODUCTS_PER_PAGE;

		//Pagination
		$arrPaginationConfig['base_url']         = base_url() . 'products/' . $mixCategory;
		$arrPaginationConfig['total_rows']       = $numTotalProducts;
		$arrPaginationConfig['per_page']         = $numProductsPerPage;
		$arrPaginationConfig['uri_segment']      = 3;
		
		if ($strSearch != '') {
			$arrPaginationConfig['suffix'] = '?query='.$strSearch;
		}

		$this->pagination->initialize($arrPaginationConfig);

		$numPage = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		$arrProducts = $this->products_model->getProducts($numCategory, $strSearch, $numProductsPerPage, $numPage);

		//Set variables
		$arrData['strTitle']            = 'Products';
		$arrData['strTemplate']         = 'products/index';
		$arrData['arrProducts']         = $arrProducts;
		$arrData['arrCategories']       = $arrCategories;
		$arrData['numCategory']         = $numCategory;
		$arrData['strSearch']           = $strSearch;
		$arrData['numProductsPerPage']  = $numProductsPerPage;
		$arrData['strPagination']       = $this->pagination->create_links();
		$arrData['numTotalCarProducts'] = $this->cart->total_items();

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */