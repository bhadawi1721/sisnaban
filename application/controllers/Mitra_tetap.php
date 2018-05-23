<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_tetap extends CI_Controller {

public function __construct(){
        parent::__construct();
        $this->load->model('Mmitratetap');
        $this->load->model('Mstatus');
    } 
	public function index()
	{
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='mitra_tetap/index'; // tes content
		// $data['footer']='footer';
		 $data['stat']=$this->Mstatus->getallstatus('mst_status'); // mengambil data dari model Mmitra di tabel mst_petugas
         $data['petugas']=$this->Mmitratetap->getall('mst_mitra_tetap');
        $data['data'] = array('data' => $data);
		$this->load->view('template/view_index', $data);
	}
	public function add(){

		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='mitra_tetap/view_add'; // tes content
		

		if(isset($_POST) && count($_POST) > 0)     
        {   
            $data = array(
                'mst_name' => $this->input->post('nama'),
                'mst_email' => $this->input->post('email'),
                'mst_adress' => $this->input->post('address'),
                'mst_handpone' => $this->input->post('handpone'),
                'mst_description' => $this->input->post('description'),
                'mst_time_open' => $this->input->post('jambuka'),
                'mst_time_closed' => $this->input->post('jamtutup'),
                'mst_id_status' => $this->input->post('status'),
 );
            
            $menu_id = $this->Mmitratetap->insert($data);
            redirect('Mitra_tetap');
        }
        else
        {

            $this->load->model('Mstatus');
            $data['stat']=$this->Mstatus->getallstatus('mst_status'); // mengambil data dari model Mmitra di tabel mst_petugas
                
            $this->load->view('template/view_index', $data);
        }
	}

	public function edit($mst_id_mitra){
		$data['header']='template/view_header';
		$data['sidebar']='template/view_sidebar';
		$data['content']='mitra_tetap/view_edit'; // tes content
		$data['mitra'] = $this->Mmitratetap->getmitra($mst_id_mitra);

		if(isset($data['mitra']['mst_id_mitra']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $data = array(
                    'mst_name' => $this->input->post('nama'),
                    'mst_email' => $this->input->post('email'),
                    'mst_adress' => $this->input->post('address'),
                    'mst_handpone' => $this->input->post('handpone'),
                    'mst_description' => $this->input->post('description'),
                    'mst_time_open' => $this->input->post('jambuka'),
                    'mst_time_closed' => $this->input->post('jamtutup'),
                    'mst_id_status' => $this->input->post('status'),
                );

                $this->Mmitratetap->updatemitra($mst_id_mitra,$data);            
                redirect('Mitra_tetap');
            }
            else
            {
                $this->load->model('Mstatus');
            $data['stat']=$this->Mstatus->getallstatus('mst_status'); // mengambil data dari model Mmitra di tabel mst_petugas
                
            $this->load->view('template/view_index', $data);
            }
        }
        else
            show_error('The menu you are trying to edit does not exist.');
    } 


	


}

/* End of file Mitra_tetap.php */
/* Location: ./application/controllers/Mitra_tetap.php */