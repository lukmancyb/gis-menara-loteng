<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tower extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //kita load model yang dibutuhkan, yaitu model tower
        $this->load->model(array('model_menaraseluler'));
        $this->load->model(array('model_perusahaan'));
        $this->load->model(array('model_kecamatan'));
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->cekLogin();
        $this->isAdmin();
    }

    function index()
    {

//        $data = $this->model_menaraseluler->getAllJoin()->result();
//        var_dump(count($data)); die;
        $data = array(
            'title' => 'Data tower', //kita buat file formtower di dalam folder views/admin
            'itemdatatower' => $this->model_menaraseluler->getAllJoin()
        );

        $this->load->view('admin/seluler/formdatatower', $data);
    }
    function koordinat()
    {
        $data = array(
            'title' => 'Koordinat Menara', //kita buat file formtower di dalam folder views/admin
            'datatower' => $this->model_menaraseluler->getAll()
        );
        $this->load->view('admin/seluler/koordinattower', $data);
    }
    function tambah()
    {
        $data = array(
            'title' => 'Tambah Data tower', //kita buat file formtower di dalam folder views/admin
            'itemdatatower' => $this->model_menaraseluler->getAll()
        );
        $this->load->view('admin/seluler/formtambahdatatower', $data);
    }
    function edit($id = null)
    {
        $id = $this->uri->segment(3);

        $datatower = $this->model_menaraseluler->getAllWhere(array('id_tower'=> $id))->row();

        // echo json_encode($datatower);

        // Jika data user tidak ada maka show 404
        if (!$datatower) show_404();
        // Data untuk page users/add
        $data['title'] = 'Edit Data Koordinat Tower';
        $data['dtower'] = $datatower;

        // Jalankan view template/layout
        $this->load->view('admin/seluler/v_edit_tower', $data);
    }

    function simpan_data_tower()
    {
        $data = $this->input->post();
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $insert = $this->model_menaraseluler->insert($data);

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

    function update_data_tower()
    {
        $data = $this->input->post();
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $update = $this->model_menaraseluler->update(array('id_tower' => $data['id_tower']), $data);

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

    function cetak()
    {
        $data = array(
            'title' => 'Cetak Data tower', //kita buat file formtower di dalam folder views/admin
            'itemdatatower' => $this->model_menaraseluler->getAllJoin(),
            'perusahaan' => $this->model_perusahaan->get()->result(),
            'kecamatan' => $this->model_kecamatan->get()->result()
        );
        $this->load->view('admin/seluler/v_cetak_menara_seluler', $data);
    }

    function export_excel()
    {
        $data = array(
            'title' => 'Cetak Data tower', //kita buat file formtower di dalam folder views/admin
            'dt_menara' => $this->model_menaraseluler->getAllJoin(),
            'perusahaan' => $this->model_perusahaan->get()->result(),
            'kecamatan' => $this->model_kecamatan->get()->result(),
            'id_per'=>$this->input->post('id_per'),
            'id_kec'=>$this->input->post('id_kec'),
        );
        $this->load->view('admin/seluler/v_export_excel', $data);
    }

    function simpandaftarkoordinattower()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama_perusahaan', 'Nama Perushaan', 'trim|required');
            if ($this->form_validation->run() == false) {
                $status = 'error';
                $msg = validation_errors();
            } else {

                if ($this->model_menaraseluler->create()) {
                    $status = 'success';
                    $msg = 'data berhasil disimpan';
                } else {
                    $status = 'error';
                    $msg = 'terjadi kesalahan saat menyimpan koordinat';
                }
            }
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status' => $status, 'msg' => $msg)));
        }
    }

    function hapusmarkertower()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {
            if ($this->model_menaraseluler->deletebyidtower($this->input->post('id_tower'))) {
                $status = 'success';
                $msg = 'data berhasil dihapus';
            } else {
                $status = 'error';
                $msg = 'terjadi kesalahan saat menghapus data';
            }
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status' => $status, 'msg' => $msg)));
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
    function delete($id)
    {
        // Ambil data user dari database
        $user = $this->model_menaraseluler->read($id)->row();

        // Jika data user tidak ada maka show 404
        if (!$user) show_404();

        // Jalankan function delete pada model_users
        $query = $this->model_menaraseluler->delete($id);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berhasil menghapus user');
        else $message = array('status' => true, 'message' => 'Gagal menghapus user');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('tower', 'refresh');
    }


   
}
