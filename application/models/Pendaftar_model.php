<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_pendaftar($id)
	{
		$query = null;
		if ($id != 0) {
			$query = $this->db->where('id_pendaftar',$id)
							  ->where('username !=','none')
							  ->get('pendaftar')
							  ->row();
		}else{
			$query = $this->db->where('username !=','none')
							  ->get('pendaftar')
							  ->result();
		}
		return $query;
	}

	public function add_pendaftar()
	{
		$object = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('pendaftar', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit_pendaftar()
	{
		$object = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->db->where('id_pendaftar', $this->input->post('id_pendaftar'))
				 ->update('pendaftar', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete_pendaftar($id)
	{
		$this->db->where('id_pendaftar',$id)
				 ->delete('pendaftar');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file Pendaftar_model.php */
/* Location: ./application/models/Pendaftar_model.php */