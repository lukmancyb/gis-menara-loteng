<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bakti extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        //kita load model yang dibutuhkan, yaitu model tower
        // $this->load->model(array('model_perusahaan'));
        $this->cekLogin();
        $this->isAdmin();
        $this->load->model(array('model_kecamatan'));
        $this->load->model(array('model_desa'));
        $this->load->model(array('model_bakti'));
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index()
    {
        $data = array('title' => 'Data Menara Bantuan dari BAKTI',//kita buat file formtower di dalam folder views/admin
                      'data_bakti'=>$this->model_bakti->get()
                    );
        $this->load->view('admin/bakti/v_data_bakti', $data);
    }

    function tambah()
    {
        $data = array('title' => 'Tambah Data Bantuan dari BAKTI',//kita buat file formtower di dalam folder views/admin
                    //   'itemdatatower'=>$this->model_bakti->getAll()
                    );
        $this->load->view('admin/bakti/v_tambah_data_bakti', $data);
    }

    function edit($id = null)
    {
        $id = $this->uri->segment(3);

        $databakti = $this->model_bakti->get_join_where(array('id_menara_bakti'=> $id))->row();

        // Jika data user tidak ada maka show 404
        if (!$databakti) show_404();
        // Data untuk page users/add
        $data['title'] = 'Edit Data Koordinat Tower';
        $data['dbakti'] = $databakti;
        // var_dump($databakti); die;
        // Jalankan view template/layout
        $this->load->view('admin/bakti/v_edit_data_bakti', $data);
    }


    /*
    ##### AJAX REQUEST ######
    */
   

    function get_kecamatan(){
        $data = $this->model_kecamatan->get()->result();
        echo json_encode($data);
    }

    function get_desa_by_kecamatan(){
        $id_kecamatan = $this->input->post('id_kecamatan');
        $data = $this->model_desa->get_where(array('id_kecamatan' => $id_kecamatan))->result();

        echo json_encode($data);
    }

    function simpan_data_bakti()
    {
        $data = $this->input->post();
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $insert = $this->model_bakti->insert($data);

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

    function update_data_bakti()
    {
        $data = $this->input->post();
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $update = $this->model_bakti->update($data['id_menara_bakti'], $data);

            if ($update) {
                echo json_encode(array(
                    'success' => true,
                    'msg' => "Berhasil di update"
                ));
            } else {
                echo json_encode(array(
                    'success' => false,
                    'msg' => "Gagal update data"
                ));
            }
        }
    }

    function delete($id)
    {
        // Ambil data user dari database
        $mb = $this->model_bakti->read($id)->row();

        // Jika data user tidak ada maka show 404
        if (!$mb) show_404();

        // Jalankan function delete pada model_users
        $query = $this->model_bakti->delete($id);

        // cek jika query berhasil
        if ($query) {
            echo json_encode(array(
                'success' => true,
                'msg' => "Berhasil di hapus"
            ));
        } else {
            echo json_encode(array(
                'success' => false,
                'msg' => "Gagal hapus data"
            ));
        }

        // refresh page
        redirect('bakti', 'refresh');
    }

     /*
    ##### END OF AJAX REQUEST ######
    */


  
    
}