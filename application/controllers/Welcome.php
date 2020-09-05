<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Welcome extends Base_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('dashboard_model');
		$this->load->model('Welcome_model');
		$this->load->model('property_model');
		$this->load->helper('admin_helper');
	}

	public function index(){
		$data = array();
		$data['slider'] = 1;
		$data['title'] = "Residency Key | Find Dream Property";
		$data['content'] = $this->load->view('frontend/page/body', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function Blog(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Blog";
		$data['all_blog'] = $this->Welcome_model->getAllBlog();
		$data['content'] = $this->load->view('frontend/page/blog', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function BlogDetails($blogID){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Blog Details";
		$data['all_blog'] = $this->Welcome_model->getAllBlog();
		$data['blog_desc'] = $this->Welcome_model->getBlogDescByID($blogID);
		$data['content'] = $this->load->view('frontend/page/blog_details', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function Services(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Home Loan";
		$data['content'] = $this->load->view('frontend/page/services', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function HomeLoan(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Home Loan";
		$data['content'] = $this->load->view('frontend/page/home_loan', $data, true);
		$this->load->view('frontend/index', $data);	
	}

//===================================seller====================================//
	public function SellProperty(){
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Sell Property";
		$data['content'] = $this->load->view('frontend/page/sell_property', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function save_seller(){

		$this->form_validation->set_rules('seller_name', 'seller_name', 'required');
		$this->form_validation->set_rules('seller_phone', 'seller_phone', 'required');
		$this->form_validation->set_rules('seller_email', 'seller_email', 'required');
		$this->form_validation->set_rules('property_type', 'property_type', 'required');
		$this->form_validation->set_rules('property_location', 'property_location', 'required');

		if($this->form_validation->run() == FALSE){

			$data = array();
			$data['slider'] = 0;
			$data['title'] = "Residency Key | Sell Property";
			$data['content'] = $this->load->view('frontend/page/sell_property', '', true);
			$this->load->view('frontend/index', $data);	
			return false;

		}else{

			$data=array();
			$data['seller_name'] = $this->input->post('seller_name');
			$data['seller_phone'] = $this->input->post('seller_phone');
			$data['seller_email'] = $this->input->post('seller_email');
			$data['property_type'] = $this->input->post('property_type');
			$data['property_location'] = $this->input->post('property_location');

			$result = $this->Welcome_model->commonInsert('tbl_seller_request', $data);
			
	        if($result){
				$msg = 'Your Information has been send successfully';
				$message = $this->msg($msg);
				redirect('Welcome/SellProperty');
			}else{
				$msg =' Failed to send!!';
				$message = $this->msg($msg);
				redirect('Welcome/SellProperty');
			}
			
		}//if

	}//save_seller

	public function AllSeller(){

		$data = array();
		$data['title'] = "Residency Key | All Seller list";
		$data['all_seller'] = $this->Welcome_model->getAllSeller();
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_seller');
		$this->load->view('backend/template_footer');
	}

//=================================== end seller ===================================//

	public function PropertyList(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Listed Property";
		$data['all_property'] = $this->property_model->get_allProperty();
		$data['content'] = $this->load->view('frontend/page/property_list', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function PropertyDetails($ProID){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Property Details";
		$data['property_details'] = $this->property_model->PropertyDetails($ProID);
		$data['property_photos'] = $this->db->select('*')->from('tbl_property_image')->where('pro_id',$ProID)->get()->result();
		$data['content'] = $this->load->view('frontend/page/property_details', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function BuyerGuide(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Buyer Guide";
		$data['content'] = $this->load->view('frontend/page/buyer_guide', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function CheckValue(){
		$data = array();
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Check Value";
		$data['content'] = $this->load->view('frontend/page/check_value', $data, true);
		$this->load->view('frontend/index', $data);	
	}

//=============================search property==================================//

	public function search_property(){

		$data=array();
		$property_location = $this->input->post('property_location');
		$property_type = $this->input->post('property_type');
		$property_area = $this->input->post('property_area');
		$property_price = $this->input->post('property_price');

		$area = explode('-', $property_area);
		$minArea = $area[0];
		$maxArea = $area[1]; 
		$price = explode('-', $property_price);
		$minPrice = $price[0];
		$maxPrice = $price[1];

		$result = $this->Welcome_model->searchProperty($property_location,$property_type,$minArea,$maxArea,$minPrice,$maxPrice);
		
        if($result){
        	$data = array();
			$data['slider'] = 0;
			$data['title'] = "Residency Key | Search Result";
			$data['searchResult'] = $result;
			$data['content'] = $this->load->view('frontend/page/search_result', $data, true);
			$this->load->view('frontend/index', $data);	
		}else{
			$data = array();
			$data['slider'] = 0;
			$data['title'] = "Residency Key | Search Result";
			$data['content'] = $this->load->view('frontend/page/search_result', $data, true);
			$this->load->view('frontend/index', $data);	
		}
			
	}//search_property

	public function searchResult(){
		
	}

}//Welcome

?>