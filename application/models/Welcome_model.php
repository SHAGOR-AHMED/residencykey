<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends Base_Model{

	public function getAllSeller(){

		$this->db->select('tbl_seller_request.*');
		$this->db->select('property_type.type_name');
		$this->db->select('property_location.location_name');
		$this->db->join('property_type', 'property_type.type_id = tbl_seller_request.property_type');
		$this->db->join('property_location', 'property_location.location_id = tbl_seller_request.property_location');
		$this->db->from('tbl_seller_request');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
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

	//=======================blog========================//

	public function getAllBlog(){

		return $this->db->select('*')->from('tbl_blog')->order_by('blog_id','DESC')->get()->result();
	}

	public function getBlogDescByID($blogID){

		$query = $this->db->select('*')->from('tbl_blog')->where('blog_id',$blogID)->get()->row();
		return $query;
	}

	//============================search result===========================//

	public function searchProperty($property_location,$property_type,$minArea,$maxArea,$minPrice,$maxPrice){

		$this->db->select('*');
		$this->db->from('tbl_property');
		$this->db->where('property_location', $property_location);
		$this->db->where('property_type', $property_type);
		//$this->db->where('property_area BETWEEN "'.$minArea.'" and "'.$maxArea.'"');
		$this->db->where('property_area >=', (int)$minArea);
		$this->db->where('property_area <=', (int)$maxArea);
		$this->db->where('property_price >=',(int) $minPrice);
		$this->db->where('property_price <=', (int)$maxPrice);
		$get = $this->db->get();
		$query = $get->result(); 
		return $query;

		//$query = $this->db->query('select * from `tbl_property` where `property_location` = "'.$property_location.'" where `property_type` = "'.$property_type.'" where `property_area` between "'.$minArea.'"  and "'.$maxArea.'" where `property_price` between "'.$minPrice.'"  and "'.$maxPrice.'" ')->result();
		//$this->debug($query);

	}


}//Welcome_model

?>