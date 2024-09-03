<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GetRiwayatPermintaanmodel extends CI_Model {
    public function filter($search, $limit, $start, $order_field, $order_ascdesc,$tgl_awal,$tgl_akhir,$norm){

        if($tgl_awal==""||$tgl_akhir==""){
            $date="";
        }else{
            $date = '(t_permintaan_obat.tanggal BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'") AND';
        }
        return $this->db->query("
            SELECT
                t_permintaan_obat.id,
                t_permintaan_obat.id_permintaan,
                t_permintaan_obat.tanggal,
                t_permintaan_obat.created_date,
                t_permintaan_obat.user_created,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.tanggal_lahir
            FROM
                t_permintaan_obat
                INNER JOIN t_pasien ON t_permintaan_obat.no_rekamedis = t_pasien.no_rekamedis
            WHERE
                t_pasien.no_rekamedis LIKE '%".$norm."%' AND
                ".$date."
                (t_permintaan_obat.id_permintaan LIKE '%".$search."%' OR
                t_permintaan_obat.tanggal LIKE '%".$search."%' OR
                t_pasien.nama_pasien  LIKE '%".$search."%' OR
                t_pasien.no_rekamedis LIKE '%".$search."%' OR
                t_permintaan_obat.user_created LIKE '%".$search."%' )
            ORDER BY ".$order_field." ".$order_ascdesc."
            LIMIT ".$start.",".$limit."
        ")->result();
    }
    public function count_all($tgl_awal,$tgl_akhir,$norm){
        if($tgl_awal==""||$tgl_akhir==""){
            $date="";
        }else{
            $date = ' AND (t_permintaan_obat.tanggal BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'")';
        }
        return $this->db->query("
            SELECT
                t_permintaan_obat.id,
                t_permintaan_obat.id_permintaan,
                t_permintaan_obat.tanggal,
                t_permintaan_obat.created_date,
                t_permintaan_obat.user_created,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.tanggal_lahir
            FROM
                t_permintaan_obat
                INNER JOIN t_pasien ON t_permintaan_obat.no_rekamedis = t_pasien.no_rekamedis
            WHERE
                t_pasien.no_rekamedis LIKE '%".$norm."%'
                ".$date."
        ")->num_rows();
    }
    public function count_filter($search,$tgl_awal,$tgl_akhir,$norm){
        if($tgl_awal==""||$tgl_akhir==""){
            $date="";
        }else{
            $date = '(t_permintaan_obat.tanggal BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'") AND';
        }
        return $this->db->query("
            SELECT
                t_permintaan_obat.id,
                t_permintaan_obat.id_permintaan,
                t_permintaan_obat.tanggal,
                t_permintaan_obat.created_date,
                t_permintaan_obat.user_created,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.tanggal_lahir
            FROM
                t_permintaan_obat
                INNER JOIN t_pasien ON t_permintaan_obat.no_rekamedis = t_pasien.no_rekamedis
            WHERE
                t_pasien.no_rekamedis LIKE '%".$norm."%' AND
                ".$date."
                (t_permintaan_obat.id_permintaan LIKE '%".$search."%' OR
                t_permintaan_obat.tanggal LIKE '%".$search."%' OR
                t_pasien.nama_pasien  LIKE '%".$search."%' OR
                t_pasien.no_rekamedis LIKE '%".$search."%' OR
                t_permintaan_obat.user_created LIKE '%".$search."%' )
        ")->num_rows();
    }
}
?>