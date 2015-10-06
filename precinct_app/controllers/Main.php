<?php

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		if(!$this->session->userdata('isLoggedIn')) {
			redirect('/Login/show_login');
		} else {					
			$this->load->library('table');
			$this->load->library('pagination');
			$this->load->helper('form');
			$this->load->model('Voter_model');
		}
	}
	
	function show_main() {
		$info['fullname'] = $this->session->userdata('fullname');

		$config = array();
		$config["base_url"] = site_url() . "Main/show_main";
		$config['per_page'] = ($this->input->post('sel')) ? $this->input->post('sel') : 10;	
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$result = $this->Voter_model->getVoters(array(
			'FLASTNAME' => $this->input->post('fl_input'),
			'FFIRSTNAME' => $this->input->post('ff_input')
		), $config['per_page'], $page);

		$config["total_rows"] = $this->Voter_model->rec_count;		
		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        //$config['first_link'] = '<span aria-hidden="true">&laquo;</span>';
        //$config['last_link'] = '<span aria-hidden="true">&raquo;</span>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
       // $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        //$config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);
		
		$data['links'] = $this->pagination->create_links();
		
		$this->table->set_heading(array(
			'DETAILED VIEW',
			'ID',
			'LAST NAME',
			'FIRST NAME',
			'MIDDLE NAME',
			'GENDER',
			'CIVIL STATUS'
		));
		
		$template = array(
			'table_open' => '<table class="table table-condensed table-bordered table-striped table-hover">'
		);
		
		$this->table->set_template($template);
		
		$data['tblGrid'] = $this->table->generate($result);
		
		$this->load->view('templates/header');
		//$this->load->view('templates/navbar', $info);
		$this->load->view('main_view',$data);
		$this->load->view('templates/footer');
	}
	
	function detailed_voter_info($vID) {
		$data['result'] = $this->Voter_model->view_voter($vID);
		$this->load->view('detailed_view', $data);
	}
}