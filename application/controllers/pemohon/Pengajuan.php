<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('pemohon/model_pengajuan');
        $this->load->model('model_perusahaan');

    }

    public function index()
    {

        $pengajuan = $this->model_pengajuan->get()->result();
        $this->load->view('pemohon/pengajuan/index', array('pengajuan' => $pengajuan));
    }

    public function add(){
        $perusahaan = $this->model_perusahaan->get()->result();

        $this->load->view('pemohon/pengajuan/v_pengajuan_add',array('perusahaan' => $perusahaan));
    }

    public function create(){
        //Mengambil Bulan ini
        $bulan = date('n');
        //Mengambil nomor terbesar dari data yang ada
        $data = $this->db->query("SELECT max(nomor_pengajuan) as maxCode FROM tbl_pengajuan_permohonan WHERE MONTH(created_at) = $bulan" )->row();
        //Kode Untuk Permohonan
        $kode = "LOTENG-GIS";
        //Nomor baru atau nomor sebelumnya ditambah 1
        $nomor= sprintf("%03s", strval(strtok($data->maxCode, "/")+ 1));
        //nomor permohonan baru
        $nomor_permohonan = getNomorSurat($nomor, $kode);
        $post = $this->input->post();
        $data = [
            'email_pemohon' => $this->session->userdata('username'),
            'telepon_pemohon' => $this->session->userdata('telp'),
            'keterangan' => $post['keterangan'],
            'id_perusahaan' => $post['id_perusahaan'],
            'nomor_pengajuan' => $nomor_permohonan,
            'created_at' => date('Y:m:d h:i:s'),
            'status' => false
        ];
        $query = $this->model_pengajuan->insert($data);
        if ($query){
            $this->session->set_flashdata('session_pengajuan',
            [
             'status' => true,
             'message' => "Pengajuan Sudah di buat, untuk melengkapi permohonan klik tombol tambah syarat."
            ]);
            redirect('pemohon/pengajuan/index');
        }else{
            $this->session->set_flashdata('session_pengajuan',
                [
                    'status' => false,
                    'message' => "Terjadi kesalahan jaringan, coba lagi"
                ]);
            redirect('pemohon/pengajuan/add');
        }

//        var_dump($query); die;

//        var_dump($data); die;

    }

}