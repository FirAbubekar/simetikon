<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{

    public function get_pasien()
    {
        $no_rm = $this->input->post('no_rm');

        $query = $this->db->query('
            SELECT
                t_pasien.id,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.alamat,
                t_pasien.tanggal_lahir 
            FROM
                t_pasien 
            WHERE
                t_pasien.no_rekamedis like "%' . $no_rm . '%"
            ORDER BY
                t_pasien.no_rekamedis ASC
        ')->row();

        if ($query == "") {
            $query = "gagal";
            echo json_encode($query);
        } else {
            echo json_encode($query);
        }
    }

    public function satuan_obat()
    {
        $query = $this->db->query('
            SELECT
                t_satuan.id,
                t_satuan.satuan,
                t_satuan.status
            FROM
                t_satuan 
            WHERE
                t_satuan.status = "aktif"
            ORDER BY
                t_satuan.satuan ASC
        ')->result();

        echo json_encode($query);
    }

    public function get_detail_obat()
    {

        $id = $this->input->post('id');

        $query = $this->db->query('
            SELECT
                t_obat.id,
                t_obat.nama_obat ,
                t_obat.satuan
            FROM
                t_obat 
            WHERE
                t_obat.id = "'.$id.'"
        ')->row();

        echo json_encode($query);
    }

    public function obat()
    {
        $query = $this->db->query('
            SELECT
                t_obat.id,
                t_obat.nama_obat 
            FROM
                t_obat 
            ORDER BY
                t_obat.nama_obat ASC
        ')->result();

        echo json_encode($query);
    }

    public function aturan_pakai(){
        $query = $this->db->query('
            SELECT
                t_aturan_pakai.id,
                t_aturan_pakai.aturan_pakai 
            FROM
                t_aturan_pakai 
            ORDER BY
                t_aturan_pakai.aturan_pakai ASC
        ')->result();

        echo json_encode($query);        
    }

    public function getall_pasien(){
        $this
            ->load
            ->model('GetPasienmodel');

        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        if ($order_index == 0) {
            $order_field = 't_pasien.no_rekamedis';
            $order_ascdesc = 'DESC';
        } else {
            $order_ascdesc = $_POST['order'][0]['dir'];
        }

        $sql_total = $this
            ->GetPasienmodel
            ->count_all();
        $sql_data = $this
            ->GetPasienmodel
            ->filter($search, $limit, $start, $order_field, $order_ascdesc);
        $sql_filter = $this
            ->GetPasienmodel
            ->count_filter($search);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    public function getriwayat_obat(){
        $this
            ->load
            ->model('GetRiwayatObatmodel');

        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        if ($order_index == 0) {
            $order_field = 't_obat.nama_obat';
            $order_ascdesc = 'DESC';
        } else {
            $order_ascdesc = $_POST['order'][0]['dir'];
        }

        $sql_total = $this
            ->GetRiwayatObatmodel
            ->count_all();
        $sql_data = $this
            ->GetRiwayatObatmodel
            ->filter($search, $limit, $start, $order_field, $order_ascdesc);
        $sql_filter = $this
            ->GetRiwayatObatmodel
            ->count_filter($search);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    public function getriwayat_permintaan(){

        $tgl_awal=$this->input->post('tgl_awal');
        $tgl_akhir=$this->input->post('tgl_akhir');
        $norm=$this->input->post('norm');
        $this
            ->load
            ->model('GetRiwayatPermintaanmodel');

        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        if ($order_index == 0) {
            $order_field = 't_permintaan_obat.tanggal';
            $order_ascdesc = 'DESC';
        } else {
            $order_ascdesc = $_POST['order'][0]['dir'];
        }

        $sql_total = $this
            ->GetRiwayatPermintaanmodel
            ->count_all($tgl_awal,$tgl_akhir,$norm);
        $sql_data = $this
            ->GetRiwayatPermintaanmodel
            ->filter($search, $limit, $start, $order_field, $order_ascdesc,$tgl_awal,$tgl_akhir,$norm);
        $sql_filter = $this
            ->GetRiwayatPermintaanmodel
            ->count_filter($search,$tgl_awal,$tgl_akhir,$norm);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    public function getriwayat_obatkeluar(){

        $tgl_awal=$this->input->post('tgl_awal');
        $tgl_akhir=$this->input->post('tgl_akhir');
        $nama_obat=$this->input->post('nama_obat');
        $this
            ->load
            ->model('GetRiwayatTransaksiObatmodel');

        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        if ($order_index == 0) {
            $order_field ='t_detail_permintaan_obat.created_date';
            $order_ascdesc = 'DESC';
        } else {
            $order_ascdesc = $_POST['order'][0]['dir'];
        }

        $sql_total = $this
            ->GetRiwayatTransaksiObatmodel
            ->count_all($tgl_awal,$tgl_akhir,$nama_obat);
        $sql_data = $this
            ->GetRiwayatTransaksiObatmodel
            ->filter($search, $limit, $start, $order_field, $order_ascdesc,$tgl_awal,$tgl_akhir,$nama_obat);
        $sql_filter = $this
            ->GetRiwayatTransaksiObatmodel
            ->count_filter($search,$tgl_awal,$tgl_akhir,$nama_obat);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );
        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    public function detail_obat_pasien(){
        $id_permintaan = $this->input->post('id_permintaan');
        
        $query = $this->db->query("
            SELECT
                t_detail_permintaan_obat.id,
                t_detail_permintaan_obat.id_permintaan,
                t_detail_permintaan_obat.id_obat,
                t_detail_permintaan_obat.nama_obat,
                t_detail_permintaan_obat.anjuran,
                t_detail_permintaan_obat.jumlah,
                t_detail_permintaan_obat.satuan,
                t_detail_permintaan_obat.expired_date,
                t_detail_permintaan_obat.aturan_pakai,
                t_detail_permintaan_obat.waktu 
            FROM
                t_detail_permintaan_obat 
            WHERE
                t_detail_permintaan_obat.id_permintaan = '".$id_permintaan."'
            ORDER BY
                t_detail_permintaan_obat.nama_obat ASC
        ")->result();

        echo json_encode($query);
    }

}
