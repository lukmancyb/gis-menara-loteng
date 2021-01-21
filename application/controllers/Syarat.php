<?php


class Syarat extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('model_syarat');
    }

    public function index()
    {
        $data = $this->model_syarat->get()->result();

        $this->load->view('admin/syaratpermohonan/v_syarat_permohonan',
            [
                'title' => "Data syarat pengajuan",
                'syarat' => $data,
            ]);
    }

    public function add()
    {
        $posts = $this->input->post();
        $data = [
            'nama' => $posts['nama'],
            'slug' => $posts['slug'],
            'created_at' => date('Y-m-d H:i:s')
        ];

        $query = $this->model_syarat->insert($data);
        if ($query) {
            $this->session->set_flashdata('message_syarat',
                [
                    'message' => 'Sukses menambah data',
                    'status' => true
                ]);
        } else {
            $this->session->set_flashdata(
                'message_syarat',
                [
                    'message' => 'Ggagal menambah data',
                    'status' => false
                ]);
        }

        redirect('syarat/index', 'refresh');

    }

    public function edit()
    {
        $uri = $this->uri->segment(3);

        $data = $this->model_syarat->get_where(['id' => $uri])->row();

        if (!empty($data)) {
            $this->load->view('admin/syaratpermohonan/v_edit_syarat_permohonan',
                ['title' => "Edit data syarat",
                    'data' => $data
                ]);
        } else {
            $this->session->set_flashdata(
                'message_syarat',
                [
                    'message' => 'Ggagal, Data tidak ditemukan',
                    'status' => false
                ]);
            redirect('syarat', 'refresh');
        }
    }

    public function update()
    {
       $post = $this->input->post();

        $data = array(
            'nama' => $post['nama'],
            'slug' => $post['slug']
        );
        $update = $this->model_syarat->update($post['id'],$data);
//        var_dump($update); die;
        if ($update) {
            $this->session->set_flashdata(
                'message_syarat',
                [
                    'message' => 'Berhasil, Data berhasil duibah',
                    'status' => true
                ]);
            redirect('syarat', 'refresh');
        } else {
            $this->session->set_flashdata(
                'message_syarat',
                [
                    'message' => 'Ggagal, Data tidak ditemukan',
                    'status' => false
                ]);
            redirect('syarat', 'refresh');
        }

    }

    public function delete()
    {
        $uri = $this->uri->segment(3);

        $data = $this->model_syarat->get($uri)->row();

        if (empty($data)) {
            $this->session->set_flashdata(
                'message_syarat',
                [
                    'message' => 'Ggagal, Data tidak ditemukan',
                    'status' => false
                ]);
            redirect('syarat', 'refresh');
        }else{
            $delete = $this->model_syarat->delete($uri);
            if ($delete){
                $this->session->set_flashdata(
                    'message_syarat',
                    [
                        'message' => 'Berhasil, Data berhasil duhapus',
                        'status' => true
                    ]);
                redirect('syarat', 'refresh');
            }else{
                $this->session->set_flashdata(
                    'message_syarat',
                    [
                        'message' => 'Ggagal, Terjadi kesalahan coba lagi ya .',
                        'status' => false
                    ]);
                redirect('syarat', 'refresh');
            }

        }

    }

}