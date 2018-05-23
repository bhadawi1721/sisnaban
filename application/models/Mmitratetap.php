<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmitratetap extends CI_Model {

	 function insert($data){
        $this->db->insert('mst_mitra_tetap',$data);
        return $this->db->insert_id();
    }

    function getall($table){
        $this->db->select('mst_mitra_tetap.mst_id_mitra, mst_mitra_tetap.mst_name, mst_mitra_tetap.mst_email, mst_mitra_tetap.mst_adress, mst_mitra_tetap.mst_handpone, mst_mitra_tetap.mst_description, mst_mitra_tetap.mst_time_open, mst_mitra_tetap.mst_time_closed, mst_mitra_tetap.mst_id_status, mst_status.mst_name_status')
        ->join('mst_status','mst_status.mst_id_status=mst_mitra_tetap.mst_id_status');
        $data = $this->db->get($table);
        return $data->result_array();

    }
    
    function updatemitra($mst_id_mitra,$data)
    {
       $this->db->where('mst_id_mitra',$mst_id_mitra);
        return $this->db->update('mst_mitra_tetap',$data);
    }

    function delete($table, $where){
        $data = $this->db->delete($table, $where );
        return $data;
    }

    function getmitra($mst_id_mitra)
    {
        return $this->db->get_where('mst_mitra_tetap',array('mst_id_mitra'=>$mst_id_mitra))->row_array();
    }

}

/* End of file Mmitratetap.php */
/* Location: ./application/models/Mmitratetap.php */