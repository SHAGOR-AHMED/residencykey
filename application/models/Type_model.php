<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends Base_Model{

	public function getPropertyType(){

		$this->db->select('*');
		$this->db->from('property_type');
		$query = $this->db->get(); 
		return $query->result();
	}

	public function select_propertyType_byID($ID){

		$query = $this->db->select('*')->from('property_type')->where('type_id',$ID)->get()->row();
		return $query;
	}

	public function update_propertyType($typeID){

		$result = $this->db->where('type_id',$typeID)->update('property_type');
		return $result;
	}

	public function delete_propertyType($ID){

		return $this->db->where('type_id',$ID)->delete('property_type');
	}


}//Type_model

?>