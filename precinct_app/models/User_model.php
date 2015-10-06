<?php

class User_model extends CI_Model {
	
	var $details;
	var $test;
	
	function validate_user($user, $pass) {
		$myFilter = array(
			'username' => $user,
			'password' => sha1($user.$pass)
		);
		
		$this->db->from('users');
		$this->db->where($myFilter);
		$rsUser = $this->db->get()->result();
		
		/*$rsUser Output
		array (size=1)
			0 => 
				object(stdClass)[22]
				  public 'username' => string 'admin' (length=5)
				  public 'password' => string 'efacc4001e857f7eba4ae781c2932dedf843865e' (length=40)
				  public 'fullname' => string 'Lemwel Valencia' (length=15)
		*/
		
		if(is_array($rsUser) && count($rsUser) == 1) {
			$this->details = $rsUser[0];
			$this->set_session();
			return true;
		}
		return false;
	}
	
	function set_session() {
        $this->session->set_userdata(array(
			'username' => $this->details->username,
			'fullname' => $this->details->fullname,
			'isLoggedIn' => true
		));
    }
	
}