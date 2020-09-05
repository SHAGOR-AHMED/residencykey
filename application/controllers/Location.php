<?php

defined('BASEPATH') OR exit('Super Admin error');

class Location extends Base_Controller{

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("dashboard_model");
		$this->load->model('location_model');
		$this->load->helper('admin_helper');
	}

    public function index(){
		$data['message'] = array();
		$data['title'] = "Residency Key | All Property Location";
		$data['result']=$this->location_model->getProperty_location();
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_location');
		$this->load->view('backend/template_footer');
	}

	public function add_location(){

		$data['message'] = array();
		$data['title'] = "Residency Key | Add New Location";
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/add_location');
		$this->load->view('backend/template_footer');
	}

	public function save_location(){

        $data=array();
        $data['location_name']=$this->input->post('location_name');

        $result = $this->location_model->commonInsert('property_location', $data);

        if($result){
			$msg = 'Location has been created successfully';
			$message = $this->msg($msg);
			redirect('Location/index');
		}else{
			$msg =' Failed to created!!';
			$message = $this->msg($msg);
			redirect('Location/index');
		}

	}

	public function edit_location($id){

		$data=array();
		$data['message'] = array();
		$data['title'] = "Residency Key | Update Location";
		$data['selected_info']=$this->location_model->edit_property_location($id);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/edit_location');
		$this->load->view('backend/template_footer');
	}

	public function update_location(){

		$id = $this->input->post('location_id');
		$data['location_name'] = $this->input->post('location_name');

		$result = $this->location_model->Update_property_location($id,$data);

		if($result){
			$msg = 'Location has been updated successfully';
			$message = $this->msg($msg);
			redirect('Location/');
		}else{
			$msg =' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Location/');
		}
		
	}

	public function delete_location($id){

		$result = $this->location_model->delete_property_location($id);

		if($result){
			$msg = 'Location has been deleted successfully';
			$message = $this->msg($msg);
			redirect('Location/');
		}else{
			$msg =' Failed to delete!!';
			$message = $this->msg($msg);
			redirect('Location/');
		}
	}


} //Category