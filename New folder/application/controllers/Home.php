<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
			redirect("login");
		} else {
			$this->data['title'] = 'SIMETIKON';
			$this->data['subtitle'] = 'Beranda';
			$this->data['detail_title'] = 'SIMETIKON';
			$this->data['detail_subtitle1'] = 'Beranda';
			$this->data['detail_subtitle2'] = 'Alur';
		}
	}

	public function index()
	{
		$this->load->view('dashboard_view',$this->data);
	}

}