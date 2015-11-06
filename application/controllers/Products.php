<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//Set variables
		$arrData['strTitle']      = 'Products';
		$arrData['strTemplate']   = 'products/index';

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */