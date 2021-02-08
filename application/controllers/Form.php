<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_form');
	}

	public function index()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('no_whatsapp', 'No. Whatsapp', 'required|trim|min_length[10]');
		$this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('domisili', 'Domisili', 'required|trim');
		$this->form_validation->set_rules('sumber_info_program', 'Sumber Info', 'required|trim');

		if ($this->form_validation->run() === false) {
			// Menajalankan Validation
			$data['title'] = 'Form Registration Hots';
			$this->load->view('tamplates/header', $data);
			$this->load->view('form-registration');
			$this->load->view('tamplates/footer');
		} else {
			$data = [
				'nama_lengkap' 			=> htmlspecialchars($this->input->post('nama_lengkap')),
				'tempat_lahir' 			=> htmlspecialchars($this->input->post('tempat_lahir')),
				'tanggal_lahir' 		=> htmlspecialchars($this->input->post('tanggal_lahir')),
				'jenis_kelamin' 		=> htmlspecialchars($this->input->post('jenis_kelamin')),
				'pekerjaan' 			=> htmlspecialchars($this->input->post('pekerjaan')),
				'no_whatsapp' 			=> htmlspecialchars($this->input->post('no_whatsapp')),
				'email' 				=> htmlspecialchars($this->input->post('email')),
				'domisili' 				=> htmlspecialchars($this->input->post('domisili')),
				'kode_pos' 				=> htmlspecialchars($this->input->post('kode_pos')),
				'sumber_info_program' 	=> htmlspecialchars($this->input->post('sumber_info_program')),
				'date_created'			=> time()
			];

			$this->M_form->insertData($data);

			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
            Selamat Anda Telah Registration di Hafidz On The Street!
            </div>');
			redirect('form');
		}
	}
}
