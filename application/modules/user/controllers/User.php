<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_user');

			if ($this->session->userdata('level') == '' or $this->session->userdata('level') == 'manager'  ) {
			# code...
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'SISTEM PENGAMBILAN KEPUTUSAN KARYAWAN BARU DENGAN METODE SAW',
			'read_user' => $this->M_user->read_user()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('user/v_user', $data);
		$this->load->view('template/footer', $data);
	}

	public function create_user()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('level', 'level', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('user'));

		} else {
			# code...
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');

			$data = array(
				'user' => $username , 
				'password' => $password , 
				'level' => $level 
			);

			$this->M_user->create_($data,'tb_user');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('user'));
		}

	}

	public function edit_user($id)
	{
		$where = array('id_user' => $id );

		$data['user'] = $this->M_user->edit_($where,'tb_user')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('user/edit_user', $data);
		$this->load->view('template/footer', $data);


	}

	public function update_user()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('level', 'level', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('user'));

		} else {
			# code...
			$id_user = $this->input->post('id_user');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');

			$data = array(
				'user' => $username , 
				'password' => $password , 
				'level' => $level 
			);

			$where = array('id_user' => $id_user );

			$this->M_user->update_($where,$data,'tb_user');

			$this->session->set_flashdata('update', 'Data Succes update');
			redirect(base_url('user'));
		}
	}

	public function delete_user($id)
	{
		$where = array(
			'id_user' => $id  
		);

		$data = $this->M_user->delete_($where,'tb_user');

		$this->session->set_flashdata('delete', 'Data Succes Delete');
		redirect(base_url('user'));
	}

}

/* End of file c_kriteria.php */
/* Location: ./application/modules/kriteria/controllers/c_kriteria.php */