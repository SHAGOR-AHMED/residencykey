<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Seller extends Base_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('dashboard_model');
		$this->load->model('seller_model');
		$this->load->model('property_model');
		$this->load->helper('admin_helper');
	}

	public function index(){
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['slider'] = 0;
		$data['title'] = "Residency Key | Seller Panel";
		$data['content'] = $this->load->view('frontend/page/seller_login', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function SaveSellerInfo(){

		$this->form_validation->set_rules('seller_name', 'seller_name', 'required');
		$this->form_validation->set_rules('seller_email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('seller_password', 'Password', 'trim|required|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');
		$this->form_validation->set_rules('seller_mobile', 'seller_mobile', 'required|max_length[15]');
		$this->form_validation->set_rules('seller_type', 'seller_type', 'required');

		if($this->form_validation->run() == FALSE){

			$data = array();
			$data['slider'] = 0;
			$data['title'] = "Residency Key | Seller Panel";
			$data['content'] = $this->load->view('frontend/page/seller_login', '', true);
			$this->load->view('frontend/index', $data);	
			return false;

		}else{

			$data=array();
			$data['seller_name'] = $this->input->post('seller_name');
			$data['seller_email'] = $this->input->post('seller_email');
			$data['seller_password'] = md5($this->input->post('seller_password'));
			$data['seller_mobile'] = $this->input->post('seller_mobile');
			$data['seller_type'] = $this->input->post('seller_type');

			$path = './assets/backend/seller_photo/';
        	$data['photo'] = $this->uploadPhoto($path);

			$result = $this->seller_model->commonInsert('tbl_seller', $data);
			
	        if($result){
				$msg = 'Your Information has been send successfully!!!';
				$message = $this->msg($msg);
				redirect('Seller/');
			}else{
				$msg =' Failed to send!!!';
				$message = $this->msg($msg);
				redirect('Seller/');
			}
			
		}//if

	}//SaveSellerInfo

	public function loginSeller(){

        $seller_email = $this->input->post('seller_email');
        $seller_password = md5($this->input->post('seller_password'));

        $result = $this->seller_model->validate($seller_email,$seller_password);

        if(!$result){

            $msg ='Invalid user email or password!!!';
			$message = $this->msg($msg);
			redirect('Seller/');

        }else{

            $data = array(
            	'seller_id' => $result->seller_id,
                'seller_name' => $result->seller_name,
                'seller_email' => $result->seller_email,
                'seller_mobile' => $result->seller_mobile,
                'seller_type' => $result->seller_type,
                'photo' => $result->photo
                );
            $this->session->set_userdata($data);
            redirect('Seller/sellerDashboard');
        }

    }//loginSeller

    public function sellerDashboard(){
		$data = array();
		$data['message'] = array();
		$data['message'] = $this->session->flashdata('message');
		$data['slider'] = 0;
		$sellerID = $this->session->userdata('seller_id');
		$data['my_property'] = $this->seller_model->getMyProperty($sellerID);
		$data['title'] = "Residency Key | Seller Panel";
		$data['content'] = $this->load->view('frontend/page/seller_profile', $data, true);
		$this->load->view('frontend/index', $data);	
	}

	public function do_logout(){

    	$this->session->sess_destroy();
        $message = 'You have Logged Out!';
		$msg = $this->msg($message);
        redirect("Seller/");
    }


}//Welcome

?>