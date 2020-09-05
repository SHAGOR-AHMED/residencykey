<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends Base_Model{

	public function getBlogs(){

		$this->db->select('*');
		$this->db->from('tbl_blog');
		$query = $this->db->get(); 
		return $query->result();
	}

	public function selectBlog_byID($ID){

		$query = $this->db->select('*')->from('tbl_blog')->where('blog_id',$ID)->get()->row();
		return $query;
	}

	public function updateBlog($blogID){

		$result = $this->db->where('blog_id',$blogID)->update('tbl_blog');
		return $result;
	}

	public function deleteBlog($ID){

		$data = array('blog_id'=>$ID);
		$pre_photo = $this->db->get_where('tbl_blog',$data)->row();
		unlink($pre_photo->photo);
		return $this->db->where('blog_id',$ID)->delete('tbl_blog');
	}


}//Blog_model

?>