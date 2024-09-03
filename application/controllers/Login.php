<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('view_login');
	}

	public function get_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		
		$query = $this->db->query("
			SELECT
				t_user.id,
				t_user.nama_lengkap,
				t_user.username,
				t_user.`password`,
				t_user.last_login 
			FROM
				t_user 
			WHERE
				t_user.username = '".$username."' AND
				t_user.`password` = '".md5($password)."'
		")->row();

		if($query==null){
			redirect('login');
		}else{
			$data_session = array(
				'id_login'  => $query->id,
				'username'  => $query->username,
				'nama_lengkap'  => $query->nama_lengkap
			);
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata("success","Login Berhasil, Selamat Datang");
			redirect("home");
		}

	}

	public function logout(){
		session_destroy();
        redirect('login');
	}
 
}