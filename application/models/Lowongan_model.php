<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function add_lowongan()
	{
		$object = array(
			'posisi' => $this->input->post('posisi'),
			'job_des' => $this->input->post('job_des'),
			'status_lowongan' => 'tersedia',
			'id_jenis' => $this->input->post('id_jenis')
		);
		$this->db->insert('lowongan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_lowongan($id)
	{
		$query = null;
		if ($id != 0) {
			$query = $this->db->where('id_lowongan',$id)
							  ->join('jenis','jenis.id_jenis = lowongan.id_jenis')
							  ->get('lowongan')
							  ->row();
		}else{
			$query = $this->db->join('jenis','jenis.id_jenis = lowongan.id_jenis')
							  ->get('lowongan')
							  ->result();
		}
		return $query;
	}

	public function get_jenis()
	{
		return $this->db->get('jenis')
					 	->result();
	}

	public function edit_lowongan()
	{
		$object = array(
			'posisi' => $this->input->post('posisi'),
			'status_lowongan' => $this->input->post('status_lowongan')
		);
		$this->db->where('id_lowongan', $this->input->post('id_lowongan'))
				 ->update('lowongan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete_lowongan($id)
	{
		$this->db->where('id_lowongan',$id)
				 ->delete('lowongan');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Lowongan_model.php */
/* Location: ./application/models/Lowongan_model.php */