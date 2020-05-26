<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pendaftar_model');
		$this->load->model('lowongan_model');
		$this->load->model('transaksi_model');
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('username_pendaftar')) {
			$id = 0;
			$data['list_lowongan'] = $this->lowongan_model->get_lowongan($id);
			$data['list_transaksi'] = $this->transaksi_model->get_transaksi($id);
			$data['main_view'] = 'pendaftar/pendaftar_view';
			$this->load->view('template', $data);
		}else {
			redirect('login/login_pendaftar');
		}
	}

	public function detail_pendaftar($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_pendaftar'] = $this->pendaftar_model->get_pendaftar($id);
			$data['main_menu'] = 'pendaftar';
			$data['main_view'] = 'admin/detail_pendaftar_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function list_pendaftar()
	{
		if ($this->session->userdata('username')) {
			$id = 0;
			$data['list_pendaftar'] = $this->pendaftar_model->get_pendaftar($id);
			$data['main_menu'] = 'pendaftar';
			$data['main_view'] = 'admin/list_pendaftar_view';
			$this->load->view('template', $data);
		}else {
			redirect('login');
		}
	}

	public function edit_pendaftar($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_pendaftar'] = $this->pendaftar_model->get_pendaftar($id);
			$data['main_menu'] = 'pendaftar';
			$data['main_view'] = 'admin/edit_pendaftar_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function proses_edit()
	{
		if ($this->session->userdata('username')) {
			if ($this->pendaftar_model->edit_pendaftar() == TRUE) {
				$this->session->set_flashdata('success', 'Edit Pendaftar Success');
				redirect('pendaftar/list_pendaftar');
			}else{
				$this->session->set_flashdata('failed', 'Edit Pendaftar Failed');
				redirect('pendaftar/edit_pendaftar/'+$this->input->post('id_pendaftar'));
			}
		}else{
			redirect('login');
		}
	}

	public function add_pendaftar()
	{
		if ($this->session->userdata('username')) {
			if ($this->pendaftar_model->add_pendaftar() == TRUE) {
				$this->session->set_flashdata('success', 'Add Pendaftar Success');
				redirect('pendaftar/list_pendaftar');
			}else{
				$this->session->set_flashdata('failed', 'Add Pendaftar Failed');
				redirect('pendaftar/list_pendaftar');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_pendaftar($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->pendaftar_model->delete_pendaftar($id) == TRUE) {
				$this->session->set_flashdata('success', 'Delete Pendaftar Success');
				redirect('pendaftar/list_pendaftar');
			}else{
				$this->session->set_flashdata('failed', 'Delete Pendaftar Failed');
				redirect('pendaftar/list_pendaftar');
			}
		}else{
			redirect('login');
		}
	}
}

/* End of file Pendaftar.php */
/* Location: ./application/controllers/Pendaftar.php */