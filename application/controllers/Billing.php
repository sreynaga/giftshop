<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('cart');
	}

	public function index() {
		//Set variables
		$arrData['strTitle']            = 'Billing Info';
		$arrData['strTemplate']         = 'billing/billing_info';
		$arrData['numTotalCarProducts'] = $this->cart->total_items();
		$arrData['numOrderTotal']       = $this->cart->total();

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

	public function thankyou() {
		if ( $this->input->post() ) {
			$this->cart->destroy();

			//Set variables
			$arrData['strTitle']            = 'Thank You';
			$arrData['strTemplate']         = 'billing/thankyou';
			$arrData['numTotalCarProducts'] = $this->cart->total_items();
			$arrData['strName']             = $this->input->post('name', true);

			//Load the view
			$this->load->view('layout/general', $arrData);
		} else {
			redirect('products');
		}
	}

}

/* End of file Billing.php */
/* Location: ./application/controllers/Billing.php */