<?php
class Kofxiii_framedata extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_Framedata($fighter)
	{
		$strquery = 'SELECT move AS \'Move\',type AS \'Type\', notation AS \'Notation\', damage AS \'Damage\',stun AS \'Stun\',startup AS \'Startup\', on_guard AS \'On Guard\', comments as \'Notes\' FROM kofxiii WHERE fighter=\''.$fighter.'\' ORDER BY FIND_IN_SET(type,"Normal,Special Normal,Cancel,EX Special Normal,Throw,System,Special,EX Special,Super,EX Super,NeoMAX")';
		$query = $this->db->query($strquery);
		//$this->db->select('move AS \'Move\',type AS \'Type\', notation AS \'Notation\', damage AS \'Damage\',stun AS \'Stun\',startup AS \'Startup\',on_guard AS \'On Guard\',comments as \'Notes\'');
		//$this->db->from('kofxiii');
		//$this->db->where('fighter', $fighter);
		//$this->db->order_by('id, type');
		//$query = $this->db->get();
		return $query->result_array();
	}

	public function get_FighterName($approx)
	{
		$this->db->select('fighter');
		$this->db->from('kofxiii');
		$this->db->like('fighter', $approx, 'after');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->row()->fighter;
		}
		return null;
	}

	public function get_FighterList()
	{
		$this->db->distinct();
		$this->db->select('fighter');
		$this->db->from('kofxiii');
		$this->db->order_by('fighter', 'asc'); 
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

}