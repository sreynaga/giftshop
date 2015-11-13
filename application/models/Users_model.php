<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	private function _getTable() {
		return 'users';
	}

	public function login( $strUsername = '', $strPassword = '' ) {
		$mixRet = false;

		if ( $strUsername != '' && $strPassword != '' ) {
			$this->db->select('id, username, is_admin');

			$this->db->where('username', $strUsername);
			$this->db->where('password', $strPassword);

			$oQuery = $this->db->get($this->_getTable());

			if ( $oQuery->num_rows() > 0 ) {
				$mixRet = $oQuery->row();
			}
		}

		return $mixRet;
	}

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */