<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//Set variables
		$arrData['strTitle']      = 'My Cart';
		$arrData['strTemplate']   = 'cart/cart';

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */