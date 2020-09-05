<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_model extends Base_Model{

	public function __construct(){
		parent::__construct();
	}//Function

	public function get_allProperty(){

		//return $query = $this->db->select('*')->from('tbl_property')->get()->result();

		$this->db->select('tbl_property.*');
		$this->db->select('property_type.type_name');
		$this->db->select('property_location.location_name');
		$this->db->select('tbl_seller.seller_name');
		$this->db->join('property_type', 'property_type.type_id = tbl_property.property_type');
		$this->db->join('property_location', 'property_location.location_id = tbl_property.property_location');
		$this->db->join('tbl_seller', 'tbl_seller.seller_id = tbl_property.property_owner');
		$this->db->from('tbl_property');
		$this->db->order_by('property_id','DESC');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	
	}

	 public function PropertyDetails($ProID){

        //return $query = $this->db->select('*')->from('tbl_property')->where('property_id',$ProID)->get()->row();

        $this->db->select('tbl_property.*');
		$this->db->select('property_type.type_name');
		$this->db->select('property_location.location_name');
		$this->db->select('tbl_seller.seller_name');
		$this->db->join('property_type', 'property_type.type_id = tbl_property.property_type');
		$this->db->join('property_location', 'property_location.location_id = tbl_property.property_location');
		$this->db->join('tbl_seller', 'tbl_seller.seller_id = tbl_property.property_owner');
		$this->db->from('tbl_property');
		$this->db->where('property_id',$ProID);
		$get = $this->db->get();
		$query = $get->row();
		return $query;

    }

    public function editProperty($Proid){

        return $query = $this->db->select('*')->from('tbl_property')->where('property_id',$Proid)->get()->row();
    }

    public function UpdatePropertyByID($ProID){

		$query = $this->db->where('property_id', $ProID)->update('tbl_property');
		return $query;
	}


	public function ActiveProperty($ProID){

		return $this->db->set('status',1)->where('property_id',$ProID)->update('tbl_property');

	}

	public function InctiveProperty($ProID){

		return $this->db->set('status',0)->where('property_id',$ProID)->update('tbl_property');

	}

//=================== extra property photo =======================//

	public function image_save($getPropertyID, $file_dir){

		$this->db->set('pro_id', $getPropertyID);
		$this->db->set('file', $file_dir);
		$ImgInsert = $this->db->insert('tbl_property_image');
		return $ImgInsert;
	}

	public function get_allPropertyPhotos($PropertyID){

        return $query = $this->db->select('*')->from('tbl_property_image')->where('pro_id',$PropertyID)->get()->result();
    }


    public function getPhotoByID($imgID){

        return $query = $this->db->select('*')->from('tbl_property_image')->where('img_id',$imgID)->get()->row();
    }

     public function UpdatePropertyPhotoByID($imgID){

		$query = $this->db->where('img_id', $imgID)->update('tbl_property_image');
		return $query;
	}

	public function deletePropertyPhotoByID($imgID){

		$data = array('img_id'=>$imgID);
		$pre_photo = $this->db->get_where('tbl_property_image',$data)->row();
		unlink($pre_photo->file);
		return $this->db->where('img_id',$imgID)->delete('tbl_property_image');
	}



}//Property_model

?>