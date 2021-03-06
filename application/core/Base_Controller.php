<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Base_Controller extends CI_Controller
{
    public $user_id;
    public $member_id;
    public $login_type;


    public abstract function index();

    public function __construct(){
        parent::__construct();
        $this->user_id = $this->session->userdata('user_id');
        $this->member_id = $this->session->userdata('member_id');
        $this->login_type = $this->session->userdata('login_type');
        
    }

    public function msg($msg){
        
        $this->session->set_flashdata('message', $msg);
    }

    public function debug($data){
        echo "<pre>";
        print_r($data);
        exit();
    }

    public function uploadPhoto($path){

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['photo']['name'])) {
            return $config['upload_path'];
        }
        if ( ! $this->upload->do_upload('photo')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            return $config['upload_path'] . $fdata['file_name'];

        }

    }//uploadPhoto

    public function updatePhoto($path){

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;

        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('photo')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            $img = $config['upload_path'] . $fdata['file_name'];
            $this->db->set('photo', $img);

        }

    }//updatePhoto


}//Base_Controller