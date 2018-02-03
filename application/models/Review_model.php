<?php
class Review_model extends CI_Model {

	public function get_names()
	{
		$query = $this->db->query('SELECT sr_id, sr_name FROM sr_people');

		return $query->result();

	}

	public function get_createdrequests($sr_select)
	{
		$this->db->select('*');
		$this->db->from('requests');
		$this->db->join('rpf', 'rpf.acct_num=requests.acctnum');
		$this->db->where('original_sr', $sr_select);
		$query = $this->db->get();

		return $query->result();
	}
}
