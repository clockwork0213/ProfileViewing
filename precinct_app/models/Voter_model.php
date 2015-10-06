<?php

class Voter_model extends CI_Model {
	
	var $rec_count;
	
	function getVoters($myFilter, $rows, $start) {
		$myFilter = array_filter($myFilter);
		$this->db->select('ID, FLASTNAME, FFIRSTNAME, FMATERNALNAME, SEX, CIVILSTATUS');
		if(!empty($myFilter)) $this->db->where($myFilter);
		$this->db->limit($rows, $start);
		$this->db->order_by('FLASTNAME', 'ASC');
		$rows = $this->db->get('voter_info')->result_array();
		$rec_count = $this->db->count_all_results();
		foreach($rows as &$row) {
			array_unshift($row, "<a href='" . site_url() . "Main/view_voter/" .
			$row['ID'] . "' class=\"btn btn-sm btn-info\" data-toggle='modal'
			data-target='#voterView'>View</a>");
		}
		return $rows;
	}
	
	function view_voter($vID) {
		return $this->db->get_where('voter_info', array('ID' => $vID))->row_array();
	}
}