<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class GetRiwayatObatmodel extends CI_Model {
    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        return $this->db->query("
            SELECT
                t_obat.id,
                t_obat.nama_obat,
                t_obat.jumlah,
                t_obat.satuan,
                t_obat.harga,
                t_obat.created_date 
            FROM
                t_obat
            WHERE
                (t_obat.nama_obat LIKE '%".$search."%' OR
                t_obat.jumlah LIKE '%".$search."%' OR
                t_obat.satuan LIKE '%".$search."%' )
            ORDER BY ".$order_field." ".$order_ascdesc."
            LIMIT ".$start.",".$limit."
        ")->result();
    }
    public function count_all(){
        return $this->db->query("
            SELECT
                t_obat.id,
                t_obat.nama_obat,
                t_obat.jumlah,
                t_obat.satuan,
                t_obat.harga,
                t_obat.created_date 
            FROM
                t_obat                  
        ")->num_rows();
    }
    public function count_filter($search){
        return $this->db->query("
            SELECT
                t_obat.id,
                t_obat.nama_obat,
                t_obat.jumlah,
                t_obat.satuan,
                t_obat.harga,
                t_obat.created_date 
            FROM
                t_obat
            WHERE
                (t_obat.nama_obat LIKE '%".$search."%' OR
                t_obat.jumlah LIKE '%".$search."%' OR
                t_obat.satuan LIKE '%".$search."%' )
        ")->num_rows();
    }
}
?>