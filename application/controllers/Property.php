<?php

defined('BASEPATH') OR exit('Super Admin error');

class Property extends Base_Controller{

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("dashboard_model");
		$this->load->model('property_model');
		$this->load->helper('admin_helper');
	}

    public function index(){

		$data['message'] = array();
		$data['title'] = "Residency Key | All Property";
		$data['result']=$this->property_model->get_allProperty();
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_property');
		$this->load->view('backend/template_footer');
	}

	public function add_property(){

		$data['message'] = array();
		$data['title'] = "Residency Key | Add New Property";
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/add_property');
		$this->load->view('backend/template_footer');
	}

	public function save_property(){

        $data=array();
        $data['property_type']=$this->input->post('property_type');
        $data['property_price']=$this->input->post('property_price');
        $data['property_area']=$this->input->post('property_area');
        $data['bedroom']=$this->input->post('bedroom');
        $data['bath']=$this->input->post('bath');
        $data['drawing']=$this->input->post('drawing');
        $data['dining']=$this->input->post('dining');
        $data['elevator']=$this->input->post('elevator');
        $data['gas']=$this->input->post('gas');
        $data['belcony']=$this->input->post('belcony');
        $data['parking']=$this->input->post('parking');
        $data['lobby']=$this->input->post('lobby');
        $data['view']=$this->input->post('view');
        $data['security']=$this->input->post('security');
        $data['maintenance_staff']=$this->input->post('maintenance_staff');
        $data['property_location']=$this->input->post('property_location');
        $data['property_owner']=$this->input->post('property_owner');

        //$this->debug($data);

        $path = './assets/backend/property_photo/';
        $data['photo'] = $this->uploadPhoto($path);

        $result = $this->property_model->commonInsert('tbl_property', $data);

        foreach($_FILES as $key => $file){
   
			$errors = array();
			$file_name = $_FILES['file']['name'];
			$file_size = $_FILES['file']['size'];
			$file_type = $_FILES['file']['type'];
			$file_tmp = $_FILES['file']['tmp_name'];
	
   			for($i = 0; $i<count($file['name']); $i++){
    
			    if($file['name'][$i]){
			    	$fileName = $file['name'][$i];
			    	$file_dir = "./assets/backend/property_photo/".$fileName;

				    if(move_uploaded_file($file["tmp_name"][$i],$file_dir)){

				    	$this->db->select_max('property_id');
					    $query  = $this->db->get('tbl_property');
					    $rst  = $query->row();
					    $getPropertyID = $rst->property_id;

						$ImgInsert = $this->property_model->image_save($getPropertyID, $file_dir);

				    }

				}//if
  			}//for
		}//foreach

        if($result){
			$msg = 'Property has been created successfully';
			$message = $this->msg($msg);
			redirect('Property/');
		}else{
			$msg =' Failed to created!!';
			$message = $this->msg($msg);
			redirect('Property/');
		}

	}//save_property

	public function edit_Property($Proid){

		$data=array();
		$data['message'] = array();
		$data['title'] = "Residency Key | Update Property";
		$data['selected_info']=$this->property_model->editProperty($Proid);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/edit_property');
		$this->load->view('backend/template_footer');
	}

	public function update_Property(){

		$ProID = $this->input->post('property_id');
		$property_type = $this->input->post('property_type');
		$property_price = $this->input->post('property_price');
		$property_area = $this->input->post('property_area');
		$bedroom = $this->input->post('bedroom');
		$bath = $this->input->post('bath');
		$drawing = $this->input->post('drawing');
		$dining = $this->input->post('dining');
		$elevator = $this->input->post('elevator');
		$gas = $this->input->post('gas');
		$belcony = $this->input->post('belcony');
		$parking = $this->input->post('parking');
		$lobby = $this->input->post('lobby');
		$view = $this->input->post('view');
		$security = $this->input->post('security');
		$maintenance_staff = $this->input->post('maintenance_staff');
		$property_location = $this->input->post('property_location');
		$property_owner = $this->input->post('property_owner');

		$this->db->set('property_type', $property_type);
		$this->db->set('property_price', $property_price);
		$this->db->set('property_area', $property_area);
		$this->db->set('bedroom', $bedroom);
		$this->db->set('bath', $bath);
		$this->db->set('drawing', $drawing);
		$this->db->set('dining', $dining);
		$this->db->set('elevator', $elevator);
		$this->db->set('gas', $gas);
		$this->db->set('belcony', $belcony);
		$this->db->set('parking', $parking);
		$this->db->set('lobby', $lobby);
		$this->db->set('view', $view);
		$this->db->set('security', $security);
		$this->db->set('maintenance_staff', $maintenance_staff);
		$this->db->set('property_location', $property_location);
		$this->db->set('property_owner', $property_owner);

		if(isset($ProID) && $ProID != ''){

			$data = array('property_id' => $ProID);
			$prev_info = $this->db->get_where("tbl_property",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$path = './assets/backend/property_photo/';
			$photo = $this->updatePhoto($path);
		}

		$result = $this->property_model->UpdatePropertyByID($ProID);

		if($result){
			$msg = 'Property has been updated successfully';
			$message = $this->msg($msg);
			redirect('Property/');

		}else{
			$msg ='Failed to update!!';
			$message = $this->msg($msg);
			redirect('Property/');

		}
		
	}//update_Property

	// public function delete_Property($id){

	// 	$result = $this->property_model->delete_property_Property($id);

	// 	if($result){
	// 		$msg = 'Property has been deleted successfully';
	// 		$message = $this->msg($msg);
	// 		redirect('Property/');
	// 	}else{
	// 		$msg =' Failed to delete!!';
	// 		$message = $this->msg($msg);
	// 		redirect('Property/');
	// 	}
	// }

	public function Active_Property($ProID){

		$result = $this->property_model->ActiveProperty($ProID);
		if($result){
			$msg = 'Property has been Actived successfully';
			$message = $this->msg($msg);
			redirect('Property/');
		}else{
			$msg =' Failed to Actived!!';
			$message = $this->msg($msg);
			redirect('Property/');
		}
	}

	public function Inactive_Property($ProID){

		$result = $this->property_model->InctiveProperty($ProID);
		if($result){
			$msg = 'Property has been Inactived successfully';
			$message = $this->msg($msg);
			redirect('Property/');
		}else{
			$msg =' Failed to Inactived!!';
			$message = $this->msg($msg);
			redirect('Property/');
		}

	}

	public function ViewPropertyDetails(){

        $ProID = $this->input->post('id');
        $data['ProDesc'] = $this->property_model->PropertyDetails($ProID);
        $this->load->view('backend/property_details', $data);

	}

//=======================extra property photo===========================//

	public function AllPropertyPhoto($PropertyID){

		$data['message'] = array();
		$data['title'] = "Residency Key | Property Photos";
		$data['result']=$this->property_model->get_allPropertyPhotos($PropertyID);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_property_photos');
		$this->load->view('backend/template_footer');
	}

	public function AddPropertyPhoto($PropertyID){

		$data['message'] = array();
		$data['propertyID'] = $PropertyID;
		$data['title'] = "Residency Key | Add Property Photos";
		$data['result']=$this->property_model->get_allPropertyPhotos($PropertyID);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/add_property_photo');
		$this->load->view('backend/template_footer');
	}

	public function save_propertPhoto(){

        foreach($_FILES as $key => $file){
   
			$errors = array();
			$file_name = $_FILES['file']['name'];
			$file_size = $_FILES['file']['size'];
			$file_type = $_FILES['file']['type'];
			$file_tmp = $_FILES['file']['tmp_name'];
	
   			for($i = 0; $i<count($file['name']); $i++){
    
			    if($file['name'][$i]){
			    	$fileName = $file['name'][$i];
			    	$file_dir = "./assets/backend/property_photo/".$fileName;

				    if(move_uploaded_file($file["tmp_name"][$i],$file_dir)){

				    	$getPropertyID = $this->input->post('property_id');
						$ImgInsert = $this->property_model->image_save($getPropertyID, $file_dir);

				    }

				}//if
  			}//for
		}//foreach

        if($ImgInsert){
			$msg = 'Property Photo has been Added successfully';
			$message = $this->msg($msg);
			redirect('Property/');
		}else{
			$msg =' Failed to Add!!';
			$message = $this->msg($msg);
			redirect('Property/');
		}

	}//save_propertPhoto

	public function editPropertyPhoto($imgID){

		$data['message'] = array();
		$data['title'] = "Residency Key | Property Photo";
		$data['selected_info']=$this->property_model->getPhotoByID($imgID);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/edit_property_photo');
		$this->load->view('backend/template_footer');
	}

	public function update_PropertyPhoto(){

		$imgID = $this->input->post('img_id');

		if(isset($imgID) && $imgID != ''){

			$data = array('img_id' => $imgID);
			$prev_info = $this->db->get_where("tbl_property_image",$data)->row();
			if(isset($_FILES['file']['name']) && ($_FILES['file']['name'] != '')){
				unlink($prev_info->file);
			}
		}

		if(isset($_FILES['file']['name']) && ($_FILES['file']['name'] != '') ){

			$config['upload_path'] = './assets/backend/property_photo/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['max_size'] = 1024;
	        // $config['max_width'] = 300;
	        // $config['max_height'] = 300;

	        $this->load->library('upload', $config);
	        $error='';
	        $fdata=array();
	        if ( ! $this->upload->do_upload('file')){

	            $error = $this->upload->display_errors();
	            $msg = $error;
	            $message = $this->msg($msg);
	            redirect(current_url());

	        }else{

	            $fdata = $this->upload->data();
	            $img = $config['upload_path'] . $fdata['file_name'];
	            $this->db->set('file', $img);

	        }

		}//if

		$result = $this->property_model->UpdatePropertyPhotoByID($imgID);

		if($result){
			$msg = 'Property Photo has been updated successfully';
			$message = $this->msg($msg);
			redirect('Property/');

		}else{
			$msg ='Failed to update!!';
			$message = $this->msg($msg);
			redirect('Property/');

		}
		
	}//update_PropertyPhoto

	public function deletePropertyPhoto($imgID){

		$result = $this->property_model->deletePropertyPhotoByID($imgID);

		if($result){
			$msg = 'Property Photo has been deleted successfully';
			$message = $this->msg($msg);
			redirect('Property/');
		}else{
			$msg =' Failed to delete!!';
			$message = $this->msg($msg);
			redirect('Property/');
		}
	}


} //Property

?>