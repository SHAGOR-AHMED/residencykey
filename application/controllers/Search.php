<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("search_model");
		$this->load->model("dashboard_model");
		$this->load->model("user_model");
		$this->load->model("calculation_model");
		$this->load->helper('user_helper');
		$this->load->library('pdfgenerator');
	}

	public function index(){

		$data = array();
		$data['title'] = "View Account by Date";
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$FromDate = $this->input->post('from_date');
		$ToDate = $this->input->post('to_date');
		$data['getMemberFees'] = $this->search_model->getMemberFees_byDATE($FromDate, $ToDate);
		$data['getLearnerCardFees'] = $this->search_model->getLearnerCardFees_byDATE($FromDate, $ToDate);
		$data['getTrainingFees'] = $this->search_model->getTrainingFees_byDATE($FromDate, $ToDate);
		//$this->debug($data);
		$data['FromDate'] = $this->input->post('from_date');
		$data['ToDate'] = $this->input->post('to_date');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/search_result');
		$this->load->view('backend/template_footer');
	}

	public function searchData(){

		$data = array();
		$data['title'] = "View Search Result";
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$FromDate = $this->input->post('from_date');
		$ToDate = $this->input->post('to_date');
		$data['getMemberFees'] = $this->db->select_sum('total_paid')->from('tbl_member_fees')->where('payment_date >=', $FromDate)->where('payment_date <=', $ToDate)->get()->row();

		// $data['getLearnerCardFees'] = $this->db->select_sum('total_paid')->from('tbl_learner_fees')->where('payment_date >=', $FromDate)->where('payment_date <=', $ToDate)->get()->row();

		$data['getTrainingFees'] = $this->db->select_sum('total_paid')->from('tbl_training_fees')->where('payment_date >=', $FromDate)->where('payment_date <=', $ToDate)->get()->row();

		$data['getExpense'] = $this->db->select_sum('amount')->from('tbl_collection_expense')->where('date >=', $FromDate)->where('date <=', $ToDate)->get()->row();
		//$this->debug($data);
		$data['FromDate'] = $this->input->post('from_date');
		$data['ToDate'] = $this->input->post('to_date');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_collection_calculation');
		$this->load->view('backend/template_footer');
	}

}//CI_Controller

?>