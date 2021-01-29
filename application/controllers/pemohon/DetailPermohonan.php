<?php defined('BASEPATH') or exit('No direct script access allowed');

class DetailPermohonan extends MY_Controller 
{
  public function __construct()
  {
      parent::__construct();
      $this->cekLogin();
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
      $data = $this->model_permohonan->get_by_pengajuan($id);
      var_dump($data->result()); die;
      $this->load->view('pemohon/detailpengajuan/v_detail_pengajuan');
  }
}