<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('cart');
	}

	public function index() {
		//Set variables
		$arrData['strTitle']            = 'My Cart';
		$arrData['strTemplate']         = 'cart/cart';
		$arrData['numTotalCarProducts'] = $this->cart->total_items();
		$arrData['arrCart']             = $this->cart->contents();
		$arrData['numOrderTotal']       = $this->cart->total();

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

	public function add() {
		if ( $this->input->post() ) {
			$arrInsertData = array(
				'id'    => $this->input->post('id', true),
				'name'  => $this->input->post('name', true),
				'price' => $this->input->post('price', true),
				'qty'   => 1
			);

			$this->cart->insert($arrInsertData);
		}

		redirect('products');
	}

	public function remove( $strRowId = '' ) {
		if ( $strRowId != '' ) {
			$arrData = array(
				'rowid'   => $strRowId,
				'qty'     => 0
			);

			$this->cart->update($arrData);
		}

		redirect('cart');
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */