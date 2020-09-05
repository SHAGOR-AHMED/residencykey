<?php

class Search_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function

	public function getMemberFees_byDATE($FromDate, $ToDate){

		$this->db->select('tbl_member_fees.*');
		$this->db->select('tbl_members.first_name,tbl_members.last_name');
		$this->db->join('tbl_members', 'tbl_members.mem_id = tbl_member_fees.member_id');
		$this->db->from('tbl_member_fees');
		$this->db->where('payment_date >=', $FromDate);
		$this->db->where('payment_date <=', $ToDate);
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

	public function getLearnerCardFees_byDATE($FromDate, $ToDate){

		$this->db->select('*');
		$this->db->from('tbl_learner_fees');
		$this->db->where('payment_date >=', $FromDate);
		$this->db->where('payment_date <=', $ToDate);
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

	public function getTrainingFees_byDATE($FromDate, $ToDate){

		$this->db->select('*');
		$this->db->select('tbl_members.first_name,tbl_members.last_name');
		$this->db->join('tbl_members', 'tbl_members.mem_id = tbl_training_fees.member_id');
		$this->db->from('tbl_training_fees');
		$this->db->where('payment_date >=', $FromDate);
		$this->db->where('payment_date <=', $ToDate);
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

}//End CI_Model

?>