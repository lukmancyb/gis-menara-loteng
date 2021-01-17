<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends MY_Controller {

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

    function index()
    {
        $data = array('title' => 'Data Perusahaan Menara Telekomunikasi',//kita buat file formtower di dalam folder views/admin
                      'itemdataperusahaan'=>$this->model_perusahaan->get()
                    );
        $this->load->view('admin/perusahaan/v_data_perusahaan', $data);
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
    
    function simpan_data_perusahaan()
    {
        $data = $this->input->post();

        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $insert = $this->model_perusahaan->insert($data);

            if ($insert) {
                echo json_encode(array(
                    'success' => true,
                    'msg' => "Berhasil"
                ));
            } else {
                echo json_encode(array(
                    'success' => false,
                    'msg' => "Gagal simpan data"
                ));
            }
        }
    }

    function edit_data_perusahaan()
    {
        $data = $this->input->post();

        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $update = $this->model_perusahaan->update($data['id_perusahaan'], $data);

            if ($update) {
                echo json_encode(array(
                    'success' => true,
                    'msg' => "Berhasil di Update"
                ));
            } else {
                echo json_encode(array(
                    'success' => false,
                    'msg' => "Gagal update data"
                ));
            }
        }
    }


     /*
    ##### END OF AJAX REQUEST ######
    */

    function tambah()
    {
        $data = array('title' => 'Tambah Data Perusahaan',//kita buat file formtower di dalam folder views/admin
                    //   'itemdatatower'=>$this->model_menaraseluler->getAll()
                    );
        $this->load->view('admin/perusahaan/v_tambah_perusahaan', $data);
    }

    function delete($id)
    {
        // Ambil data user dari database
        $user = $this->model_perusahaan->get_where(array('id_perusahaan' => $id ))->row();

        // Jika data user tidak ada maka show 404
        if (!$user) show_404();

        // Jalankan function delete pada model_users
        $query = $this->model_perusahaan->delete($id);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berhasil menghapus user');
        else $message = array('status' => true, 'message' => 'Gagal menghapus user');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('perusahaan', 'refresh');
    }


   
}