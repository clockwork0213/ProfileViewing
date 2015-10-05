<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index() {
		if($this->session->userdata('isLoggedIn')) {
			//redirect('');
		} else {
			$this->show_login(false);
		}
	}
	
	function show_login($show_error = false) {
		$data['error'] = $show_error;
		
		$this->load->helper('form');
		$this->load->view('templates/header');
		$this->load->view('login_view', $data);
		$this->load->view('templates/footer');
	}
	
	
}