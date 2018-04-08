<?php
class Sr_model extends CI_Model {

	public function get_names()
	{
		$query = $this->db->query('SELECT sr_id, sr_name FROM sr_people');

		return $query->result();

	}

	public function get_names_array()
	{
		$query = $this->db->query('SELECT sr_id, sr_name FROM sr_people');

		return $query->result_array();
	}

	public function get_days()
	{
		$query = $this->db->query('SELECT value, day, dayshorthand FROM list_weekday');

		return $query->result();
	}

	public function get_days_array()
	{
		$query = $this->db->query('SELECT value, day FROM list_weekday');

		return $query->result_array();
	}

	public function get_accounts($sr_select, $dayradio)
	{
		$this->db->select('*');
		$this->db->from('sr_routing');
		$this->db->join('rpf', 'rpf.acct_num=sr_routing.sr_acct');
		$this->db->where('sr_day', $dayradio);
		$this->db->where('sr_name', $sr_select);
		$query = $this->db->get();

		return $query->result();
	}

	public function get_request($day, $req_change)
	{
		$this->db->select('*');
		$this->db->from('sr_routing');
		$this->db->join('rpf', 'rpf.acct_num=sr_routing.sr_acct');
		$this->db->where('sr_day', $day);
		$this->db->where_in('acct_num', $req_change);
		$query = $this->db->get();

		return $query->result();
	}

	public function set_request($req)
	{
		//loop through each submitted request and insert to database
		foreach ($req as $data)
		{
			$this->db->insert('requests', $data);
		}
	}
}
