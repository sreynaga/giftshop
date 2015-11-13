<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_products extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('products_model');
		$this->load->model('categories_model');

		$this->load->library('cart');
	}

	public function view( $numProductId = 0 ) {
		if ( $numProductId > 0 ) {
			$oProduct = $this->products_model->getProductById($numProductId);

			//Set variables
			$arrData['strTitle']            = 'Thank You';
			$arrData['strTemplate']         = 'products/view';
			$arrData['numTotalCarProducts'] = $this->cart->total_items();
			$arrData['oProduct']            = $oProduct;

			//Load the view
			$this->load->view('layout/general', $arrData);
		} else {
			redirect('products');
		}
	}

}

/* End of file View_products.php */
/* Location: ./application/controllers/View_products.php */