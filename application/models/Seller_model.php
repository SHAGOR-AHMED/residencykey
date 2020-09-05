<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_model extends Base_Model{

	public function validate($seller_email,$seller_password){
		
		$result = $this->db->select('*')->from('tbl_seller')->where('seller_email',$seller_email)->where('seller_password',$seller_password)->get()->row();
		return $result;
    }

    public function getMyProperty($sellerID){

        $this->db->select('tbl_property.*');
		$this->db->select('property_type.type_name');
		$this->db->select('property_location.location_name');
		$this->db->join('property_type', 'property_type.type_id = tbl_property.property_type');
		$this->db->join('property_location', 'property_location.location_id = tbl_property.property_location');
		$this->db->from('tbl_property');
		$this->db->where('property_owner',$sellerID);
		$get = $this->db->get();
		$query = $get->result();
		return $query;

    }

}//Seller_model

?>