<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gis extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
         $this->isAdmin();

        //kita load model yang dibutuhkan, yaitu model tower
        $this->load->model(array('model_menaraseluler'));
        $this->load->model(array('model_bakti'));
        $this->load->model(array('model_blankspot'));
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data = array(
            'title' => 'Data tower', //kita buat file formtower di dalam folder views/admin
            'itemdatatower' => $this->model_menaraseluler->getAll()
        );
        $this->load->view('admin/gis/v_gis_all', $data);
    }
    function menara_seluler()
    {
        $data = array(
            'title' => 'GIS Menara Seluler', //kita buat file formtower di dalam folder views/admin
            'datatower' => $this->model_menaraseluler->getAllJoin()
        );
        $this->load->view('admin/gis/v_gis_menara_seluler', $data);
    }
    function data_seluler(){
    if (!$this->input->is_ajax_request()) {
        show_404();
        } else {   
    
        $query = $this->model_menaraseluler->getAllJoin();
        
        if ($query->num_rows() > 0) {
            echo json_encode(array(
            'success' => true,
            'msg' => "Berhasil",
            'data' => $query->result()
            ));
        } else {
            echo json_encode(array(
            'success' => false,
            'msg' => "Data yang anda cari belum ada"
            ));
        }
        }
    }
    function menara_bakti()
    {
        $data = array(
            'title' => 'GIS Menara Bakti', //kita buat file formtower di dalam folder views/admin
            'datatower' => $this->model_bakti->getAllJoin()
        );
        $this->load->view('admin/gis/v_gis_menara_bakti', $data);
    }
    function data_bakti(){
        if (!$this->input->is_ajax_request()) {
            show_404();
            } else {   
        
            $query = $this->model_bakti->getAllJoin();
            
            if ($query->num_rows() > 0) {
                echo json_encode(array(
                'success' => true,
                'msg' => "Berhasil",
                'data' => $query->result()
                ));
            } else {
                echo json_encode(array(
                'success' => false,
                'msg' => "Data yang anda cari belum ada"
                ));
            }
        }
    }
    function area_blankspot()
    {
        $data = array(
            'title' => 'GIS Menara Blankspot', //kita buat file formtower di dalam folder views/admin
            'datatower' => $this->model_blankspot->getAllJoin()
        );
        $this->load->view('admin/gis/v_gis_area_blankspot', $data);
    }

    function data_blankspot(){
        if (!$this->input->is_ajax_request()) {
            show_404();
            } else {   
        
            $query = $this->model_blankspot->getAllJoin();
            
            if ($query->num_rows() > 0) {
                echo json_encode(array(
                'success' => true,
                'msg' => "Berhasil",
                'data' => $query->result()
                ));
            } else {
                echo json_encode(array(
                'success' => false,
                'msg' => "Data yang anda cari belum ada"
                ));
            }
        }
    }
    function viewmarkertower()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            if ($this->model_menaraseluler->getbyidtower($this->input->post('id_tower'))->num_rows() != null) {
                $status = 'success';
                $msg = $this->model_menaraseluler->getbyidtower($this->input->post('id_tower'))->result();
                $datatower = $this->model_menaraseluler->read($this->input->post('id_tower'))->result();
            } else {
                $status = 'error';
                $msg = 'data tidak ditemukan';
                $datatower = null;
            }
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status' => $status, 'msg' => $msg, 'datatower' => $datatower)));
        }
    }
}