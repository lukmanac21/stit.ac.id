<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model','adm');
		$this->load->library('session');
	}
	public function index()
	{

		$this->load->view('Admin/login');
    }
    public function check_login(){
		$email         =   $this->input->post('email');
        $password      =   $this->input->post('password');
        $where              =   array(
                                    'email' => $email,
                                    'password' => sha1($password)
                                    );
        $check              =   $this->adm->check_login("user",$where)->num_rows();
        if($check){

            $data           =   $this->adm->get_login_data("user",$where);
                                $this->session->set_userdata('logged_in', TRUE);
                                $this->session->set_userdata('id',$data['id']);
                                $this->session->set_userdata('nama',$data['nama']);


                                redirect(site_url('Administrator/Dashboard'));
        }else{
								echo '<script type="text/javascript">alert("Email atau Password salah!");
                                window.location.href = "'.site_url("Admin/Index").'";
                                </script>';
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("Login"));
	}
}