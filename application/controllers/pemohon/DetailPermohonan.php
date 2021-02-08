<?php defined('BASEPATH') or exit('No direct script access allowed');

class DetailPermohonan extends MY_Controller 
{
  public function __construct()
  {
      parent::__construct();
      $this->cekLogin();
      $this->isPemohon();
      $this->load->model('pemohon/model_pengajuan');
      $this->load->model('pemohon/model_permohonan');
      $this->load->model('pemohon/model_trxpengajuan');
      $this->load->model('model_perusahaan');
      $this->load->model('model_users');
      $this->load->library('upload');
      $this->load->helper('download');
  }

  public function show()
  {
      $id = $this->uri->segment(2);
      $data_pengajuan = $this->model_pengajuan->join_perusahaan_where($id)->row();
      $data_permohonan = $this->model_permohonan->join_syarat($id)->result();
      // var_dump($data_permohonan); die;

      if($data_pengajuan){
        $d['data'] = $data_pengajuan;
        $d['title'] = "Validasi permohonan";
        $d['data_permohonan'] = $data_permohonan;
        $this->load->view('pemohon/detailpengajuan/v_detail_pengajuan', $d);
      }else{
        show_404();
      }
  }
}