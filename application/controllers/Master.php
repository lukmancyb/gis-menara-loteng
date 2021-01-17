<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        //kita load model yang dibutuhkan, yaitu model tower
        $this->load->model(array('model_perusahaan'));
        $this->load->model(array('model_kecamatan'));
        $this->load->model(array('model_desa'));
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->cekLogin();
        $this->isAdmin();
    }




    /*
    ##### AJAX REQUEST ######
    */
    function get_perusahaan(){
        $data = $this->model_perusahaan->get()->result();
        echo json_encode($data);
    }
    
    function get_perusahaan_by_id($id){
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $data = $this->model_perusahaan->get_where(array('id_perusahaan'=> $id))->row();

            if ($data != null) {
                echo json_encode(array(
                    'success' => true,
                    'msg' => "Berhasil",
                    'data' => $data
                ));
            } else {
                echo json_encode(array(
                    'success' => false,
                    'msg' => "Gagal ambil data"
                ));
            }
        }
    }

    function get_kecamatan(){
        $data = $this->model_kecamatan->get()->result();
        echo json_encode($data);
    }

    function get_desa_by_kecamatan(){
        $id_kecamatan = $this->input->post('id_kecamatan');
        $data = $this->model_desa->get_where(array('id_kecamatan' => $id_kecamatan))->result();

        echo json_encode($data);
    }



     /*
    ##### END OF AJAX REQUEST ######
    */

  


   
}