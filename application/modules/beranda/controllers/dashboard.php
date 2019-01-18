<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') == '') {
			# code...
			redirect(base_url('auth'));
		}
		//Do your magic here
	}
	public function index()
	{
		$data = array(
			'title' => 'SISTEM PENGAMBILAN KEPUTUSAN KARYAWAN BARU DENGAN METODE SAW'
			 );
		
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data);
		$this->load->view('beranda/content',$data);
		$this->load->view('template/footer',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/modules/beranda/controllers/dashboard.php */