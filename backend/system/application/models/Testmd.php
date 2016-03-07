<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmd extends CI_Model {

	public function index()
	{
		print('User Functions');
	}

	public function get()
	{
		$query = $this->db->query('select * from test');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
			return NULL;
	}

	public function getTop()
	{
		$query = $this->db->query('select * from test where topic like '.$topic);

		if($query->num_rows() > 0)
		{
			return $query->result();

		}
		else
			return NULL;
	}

		public function getTch()
	{
		$tid = $this->db->query('select tid from teacher where tname like '.$tname);
		$query = $this->db->query('select * from test where tid like '.$tid);

		if($query->num_rows() > 0)
		{
			return $query->result();

		}
		else
			return NULL;
	}

}