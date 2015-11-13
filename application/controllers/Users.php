<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('users_model');

		$this->load->library('cart');
	}

	public function index() {
		$this->_isLoggedIn();

		//Set variables
		$arrData['strTitle']            = 'Login';
		$arrData['strMenuActive']       = 'login';
		$arrData['strTemplate']         = 'users/login';
		$arrData['numTotalCarProducts'] = $this->cart->total_items();

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

	public function login() {
		$this->_isLoggedIn();
		
		$strUsername = $this->input->post('username');
		$strPassword = md5($this->input->post('password'));

		if ( $strUsername == '' || $strPassword == '' ) {
			$this->session->set_flashdata( 'strError', 'Username and password are required' );
			redirect ('users');
		}

		$mixLogin = $this->users_model->login($strUsername, $strPassword);

		if ( $mixLogin ) {
			$arrData = array(
				'loggued'  => true,
				'id_user'  => (int) $mixLogin->id,
				'username' => $mixLogin->username,
				'is_admin' => (int) $mixLogin->is_admin
			);

			$this->session->set_userdata( $arrData );

			redirect( 'products' );
		} else {
			$this->session->set_flashdata( 'strError', 'Your username and password combo was incorrect' );
			redirect ('users');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('products');
	}

	private function _isLoggedIn() {
		if ( $this->session->userdata('loggued') ) {
			redirect('products');
		}
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */