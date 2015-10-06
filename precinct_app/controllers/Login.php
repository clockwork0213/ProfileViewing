<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index() {
		if($this->session->userdata('isLoggedIn')) {
			redirect('Main/show_main');
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
	
	function login_user() {
		$this->load->model('User_model');
		
		$user = $this->input->post('user_input');
		$pass = $this->input->post('pass_input');
		
		if($user && $pass && $this->User_model->validate_user($user, $pass)) {
			redirect('Main/show_main');
		} else {
			$this->show_login(true);
		}
	}
	
	function logout_user() {
		$this->session->sess_destroy();
		$this->index();
	}
	
}