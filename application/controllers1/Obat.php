<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
			redirect("login");
		}else{
            $this->data['title'] = 'Obat';
            $this->data['subtitle'] = 'Master Obat';
            $this->data['detail_title'] = 'SIMETIKON';
            $this->data['detail_subtitle1'] = 'Obat';
            $this->data['detail_subtitle2'] = 'Master Obat';
        }
	}

	public function index()
	{
		$this->load->view('master_obat', $this->data);
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

	public function insert_obat(){
		$namaobat= $this->input->post('namaobat');
		$satuan= $this->input->post('satuan');

		$arr = array(
			"nama_obat" => $namaobat,
			"satuan" => $satuan,
		);

		$this->db->insert('t_obat', $arr);

		echo $namaobat;
	}

	public function update_obat(){
		$namaobat= $this->input->post('namaobat');
		$satuan= $this->input->post('satuan');
		$id= $this->input->post('id');

		$arr = array(
			"nama_obat" => $namaobat,
			"satuan" => $satuan,
		);

		$this->db->where('id', $id);
		$this->db->update('t_obat', $arr);

		echo $id;

	}

	public function delete_obat(){
		$id= $this->input->post('id');
		
		$this->db->where('id', $id);
		$this->db->delete('t_obat');

		echo $id;
	}

	public function pengeluaran()
	{
		$this->data['subtitle'] = 'Transaksi Keluar';
		$this->data['detail_subtitle2'] = 'Transaksi Keluar';
		$this->load->view('pengeluaran_obat', $this->data);
	}

}