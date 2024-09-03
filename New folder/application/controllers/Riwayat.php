<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
			redirect("login");
		}else{
            $this->data['title'] = 'Pasien';
            $this->data['subtitle'] = 'Tabel Pasien';
            $this->data['detail_title'] = 'SIMETIKON';
            $this->data['detail_subtitle1'] = 'Pasien';
            $this->data['detail_subtitle2'] = 'Tabel Pasien';
        }
	}

	public function index()
	{
		$this->data['subtitle'] = 'Permintaan Pasien';
		$this->data['detail_subtitle2'] = 'Permintaan Obat Pasien';
		$this->load->view('riwayat_permintaan', $this->data);
	}

	public function insert_permintaan(){
		$tanggal= $this->input->post('tanggal');
		$id_permintaan = "OBT".date('YmdHis');
		$no_rm 	= $this->input->post('no_rm');
		$username= $this->session->userdata('username');
		$date = date('Y-m-d H:i:s');

		$arr = array(
			"tanggal" => $tanggal,
			"id_permintaan" => $id_permintaan,
			"no_rekamedis" => $no_rm,
			"created_date" => $date,
			"user_created" => $username,
		);

		$this->db->insert('t_permintaan_obat', $arr);

		echo $id_permintaan;

	}

}