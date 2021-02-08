<?php defined('BASEPATH') or exit('No direct script access allowed');
use  Carbon\Carbon as Carbon;

class Pengajuan extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isPemohon();

        $this->load->model('pemohon/model_pengajuan');
        $this->load->model('pemohon/model_trxpengajuan');
        $this->load->model('model_perusahaan');
        $this->load->model('model_users');
        $this->load->library('upload');
        $this->load->helper('download');
        // $this->load->library('carbon_lib');


    }

    public function index()
    {
        $data = $this->model_users->get_where(array('id' => $this->session->userdata('id')))->row();
     
        $pengajuan = $this->model_pengajuan->get_where(array('email_pemohon' => $this->session->userdata('username')))->result();
        
        // var_dump($pengajuan); die;
        $this->load->view('pemohon/pengajuan/index', 
        array(
            'pengajuan' => $pengajuan, 
            'user' => $data
             ));
    }

    public function add(){
        $perusahaan = $this->model_perusahaan->get()->result();

        $this->load->view('pemohon/pengajuan/v_pengajuan_add',
        array('perusahaan' => $perusahaan));
    }

    public function create()
    {
        /**
         *  ######################
         *   Setting Nomor Surat
         *  ##################### 
         */
        //Mengambil Bulan ini
        $bulan = date('n');
        //Mengambil nomor terbesar dari data yang ada
        $data = $this->db->query("SELECT max(nomor_pengajuan) as maxCode FROM tbl_pengajuan_permohonan WHERE MONTH(created_at) = $bulan" )->row();
        //Kode Untuk Permohonan
        $kode = "LOTENG-GIS";
        //Nomor sebelumnya ditambah 1
        $nomor= sprintf("%03s", strval(strtok($data->maxCode, "/")+ 1));
        //nomor permohonan baru
        $nomor_permohonan = getNomorSurat($nomor, $kode);

       /**
         *  ######################
         *   Setting File
         *  ##################### 
         */

        $config['upload_path'] = './assets/files/pengajuan/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']     = 2048;

        $this->upload->initialize($config);

        // var_dump(!empty($_FILES['nama_file']['name'])); die;
        
        if(!empty($_FILES['nama_file']['name'])){
            if($this->upload->do_upload('nama_file')){
                $file = $this->upload->data();
                $file_name = $file['file_name'];
                $post = $this->input->post();

                $data = [
                    'email_pemohon' => $this->session->userdata('username'),
                    'telepon_pemohon' => $this->session->userdata('telp'),
                    'keterangan' =>strip_tags($post['keterangan']),
                    'id_perusahaan' => $this->session->userdata('id_perusahaan'),
                    'nomor_pengajuan' => $nomor_permohonan,
                    'created_at' => date('Y:m:d h:i:s'),
                    'status' => FALSE,
                    'file_url' => $file_name
                ];

                // var_dump($file['file_type']); die;
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
            }else{
                // var_dump($this->upload->display_errors());die;
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('pemohon/pengajuan/add');
            }
        }

    }


    public function edit()
    {
        $id  = $this->uri->segment(2);
        $data = $this->model_pengajuan->get_select_where(
            'id,nomor_pengajuan,id_perusahaan, keterangan, file_url',
            array('id' => $id)
        )->row();

        // var_dump($data->row()); die;
        $this->load->view('pemohon/pengajuan/v_pengajuan_edit', 
        array('data' => $data) );
    }
    
    public function update()
    {
        $post = $this->input->post();
        $config['upload_path'] = './assets/files/pengajuan/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']     = 2048;

        $this->upload->initialize($config);
        if(!empty($_FILES['nama_file']['name'])){
            if($this->upload->do_upload('nama_file')){
                $file = $this->upload->data();
                $file_name = $file['file_name'];
                $data = [
                    'keterangan' =>strip_tags($post['keterangan']),
                    'file_url' => $file_name,
                    'status' => 3 //mengubah status menjadi revisi
                ];
                $query = $this->model_pengajuan->update($post['id'], $data);
                if ($query){  
                    $path = './assets/files/pengajuan/'.$post['file_url'];
                    unlink($path);
                    $trx_data = [
                        'id_pengajuan' =>$post['id'],
                        'komentar' => 'Melakukan revisi',
                        'created_at' => Carbon::now(),
                        'created_by' => $this->session->userdata('username'),
                        'status' => 3  //mengubah status menjadi revisi

                    ];
                    $this->model_trxpengajuan->insert($trx_data);
                    $this->session->set_flashdata('session_pengajuan',
                    [
                     'status' => true,
                     'message' => "Pengajuan Sudah di rubah"
                    ]);
                    redirect('pemohon/pengajuan/index');
                }else{
                    // var_dump("salah");die;
                    $this->session->set_flashdata('session_pengajuan',
                        [
                            'status' => false,
                            'message' => "Terjadi kesalahan jaringan, coba lagi"
                        ]);
                    redirect('pemohon/pengajuan/edit');
                }
            }else{
                // var_dump($this->upload->display_errors());die;
                $data = $this->model_pengajuan->get_select_where(
                    'id,nomor_pengajuan,id_perusahaan, keterangan, file_url',
                    array('id' => $post['id'])
                )->row();
                // var_dump($data); die;
                $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->load->view('pemohon/pengajuan/v_pengajuan_edit', array('data' => $data));
            }
        }else{
            $data = [
                'keterangan' =>strip_tags($post['keterangan'])
            ];
            $query = $this->model_pengajuan->update($post['id'], $data);
            if ($query){
                $trx_data = [
                    'id_pengajuan' =>$post['id'],
                    'komentar' => 'Melakukan Revisi',
                    'created_at' => Carbon::now(),
                    'created_by' => $this->session->userdata('username'),
                    'status' => 3
                ];
                $this->model_trxpengajuan->insert($trx_data);
                $this->session->set_flashdata('session_pengajuan',
                [
                 'status' => true,
                 'message' => "Anda melakukan revisi"
                ]);
                redirect('pemohon/pengajuan/index');
            }else{
                $this->session->set_flashdata('session_pengajuan',
                    [
                        'status' => false,
                        'message' => "Terjadi kesalahan jaringan, coba lagi"
                    ]);
                redirect('pemohon/pengajuan/edit');
            }
        }
     
    }

    public function delete()
    {
        // var_dump($this->input->post('id')); die;
        $post = $this->input->post();
        $delete = $this->model_pengajuan->delete($post['id']);
        if($delete){
            $this->model_trxpengajuan->delete($post['id']);
            $this->delete_file($post['file_url']);
            $this->session->set_flashdata('session_pengajuan',
            [
             'status' => true,
             'message' => "Pengajuan Sudah di hapus"
            ]);
            redirect('pemohon/pengajuan/index');
        }else{
            $this->session->set_flashdata('session_pengajuan',
            [
                'status' => false,
                'message' => "Terjadi kesalahan jaringan, coba lagi"
            ]);
        redirect('pemohon/pengajuan/edit');
        }


    }

    public function delete_file($file_name)
    {
        $path = './assets/files/pengajuan/'.$file_name;
        unlink($path);
        return true;
    }


    // Ajax Request

    public function showKomentarById($id)
    {

        $query = $this->model_trxpengajuan->get_where_order_date(array('id_pengajuan' => $id));

        foreach($query->result_array() as $item){
            $data[] = array(
                'id_pengajuan' => $item['id_pengajuan'],
                'created_at' => Carbon::parse($item['created_at'])->diffForHumans(),
                'komentar' => $item['komentar'],
                'created_by' => $item['created_by'],
                'status' => $item['status']
            );
        }
    // var_dump($data); die;
    $this->output
    ->set_content_type('application/json')
    ->set_output(json_encode(array('data' => $data)));
      
    }

  


   

}