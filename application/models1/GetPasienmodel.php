<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GetPasienmodel extends CI_Model {
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        return $this->db->query("
            SELECT
                t_pasien.id,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.tanggal_lahir 
            FROM
                t_pasien 
            WHERE
                (t_pasien.no_rekamedis LIKE '%".$search."%' OR
                t_pasien.nama_pasien LIKE '%".$search."%' OR
                t_pasien.tanggal_lahir LIKE '%".$search."%' )
            ORDER BY ".$order_field." ".$order_ascdesc."
            LIMIT ".$start.",".$limit."
        ")->result();
    }
    public function count_all(){
        return $this->db->query("
            SELECT
                t_pasien.id,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.tanggal_lahir 
            FROM
                t_pasien                  
        ")->num_rows();
    }
    public function count_filter($search){
        return $this->db->query("
            SELECT
                t_pasien.id,
                t_pasien.no_rekamedis,
                t_pasien.nama_pasien,
                t_pasien.tanggal_lahir 
            FROM
                t_pasien 
            WHERE
            (t_pasien.no_rekamedis LIKE '%".$search."%' OR
            t_pasien.nama_pasien LIKE '%".$search."%' OR
            t_pasien.tanggal_lahir LIKE '%".$search."%' )
        ")->num_rows();
    }
}
?>