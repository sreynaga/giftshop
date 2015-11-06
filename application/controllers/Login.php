<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		//Set variables
		$arrData['strTitle']      = 'Login';
		$arrData['strMenuActive'] = 'login';
		$arrData['strTemplate']   = 'users/login';

		//Load the view
		$this->load->view('layout/general', $arrData);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */