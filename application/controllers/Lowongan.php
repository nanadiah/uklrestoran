<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowongan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lowongan_model');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			$id = 0;
			$data['list_lowongan'] = $this->lowongan_model->get_lowongan($id);
			$data['list_jenis'] = $this->lowongan_model->get_jenis();
			$data['main_menu'] = 'lowongan';
			$data['main_view'] = 'admin/lowongan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function detail_lowongan($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_lowongan'] = $this->lowongan_model->get_lowongan($id);
			$data['main_menu'] = 'lowongan';
			$data['main_view'] = 'admin/detail_lowongan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function edit_lowongan($id)
	{
		if ($this->session->userdata('username')) {
			$data['list_lowongan'] = $this->lowongan_model->get_lowongan($id);
			$data['main_menu'] = 'lowongan';
			$data['main_view'] = 'admin/edit_lowongan_view';
			$this->load->view('template', $data);	
		}else{
			redirect('login');
		}
	}

	public function proses_edit()
	{
		if ($this->session->userdata('username')) {
			if ($this->lowongan_model->edit_lowongan() == TRUE) {
				$this->session->set_flashdata('success', 'Edit Lowongan Success');
				redirect('lowongan');
			}else{
				$this->session->set_flashdata('failed', 'Edit Lowongan Failed');
				redirect('lowongan/edit_lowongan/'+$this->input->post('id_lowongan'));
			}
		}else{
			redirect('login');
		}
	}

	public function add_lowongan()
	{
		if ($this->session->userdata('username')) {
			if ($this->lowongan_model->add_lowongan() == TRUE) {
				$this->session->set_flashdata('success', 'Add Lowongan Success');
				redirect('lowongan');
			}else{
				$this->session->set_flashdata('failed', 'Add Lowongan Failed');
				redirect('lowongan');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_lowongan($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->lowongan_model->delete_lowongan($id) == TRUE) {
				$this->session->set_flashdata('success', 'Delete Lowongan Success');
				redirect('lowongan');
			}else{
				$this->session->set_flashdata('failed', 'Delete Lowongan Failed');
				redirect('lowongan');
			}
		}else{
			redirect('login');
		}
	}
}

/* End of file Lowongan.php */
/* Location: ./application/controllers/Lowongan.php */