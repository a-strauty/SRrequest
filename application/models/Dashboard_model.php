<?php
class Dashboard_model extends CI_Model {
//get requests which equal user group variable
	public function get_request($user)
	{
		$this->db->select('*');
		$this->db->from('requests');
		$this->db->where('Status', $user);
		$query = $this->db->get();

		return $query->result();
	}
}
