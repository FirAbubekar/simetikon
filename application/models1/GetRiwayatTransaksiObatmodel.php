<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GetRiwayatTransaksiObatmodel extends CI_Model {
    public function filter($search, $limit, $start, $order_field, $order_ascdesc,$tgl_awal,$tgl_akhir,$nama_obat){

        if($tgl_awal==""||$tgl_akhir==""){
            $date="";
        }else{
            $date = '(t_detail_permintaan_obat.created_date  BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'") AND';
        }
        return $this->db->query("
            SELECT
                t_detail_permintaan_obat.id,
                t_detail_permintaan_obat.id_permintaan,
                t_detail_permintaan_obat.id_obat,
                t_detail_permintaan_obat.nama_obat,
                t_detail_permintaan_obat.jumlah,
                t_detail_permintaan_obat.satuan,
                t_detail_permintaan_obat.expired_date,
                t_detail_permintaan_obat.aturan_pakai,
                t_detail_permintaan_obat.waktu,
                t_detail_permintaan_obat.anjuran,
                t_detail_permintaan_obat.created_date 
            FROM
                t_detail_permintaan_obat
            WHERE
                t_detail_permintaan_obat.nama_obat LIKE '%".$nama_obat."%' AND
                ".$date."
                (t_detail_permintaan_obat.nama_obat LIKE '%".$search."%' OR
                t_detail_permintaan_obat.aturan_pakai LIKE '%".$search."%' OR
                t_detail_permintaan_obat.waktu  LIKE '%".$search."%' OR
                t_detail_permintaan_obat.satuan LIKE '%".$search."%')
            ORDER BY ".$order_field." ".$order_ascdesc."
            LIMIT ".$start.",".$limit."
        ")->result();
    }
    public function count_all($tgl_awal,$tgl_akhir,$nama_obat){
        if($tgl_awal==""||$tgl_akhir==""){
            $date="";
        }else{
            $date = ' AND (t_detail_permintaan_obat.created_date  BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'")';
        }
        return $this->db->query("
            SELECT
                t_detail_permintaan_obat.id,
                t_detail_permintaan_obat.id_permintaan,
                t_detail_permintaan_obat.id_obat,
                t_detail_permintaan_obat.nama_obat,
                t_detail_permintaan_obat.jumlah,
                t_detail_permintaan_obat.satuan,
                t_detail_permintaan_obat.expired_date,
                t_detail_permintaan_obat.aturan_pakai,
                t_detail_permintaan_obat.waktu,
                t_detail_permintaan_obat.anjuran,
                t_detail_permintaan_obat.created_date 
            FROM
                t_detail_permintaan_obat
            WHERE
                t_detail_permintaan_obat.nama_obat LIKE '%".$nama_obat."%'
                ".$date."
        ")->num_rows();
    }
    public function count_filter($search,$tgl_awal,$tgl_akhir,$nama_obat){
        if($tgl_awal==""||$tgl_akhir==""){
            $date="";
        }else{
            $date = '(t_detail_permintaan_obat.created_date  BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'") AND';
        }
        return $this->db->query("
            SELECT
                t_detail_permintaan_obat.id,
                t_detail_permintaan_obat.id_permintaan,
                t_detail_permintaan_obat.id_obat,
                t_detail_permintaan_obat.nama_obat,
                t_detail_permintaan_obat.jumlah,
                t_detail_permintaan_obat.satuan,
                t_detail_permintaan_obat.expired_date,
                t_detail_permintaan_obat.aturan_pakai,
                t_detail_permintaan_obat.waktu,
                t_detail_permintaan_obat.anjuran,
                t_detail_permintaan_obat.created_date 
            FROM
                t_detail_permintaan_obat
            WHERE
                t_detail_permintaan_obat.nama_obat LIKE '%".$nama_obat."%' AND
                ".$date."
                (t_detail_permintaan_obat.nama_obat LIKE '%".$search."%' OR
                t_detail_permintaan_obat.aturan_pakai LIKE '%".$search."%' OR
                t_detail_permintaan_obat.waktu  LIKE '%".$search."%' OR
                t_detail_permintaan_obat.satuan LIKE '%".$search."%')
        ")->num_rows();
    }
}
?>