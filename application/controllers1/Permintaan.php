<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permintaan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
			redirect("login");
		} else {
			$this->data['title'] = 'Permintaan';
			$this->data['subtitle'] = 'Permintaan Obat';
			$this->data['detail_title'] = 'SIMETIKON';
			$this->data['detail_subtitle1'] = 'Permintaan';
			$this->data['detail_subtitle2'] = 'Form Permintaan Obat';
		}
	}

	public function index()
	{
		$this->load->view('permintaan_tiket', $this->data);
	}

	public function insert_permintaan()
	{
		$tanggal = $this->input->post('tanggal');
		$id_permintaan = "OBT" . date('YmdHis');
		$no_rm 	= $this->input->post('no_rm');
		$no_resep 	= $this->input->post('no_resep');
		$username = $this->session->userdata('username');
		$date = date('Y-m-d H:i:s');

		$arr = array(
			"no_resep" => $no_resep,
			"tanggal" => $tanggal,
			"id_permintaan" => $id_permintaan,
			"no_rekamedis" => $no_rm,
			"created_date" => $date,
			"user_created" => $username,
		);

		$this->db->insert('t_permintaan_obat', $arr);

		echo $id_permintaan;
	}

	public function insert_detail_permintaan()
	{
		$no_resep = $this->input->post('no_resep');
		$id_permintaan = $this->input->post('id_permintaan');
		$id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$satuan = $this->input->post('satuan');
		$jumlah = $this->input->post('jumlah');
		$ed = $this->input->post('ed');
		$aturan_pakai = $this->input->post('aturan_pakai');
		$anjuran = $this->input->post('anjuran');
		$waktu = $this->input->post('waktu');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			"no_resep"=>$no_resep,
			"id_permintaan"=>$id_permintaan,
			"id_obat"=>$id_obat,
			"nama_obat"=>$nama_obat,
			"jumlah"=>$jumlah,
			"satuan"=>$satuan,
			"expired_date"=>$ed,
			"aturan_pakai"=>$aturan_pakai,
			"anjuran"=>$anjuran,
			"waktu"=>$waktu,
			"created_date"=>$tanggal
		);

		$this->db->insert('t_detail_permintaan_obat', $data);
	}
}
