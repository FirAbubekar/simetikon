<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

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
		$this->load->view('registrasi_pasien', $this->data);
	}

	public function insert_pasien(){
		$norekamedis= $this->input->post('norekamedis');
		$namapasien= $this->input->post('namapasien');
		$tanggallahir 	= $this->input->post('tanggallahir');
		$alamat= $this->input->post('alamat');
		$date = date('Y-m-d H:i:s');

		$arr = array(
			"no_rekamedis" => $norekamedis,
			"nama_pasien" => $namapasien,
			"tanggal_lahir" => $tanggallahir,
			"created_date" => $date,
			"alamat" => $alamat
		);

		$this->db->insert('t_pasien', $arr);

		echo $norekamedis;

	}

	public function get_profil_pasien(){
		$norekamedis = $this->input->post('norekamedis');

		$query = $this->db->query("
			SELECT
				t_pasien.no_rekamedis,
				t_pasien.nama_pasien,
				t_pasien.tanggal_lahir,
				t_pasien.alamat 
			FROM
				t_pasien 
			WHERE
				t_pasien.no_rekamedis = '".$norekamedis."'
		")->row();

		echo json_encode($query);
	}

	public function update_pasien(){
		$norekamedis= $this->input->post('norekamedis');
		$namapasien= $this->input->post('namapasien');
		$tanggallahir 	= $this->input->post('tanggallahir');
		$alamat= $this->input->post('alamat');
		$date = date('Y-m-d H:i:s');

		$arr = array(
			"nama_pasien" => $namapasien,
			"tanggal_lahir" => $tanggallahir,
			"created_date" => $date,
			"alamat" => $alamat
		);

		$this->db->where('no_rekamedis', $norekamedis);
		$this->db->update('t_pasien', $arr);

		echo $norekamedis;
	}

	public function delete_pasien(){
		$norekamedis= $this->input->post('norekamedis');
		
		$this->db->where('no_rekamedis', $norekamedis);
		$this->db->delete('t_pasien');

		echo $norekamedis;
	}

}