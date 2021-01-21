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
        $perusahaan = $this->model_perusahaan->get()->result();
//        var_dump($perusahaan); die;
        $this->load->view('pemohon/profile/index', array('title' => "Profil",
            'data' => $data, 'perusahaan' => $perusahaan));
    }

    public function update()
    {

        $id = $this->session->userdata('id');
        $post = $this->input->post();

        if ($post['password'] == '') {
//            var_dump("password not update"); die;
            $data = [
                'nama' => $post['nama'],
                'telp' => $post['telp'],
                'username' => $post['username'],
                'id_perusahaan' => $post['id_perusahaan']
            ];
        } else {
            $data = [
                'nama' => $post['nama'],
                'telp' => $post['telp'],
                'username' => $post['username'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                'id_perusahaan' => $post['id_perusahaan']
            ];
        }
        $update = $this->model_users->update($id, $data);
        if ($update) {
            $this->session->set_userdata('id_perusahaan', $post['id_perusahaan']);
            $this->session->set_flashdata('success_profile', "Data berhasil di update");
            redirect('pemohon/profile/index', 'refresh');
        }else{
            $this->session->set_flashdata('error_profile', "Gagal update data anda, coba lagi");
            redirect('pemohon/profile/index', 'refresh');
        }

    }

    public function register_perusahaan(){

        $this->load->view('pemohon/profile/v_register_perusahaan', ['title' => 'Registrasi Perusahaan']);
    }

    public function simpan_registrasi_perusahaan(){

       $data = [
           'nama_perusahaan' => $this->input->post('nama_perusahaan'),
           'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
           'hp_perusahaan' => $this->session->userdata('telp'),
           'status' => false,
       ];

       $query = $this->model_perusahaan->insert($data);
       if ($query){
             $this->session->set_flashdata('success_profile', "Data berhasil di tambahkan silahkan update profil perusahaan anda");
            redirect('pemohon/profile/index', 'refresh');
       }else{
           $this->session->set_flashdata('error_profile', "Gagal menambah data anda, coba lagi");
           redirect('pemohon/profile/index', 'refresh');
       }

    }

}