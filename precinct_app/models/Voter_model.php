<?php

class Voter_model extends CI_Model {
	
	var $rec_count;
	
	function getRec($myFilter) {
		$myFilter = array_filter($myFilter);
		if(!empty($myFilter)) $this->db->where($myFilter);
		$this->db->select('ID, FLASTNAME, FFIRSTNAME, FMATERNALNAME, SEX, CIVILSTATUS');
		$qry = $this->db->get('voter_info');
		return $qry->num_rows();
	}
	
	function getVoters($myFilter, $rows, $start) {
	
		$this->rec_count = $this->getRec($myFilter);
		
		$myFilter = array_filter($myFilter);
		if(!empty($myFilter)) $this->db->where($myFilter);
		$this->db->select('ID, FLASTNAME, FFIRSTNAME, FMATERNALNAME, SEX, CIVILSTATUS');
		$this->db->order_by('FLASTNAME', 'DESC');
		$this->db->limit($rows, $start);
		$qry = $this->db->get('voter_info');
		$rows = $qry->result_array();
		foreach($rows as &$row) {
			array_unshift($row, "<a href='" . site_url() . "Main/detailed_voter_info/" .
			$row['ID'] . "' class=\"btn btn-sm btn-info\" data-toggle='modal'
			data-target='#voterView'>View</a>");
		}
		return $rows;
	}
	
	function view_voter($vID) {
		return $this->db->get_where('voter_info', array('ID' => $vID))->row_array();
	}
}