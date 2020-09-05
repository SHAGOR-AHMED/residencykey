<?php

defined('BASEPATH') OR exit('Super Admin error');

class Type extends Base_Controller{
	
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
        $this->load->model("dashboard_model");
		$this->load->model('type_model');
		$this->load->helper('admin_helper');
	}
	
	public function index(){

		$data=array();
		$data['message'] = array();
		$data['title'] = "Residency Key | All Property type";
		$data['all_types'] = $this->type_model->getPropertyType();
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_type');
		$this->load->view('backend/template_footer');
	}

	public function add_type(){

		$data['message'] = array();
		$data['title'] = "Residency Key | Add New Type";
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/add_type');
		$this->load->view('backend/template_footer');
	}

	public function save_type(){

		$data=array();
		$data['type_name'] = $this->input->post('type_name');
		
        $result = $this->type_model->commonInsert('property_type', $data);

        if($result){
			$msg = 'Type has been created successfully';
			$message = $this->msg($msg);
			redirect('Type/');
		}else{
			$msg =' Failed to created!!';
			$message = $this->msg($msg);
			redirect('Type/');
		}

	}//

	public function edit_type($ID){

		$data=array();
		$data['message'] = array();
		$data['title'] = "Residency Key | Update Type";
		$data['selected_info'] = $this->type_model->select_propertyType_byID($ID);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/edit_type');
		$this->load->view('backend/template_footer');
	}

	public function update_type(){

		$typeID = $this->input->post('type_id');
		$type_name = $this->input->post('type_name');

		$this->db->set('type_name', $type_name);

		$result = $this->type_model->update_propertyType($typeID);

		if($result){
			$msg = 'Type has been updated successfully';
			$message = $this->msg($msg);
			redirect('Type/');
		}else{
			$msg =' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Type/');
		}

	}

	public function delete_type($ID){

		$result = $this->type_model->delete_propertyType($ID);

		if($result){
			$msg = 'Type has been deleted successfully';
			$message = $this->msg($msg);
			redirect('Type/');
		}else{
			$msg =' Failed to delete!!';
			$message = $this->msg($msg);
			redirect('Type/');
		}
	}


}//Type

?>