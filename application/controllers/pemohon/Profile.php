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
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
            $this->form_validation->set_rules('hp_perusahaan', "Telepon Perusahaan", 'required');
            $this->form_validation->set_rules('alamat_perusahaan', "Alamat Perusahaan", 'required');
            $this->form_validation->set_message('required', '%s tidak boleh kosong!');
            if ($this->form_validation->run() === TRUE) {
                $post = $this->input->post();
                $data = [
                    'nama_perusahaan' => $post['nama_perusahaan'],
                    'alamat_perusahaan' => $post['nama_perusahaan'],
                    'hp_perusahaan' => $post['hp_perusahaan'],
                    'created_by' => $this->session->userdata('username'),
                    'created_at' => date('Y:m:d h:i:s')
                ];
//                var_dump($data); die;
                $insert = $this->model_perusahaan->insert($data);
                if ($insert) {
                    $this->session->set_flashdata('perusahaan_add', ['msg' => "Berhasil memasukan perusahaan,
                     mohon menunggu untuk dilakukan validasi.", 'status' => true]);
                    redirect('pemohon/profile', 'refresh');
                }
            }
        }

        $is_company_register = $this->model_perusahaan->get_where(
            [
                'created_by' => $this->session->userdata('username')
            ]
        )->num_rows();

        $data = $this->model_users->get_where(array('id' => $this->session->userdata('id')))->row();
        $perusahaan_all = $this->model_perusahaan->get()->result();
        $this->load->view('pemohon/profile/index',
            [
                'title' => "Profil",
                'data' => $data,
                'perusahaan_all' => $perusahaan_all,
                'is_company_registered' => $is_company_register
            ]);
    }

    public function update()
    {
        $id = $this->session->userdata('id');
        $post = $this->input->post();
        if ($post['password'] == '') {
            $data = [
                'nama' => $post['nama'],
                'telp' => $post['telp'],
                // 'username' => $post['username'],
            ];
        } else {
            $data = [
                'nama' => $post['nama'],
                'telp' => $post['telp'],
                // 'username' => $post['username'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            ];
        }
        $update = $this->model_users->update($id, $data);
        if ($update) {
            $this->session->set_flashdata('success_profile', "Data berhasil di update");
            redirect('pemohon/profile', 'refresh');
        } else {
            $this->session->set_flashdata('error_profile', "Gagal update data anda, coba lagi");
            redirect('pemohon/profile', 'refresh');
        }

    }


}