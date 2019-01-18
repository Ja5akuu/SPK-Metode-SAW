<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_analisa');

		if ($this->session->userdata('level') == '') {
			# code...
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'SISTEM PENGAMBILAN KEPUTUSAN KARYAWAN BARU DENGAN METODE SAW',
			'read_alternatif' => $this->M_analisa->read_alternatif()->num_rows(),
			'read_kriteria' => $this->M_analisa->read_kriteria()->num_rows(),
			'get_alternatif' => $this->M_analisa->get_alternatif(),
			'get_max' => $this->M_analisa->get_max(),
			'get_costbenefit' => $this->M_analisa->get_costbenefit(),
			'get_kepentingan' => $this->M_analisa->get_kepentingan(),
			'get_alt_name' => $this->M_analisa->get_alt_name()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('analisa/analisa', $data);
		$this->load->view('template/footer', $data);
	}

	

}

/* End of file c_alternatif.php */
/* Location: ./application/modules/alternatif/controllers/c_alternatif.php */