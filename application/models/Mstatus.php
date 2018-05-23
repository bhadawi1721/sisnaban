<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstatus extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function getstatus($mst_id_status)
    {
        return $this->db->get_where('mst_status',array('mst_id_status'=>$mst_id_status))->row_array();
    }
    
    /*
     * Get all cate_menus
     */
    function getallstatus()
    {
        return $this->db->get('mst_status', 2)->result_array();
    }

}

/* End of file Mstatus.php */
/* Location: ./application/models/Mstatus.php */