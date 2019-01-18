<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_analisa extends CI_Model {

	
	public function read_alternatif()
	{
		$query = $this->db->get('alternatif');

		return $query ;
	}

	public function read_kriteria()
	{
		$query = $this->db->get('kriteria');
		
		return $query ;
	}

	public function get_alternatif()
	{
		//$query = $this->db->get('alternatif');
		$query = $this->db->query('select * from alternatif');

		$i = 0 ;

		foreach ($query->result_array() as $row)
		{
			
			# code...
			$alt[$i][0] = $row["k1"];
			$alt[$i][1] = $row["k2"];
			$alt[$i][2] = $row["k3"];
			$alt[$i][3] = $row["k4"];
			$i++;
		}

		return $alt ;
	}

	public function get_max()
	{
		//$query = $this->db->get('alternatif');
		$query = $this->db->query('select max(k1) as k1, max(k2) as k2, max(k3) as k3, max(k4) as k4 from alternatif');

		$i = 0 ;

		foreach ($query->result_array() as $row)
		{
			
			# code...
			$alt1[0] =$row["k1"];
			$alt1[1] =$row["k2"];
			$alt1[2]=$row["k3"];
			$alt1[3]=$row["k4"];
			$i++;
		}

		return $alt1 ;
	}

	public function get_costbenefit()
	{
		//$query = $this->db->get('alternatif');
		$query = $this->db->query('select * from kriteria');

		$i = 0 ;

		foreach ($query->result_array() as $row)
		{
			# code...
			$alt[$i] = $row["cost_benefit"];
			$i++;
		}

		return $alt ;
	}


	public function get_kepentingan()
	{
		//$query = $this->db->get('alternatif');
		$query = $this->db->query('select * from kriteria');
		
		$i = 0 ;

		foreach ($query->result_array() as $row)
		{
			# code...
			$alt[$i] = $row["kepentingan"];
			$i++;
		}

		return $alt ;
	}


	public function get_alt_name()
	{
		//$query = $this->db->get('alternatif');
		$query = $this->db->query('select * from alternatif');
		
		$i = 0 ;

		foreach ($query->result_array() as $row)
		{
			# code...
			$alt[$i] = $row["alternatif"];
			$i++;
		}

		return $alt ;
	}


}


/* End of file M_kriteria.php */
/* Location: ./application/modules/kriteria/models/M_kriteria.php */