<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends Base_Model{

	public function getProperty_location(){

		$query = $this->db->select('*')->from('property_location')->get()->result();
		
		return $query;
	}

	public function edit_property_location($id){

		$query = $this->db->select('*')->from('property_location')->where('location_id',$id)->get()->row();
		
		return $query;
	}

	public function Update_property_location($id,$data){

		return $this->db->where('location_id',$id)->update('property_location', $data);
	}

	public function delete_property_location($id){

		return $this->db->where('location_id',$id)->delete('property_location');
	}
	
}

?>