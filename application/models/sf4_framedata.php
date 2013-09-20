<?php
class Sf4_framedata extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_Framedata($fighter)
	{
		$strquery = 'SELECT move AS \'Move\',type AS \'Type\', notation AS \'Notation\', damage AS \'Damage\',stun AS \'Stun\',startup AS \'Startup\', recovery AS \'Recovery\',on_guard AS \'On Guard\', on_hit AS \'On Hit\',comments as \'Notes\' FROM sf4 WHERE fighter=\''.$fighter.'\' ORDER BY ID, FIND_IN_SET(type,"Normal,Special Normal,Cancel,Throw,System,Special,EX Special,Super,Ultra")';
		$query = $this->db->query($strquery);

		// fucking, FIND_IN_SET and ActiveRecord ORDER_BY dont play together nicely.
		
		//$this->db->select('move AS \'Move\',type AS \'Type\', notation AS \'Notation\', damage AS \'Damage\',stun AS \'Stun\',startup AS \'Startup\', recovery AS \'Recovery\',on_guard AS \'On Guard\', on_hit AS \'On Hit\',comments as \'Notes\'');
		//$this->db->from('sf4');
		//$this->db->where('fighter', $fighter);
		//$this->db->order_by('FIND_IN_SET(`Type`, Normal,Special Normal,Throw,System,Special,EX Special,Super,Ultra)');
		return $query->result_array();
	}

	public function get_FighterName($approx)
	{
		$this->db->select('fighter');
		$this->db->from('sf4');
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
		$this->db->from('sf4');
		$this->db->order_by('fighter', 'asc'); 
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

}