<?php

defined('BASEPATH') OR exit('Super Admin error');

class Blog extends Base_Controller{
	
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
        $this->load->model("dashboard_model");
		$this->load->model('blog_model');
		$this->load->helper('admin_helper');
	}
	
	public function index(){

		$data=array();
		$data['message'] = array();
		$data['title'] = "Residency Key | All BLOG";
		$data['all_blog'] = $this->blog_model->getBlogs();
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/view_blog');
		$this->load->view('backend/template_footer');
	}

	public function add_blog(){

		$data['message'] = array();
		$data['title'] = "Residency Key | Add New Blog";
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/add_blog');
		$this->load->view('backend/template_footer');
	}

	public function save_blog(){

		$data = array();
		$data['blog_title'] = $this->input->post('blog_title');
		$data['blog_details'] = $this->input->post('blog_details');
		$data['video_link'] = $this->input->post('video_link');

		$path = './assets/backend/blog_photo/';
        $data['photo'] = $this->uploadPhoto($path);
		
        $result = $this->blog_model->commonInsert('tbl_blog', $data);

        if($result){
			$msg = 'Blog has been created successfully';
			$message = $this->msg($msg);
			redirect('Blog/');
		}else{
			$msg =' Failed to created!!';
			$message = $this->msg($msg);
			redirect('Blog/');
		}

	}//save_blog

	public function edit_blog($ID){

		$data=array();
		$data['message'] = array();
		$data['title'] = "Residency Key | Update Type";
		$data['selected_info'] = $this->blog_model->selectBlog_byID($ID);
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/edit_blog');
		$this->load->view('backend/template_footer');
	}

	public function update_blog(){

		$blogID = $this->input->post('blog_id');
		$blog_title = $this->input->post('blog_title');
		$blog_details = $this->input->post('blog_details');
		$video_link = $this->input->post('video_link');

		$this->db->set('blog_title', $blog_title);
		$this->db->set('blog_details', $blog_details);
		$this->db->set('video_link', $video_link);

		if(isset($blogID) && $blogID != ''){

			$data = array('blog_id' => $blogID);
			$prev_info = $this->db->get_where("tbl_blog",$data)->row();
			if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '')){
				unlink($prev_info->photo);
			}
		}

		if(isset($_FILES['photo']['name']) && ($_FILES['photo']['name'] != '') ){

			$path = './assets/backend/blog_photo/';
			$photo = $this->updatePhoto($path);
		}

		$result = $this->blog_model->updateBlog($blogID);

		if($result){
			$msg = 'Blog has been updated successfully';
			$message = $this->msg($msg);
			redirect('Blog/');
		}else{
			$msg =' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Blog/');
		}

	}//update_blog

	public function delete_blog($ID){

		$result = $this->blog_model->deleteBlog($ID);

		if($result){
			$msg = 'Blog has been deleted successfully';
			$message = $this->msg($msg);
			redirect('Blog/');
		}else{
			$msg =' Failed to delete!!';
			$message = $this->msg($msg);
			redirect('Blog/');
		}
	}


}//Blog

?>