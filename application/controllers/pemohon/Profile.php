<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('pemohon/model_pemohon');
        $this->load->model('model_users');
        $this->load->model('model_perusahaan');

    }

    public function index()
    {

        $data = $this->model_users->get_where(array('id' => $this->session->userdata('id')))->row();

        $perusahaan_all = $this->model_perusahaan->get()->result();
        $this->load->view('pemohon/profile/index', array('title' => "Profil",
            'data' => $data, 'perusahaan_all' => $perusahaan_all));
    }

    public function update()
    {
        $id = $this->session->userdata('id');
        $post = $this->input->post();
        $datauser = $this->model_users->get_where(array('id' => $id))->row();
        if ($post['password'] == '') {
            $data = [
                'nama' => $post['nama'],
                'telp' => $post['telp'],
                'username' => $post['username'],
            ];
        } else {
            $data = [
                'nama' => $post['nama'],
                'telp' => $post['telp'],
                'username' => $post['username'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            ];
        }
        $update = $this->model_users->update($id, $data);
        if ($update) {
            $this->session->set_flashdata('success_profile', "Data berhasil di update");
            redirect('pemohon/profile/index', 'refresh');
        }else{
            $this->session->set_flashdata('error_profile', "Gagal update data anda, coba lagi");
            redirect('pemohon/profile/index', 'refresh');
        }

    }



}