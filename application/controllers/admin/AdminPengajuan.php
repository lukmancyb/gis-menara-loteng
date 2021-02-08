<?php defined('BASEPATH') or exit('No direct script access allowed');
use  Carbon\Carbon as Carbon;

class AdminPengajuan extends MY_Controller 
{
      public function __construct()
      {
          parent::__construct();
          $this->cekLogin();
          $this->isAdmin();
          $this->load->model('admin/model_pengajuan');
          $this->load->model('admin/model_permohonan');
          $this->load->model('admin/model_trxpengajuan');
          $this->load->model('model_syarat');
      }

      public function index()
      {
        // var_dump("Admin permohonan index");die;
        $data_pengajuan = $this->model_pengajuan->join_perusahaan()->result();


        // var_dump($data_pengajuan); die;

        $d['data'] = $data_pengajuan;
        $this->load->view('admin/permohonan/v_permohonan', $d);  
      } 

      public function view($id)
      {
          $data_pengajuan = $this->model_pengajuan->join_perusahaan_where($id)->row();
          $data_permohonan = $this->model_permohonan->join_syarat($id)->result();
          // var_dump($data_permohonan); die;

          if($data_pengajuan){
            $d['data'] = $data_pengajuan;
            $d['title'] = "Validasi permohonan";
            $d['data_permohonan'] = $data_permohonan;
            $this->load->view('admin/permohonan/v_detail_permohonan', $d);
          }else{
            show_404();
          }
      }

      public function terima($id)
      { 
        $syarat = $this->model_syarat->get()->result();
        foreach($syarat as $item){
          $data[] = array(
            'id_syarat' => $item->id,
            'id_pengajuan' => $id,
            'created_at' => Carbon::now(),
          );
        }
        $insert = $this->model_permohonan->insert_batch($data);
        if($insert){
          $this->model_pengajuan->update($id, array('status' => 1));
          $datatrx = array(
            'id_pengajuan' => $id,
            'status' => 1,
            'komentar' => "Permohonan diterima",
            'created_at' => Carbon::now(),
            'created_by' => $this->session->userdata('username')
          );
          $this->model_trxpengajuan->insert($datatrx);
          $this->session->set_flashdata('session_pengajuan', 
            ['message' => "Berhasil", 'status' => TRUE]);
        }else{
          $this->session->set_flashdata('session_pengajuan', 
          ['message' => "Terjadi kesalahan", 'status' => FALSE]);
        }
        return redirect('admin-pengajuan/detail/'.$id);

      }

      public function tolak()
      {
          $post = $this->input->post();
          $id =$post['id_pengajuan'];
          $data = array(
            'status' => 2
          );
          $datatrx = array(
            'id_pengajuan' => $id,
            'status' => 2,
            'komentar' => $post['komentar'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $post['user']
          );
          $update_status = $this->model_pengajuan->update($id, $data);
          if($update_status){
            $this->model_trxpengajuan->insert($datatrx);
            $this->session->set_flashdata('session_pengajuan', 
            ['message' => "Berhasil Validasi perusahaan, Terima Kasih", 'status' => TRUE]);
            return redirect('admin-pengajuan');
          }else{
            $this->session->set_flashdata('session_pengajuan', 
            ['message' => "Gagal", 'status' => FALSE]);
            return redirect('admin-pengajuan');
          }

      }

      public function showKomentarById($id)
      {
          $query = $this->model_trxpengajuan->get_where_order_date(array('id_pengajuan' => $id));
          foreach($query->result_array() as $item)
          {
              $data[] = array(
                  'id_pengajuan' => $item['id_pengajuan'],
                  'created_at' => Carbon::parse($item['created_at'])->diffForHumans(),
                  'komentar' => $item['komentar'],
                  'created_by' => $item['created_by'],
                  'status' => $item['status']
              );
          }
      $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('data' => $data)));
    }

  
}