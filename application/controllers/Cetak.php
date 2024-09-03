<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
			redirect("login");
		}else{
            $this->data['title'] = 'Permintaan';
            $this->data['subtitle'] = 'Form Permintaan';
            $this->data['detail_title'] = 'SIMETIKON';
            $this->data['detail_subtitle1'] = 'Permintaan';
            $this->data['detail_subtitle2'] = 'Form Permintaan';
        }
	}

	public function no_permintaan($id_permintaan)
	{
        $data['cetak'] = $this->db->query("
        SELECT
            t_permintaan_obat.tanggal,
            t_permintaan_obat.no_rekamedis,
            t_detail_permintaan_obat.nama_obat,
            t_detail_permintaan_obat.jumlah,
            t_detail_permintaan_obat.satuan,
            t_detail_permintaan_obat.expired_date,
            t_detail_permintaan_obat.aturan_pakai,
            t_detail_permintaan_obat.waktu,
            t_detail_permintaan_obat.anjuran,
            t_detail_permintaan_obat.no_resep,
            t_detail_permintaan_obat.id_permintaan,
            t_pasien.nama_pasien,
            t_pasien.alamat,
            t_pasien.tanggal_lahir
        FROM
            t_permintaan_obat
            INNER JOIN t_detail_permintaan_obat ON t_permintaan_obat.id_permintaan = t_detail_permintaan_obat.id_permintaan
            INNER JOIN t_pasien ON t_permintaan_obat.no_rekamedis = t_pasien.no_rekamedis
        WHERE
            t_detail_permintaan_obat.id_permintaan = '".$id_permintaan."'
        ")->result();

		$this->load->view('cetak_tiket', $data);
	}

    public function detail_cetak(){
        $id = $this->input->post('id_detail');
        $id_permintaan = $this->input->post('id_permintaan');
        $list_id = "";

        for ($i=0; $i <count($id) ; $i++) { 
            $list_id = $list_id.",'".$id[$i]."'";
        }

        $list_id = substr($list_id,1);

        $data['cetak'] = $this->db->query("
        SELECT
            t_permintaan_obat.tanggal,
            t_permintaan_obat.no_rekamedis,
            t_detail_permintaan_obat.nama_obat,
            t_detail_permintaan_obat.jumlah,
            t_detail_permintaan_obat.satuan,
            t_detail_permintaan_obat.expired_date,
            t_detail_permintaan_obat.aturan_pakai,
            t_detail_permintaan_obat.waktu,
            t_detail_permintaan_obat.anjuran,
            t_detail_permintaan_obat.no_resep,
            t_detail_permintaan_obat.id_permintaan,
            t_pasien.nama_pasien,
            t_pasien.alamat,
            t_pasien.tanggal_lahir
        FROM
            t_permintaan_obat
            INNER JOIN t_detail_permintaan_obat ON t_permintaan_obat.id_permintaan = t_detail_permintaan_obat.id_permintaan
            INNER JOIN t_pasien ON t_permintaan_obat.no_rekamedis = t_pasien.no_rekamedis
        WHERE
            t_detail_permintaan_obat.id IN (".$list_id.") AND
            t_detail_permintaan_obat.id_permintaan = '".$id_permintaan."'
        ")->result();

		$this->load->view('cetak_tiket', $data);

        // print_r($data['cetak']);  
    }

}