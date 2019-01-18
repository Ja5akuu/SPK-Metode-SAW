<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$data = array(
			'title' => 'SISTEM PENGAMBILAN KEPUTUSAN KARYAWAN BARU DENGAN METODE SAW' ,
			'title_login' => 'SPK KARYAWAN BARU DENGAN METODE SAW',
			'copyright' => 'Ternak Code',

			 );
		$this->load->view('login',$data);
	}


	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check username or password');

			redirect(base_url('auth'));
		} else {
			# code...
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$query = $this->M_auth->cek_user($username,$password);

			if ($query->num_rows() > 0 ) {
				# code...
				foreach ($query->result() as $data) {
					# code...
					$sess_data = $this->session->set_userdata(array(
						'username' => $data->username , 
						'level' => $data->level 
					));

					redirect(base_url('home'));
				}

			} else {
				# code...
				$this->session->set_flashdata('error', 'something wrong, please check username or password');

			redirect(base_url('auth'));
			}
			
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */