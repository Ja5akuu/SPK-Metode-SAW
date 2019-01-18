<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_alternatif');

		if ($this->session->userdata('level') == '' or $this->session->userdata('level') == 'manager'  ) {
			# code...
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'SISTEM PENGAMBILAN KEPUTUSAN KARYAWAN BARU DENGAN METODE SAW',
			'read_alternatif' => $this->M_alternatif->read_alternatif()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('alternatif/v_alternatif', $data);
		$this->load->view('template/footer', $data);
	}

	public function create_alternatif()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('usia', 'usia', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tes', 'tes', 'trim|required|xss_clean');
		$this->form_validation->set_rules('keahlian', 'keahlian', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('alternatif'));

		} else {
			# code...
			$nama = $this->input->post('nama');
			$pendidikan = $this->input->post('pendidikan');
			$usia = $this->input->post('usia');
			$tes = $this->input->post('tes');
			$keahlian = $this->input->post('keahlian');

			$data = array(
				'alternatif' => $nama , 
				'k1' => $pendidikan , 
				'k2' => $usia ,
				'k3' => $tes ,
				'k4' => $keahlian 
			);

			$this->M_alternatif->create_($data,'alternatif');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('alternatif'));
		}

	}

	public function edit_alternatif($id)
	{
		$where = array('id_alternatif' => $id );

		$data['alternatif'] = $this->M_alternatif->edit_($where,'alternatif')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('alternatif/edit_alternatif', $data);
		$this->load->view('template/footer', $data);


	}

	public function update_alternatif()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('usia', 'usia', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tes', 'tes', 'trim|required|xss_clean');
		$this->form_validation->set_rules('keahlian', 'keahlian', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('alternatif'));

		} else {
			# code...
			$id_alternatif = $this->input->post('id_alternatif');
			$nama = $this->input->post('nama');
			$pendidikan = $this->input->post('pendidikan');
			$usia = $this->input->post('usia');
			$tes = $this->input->post('tes');
			$keahlian = $this->input->post('keahlian');

			$data = array(
				'alternatif' => $nama , 
				'k1' => $pendidikan , 
				'k2' => $usia ,
				'k3' => $tes ,
				'k4' => $keahlian 
			);

			$where = array('id_alternatif' => $id_alternatif );

			$this->M_alternatif->update_($where,$data,'alternatif');

			$this->session->set_flashdata('update', 'Data Succes update');
			redirect(base_url('alternatif'));
		}
	}

	public function delete_alternatif($id)
	{
		$where = array(
			'id_alternatif' => $id  
		);

		$data = $this->M_alternatif->delete_($where,'alternatif');

		$this->session->set_flashdata('delete', 'Data Succes Delete');
		redirect(base_url('alternatif'));
	}

}

/* End of file c_alternatif.php */
/* Location: ./application/modules/alternatif/controllers/c_alternatif.php */