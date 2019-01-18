<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_kriteria');

			if ($this->session->userdata('level') == '' or $this->session->userdata('level') == 'manager'  ) {
			# code...
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'SISTEM PENGAMBILAN KEPUTUSAN KARYAWAN BARU DENGAN METODE SAW',
			'read_kriteria' => $this->M_kriteria->read_kriteria()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('kriteria/v_kriteria', $data);
		$this->load->view('template/footer', $data);
	}

	public function create_kriteria()
	{
		$this->form_validation->set_rules('kriteria', 'kriteria', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bobot', 'bobot', 'trim|required|xss_clean');
		$this->form_validation->set_rules('cost', 'bobot', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('kriteria'));

		} else {
			# code...
			$kriteria = $this->input->post('kriteria');
			$bobot = $this->input->post('bobot');
			$cost = $this->input->post('cost');

			$data = array(
				'kriteria' => $kriteria , 
				'kepentingan' => $bobot , 
				'cost_benefit' => $cost 
			);

			$this->M_kriteria->create_($data,'kriteria');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('kriteria'));
		}

	}

	public function edit_kriteria($id)
	{
		$where = array('id_kriteria' => $id );

		$data['kriteria'] = $this->M_kriteria->edit_($where,'kriteria')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('kriteria/edit_kriteria', $data);
		$this->load->view('template/footer', $data);


	}

	public function update_kriteria()
	{
		$this->form_validation->set_rules('kriteria', 'kriteria', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bobot', 'bobot', 'trim|required|xss_clean');
		$this->form_validation->set_rules('cost', 'bobot', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('kriteria'));

		} else {
			# code...
			$id_kriteria = $this->input->post('id_kriteria');
			$kriteria = $this->input->post('kriteria');
			$bobot = $this->input->post('bobot');
			$cost = $this->input->post('cost');

			$data = array(
				'kriteria' => $kriteria , 
				'kepentingan' => $bobot , 
				'cost_benefit' => $cost 
			);

			$where = array('id_kriteria' => $id_kriteria );

			$this->M_kriteria->update_($where,$data,'kriteria');

			$this->session->set_flashdata('update', 'Data Succes update');
			redirect(base_url('kriteria'));
		}
	}

	public function delete_kriteria($id)
	{
		$where = array(
			'id_kriteria' => $id  
		);

		$data = $this->M_kriteria->delete_($where,'kriteria');

		$this->session->set_flashdata('delete', 'Data Succes Delete');
		redirect(base_url('kriteria'));
	}

}

/* End of file c_kriteria.php */
/* Location: ./application/modules/kriteria/controllers/c_kriteria.php */