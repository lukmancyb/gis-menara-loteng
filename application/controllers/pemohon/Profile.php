<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemohon/model_pemohon');
        $this->load->model('model_perusahaan');

    }

    public function index(){
        $perusahaan = $this->model_perusahaan->get()->result_array();
        $data = $this->model_pemohon->get_where(array('id_user' => $this->session->userdata('id')))->row();
//        var_dump($perusahaan); die;
        $this->load->view('pemohon/profile/index', array('title' => "Profil",
            'data' => $data, 'perusahaan' => $perusahaan));
    }

}