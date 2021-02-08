<?php defined('BASEPATH') or exit('No direct script access allowed');

class AdminPemohon extends MY_Controller 
{
  public function __construct()
  {
      parent::__construct();
      $this->cekLogin();
      $this->isAdmin();
      // $this->load->model('model_permohonan_perusahaan');
      $this->load->model('model_perusahaan');
      $this->load->model('model_users');

  }

  public function index()
  {
    // var_dump("Admin permohonan index");die;

    $data = $this->model_perusahaan->get_where(array(
      'is_active' => FALSE
    ))->result();
    // var_dump($data); die;
    $this->load->view('admin/pemohon/v_pemohon', array('data' => $data));  
  } 

  public function detail_pemohon()
  {

    if($this->input->post('submit')){
      var_dump($this->input->post); die;
    }

    $id = $this->uri->segment(3);
    // var_dump($id); die;
    $perusahaan = $this->model_perusahaan->get()->result();
    $data = $this->model_perusahaan->get_where(array(
      'id_perusahaan' => $id
    ))->row();


    $this->load->view('admin/pemohon/v_validasi_pemohon', array(
      'title' => "Lakukan validasi perusahaan",
      'perusahaan' => $perusahaan,
      'data' => $data
    ));
      // var_dump("Update pemohon"); die;
  }

  public function validasi_pemohon()
  {
      $id = $this->input->post('id_perusahaan');
      $user = $this->input->post('created_by');

      $data = $this->model_perusahaan->get_where(array(
        'id_perusahaan' => $id
      ))->row();

      // var_dump($user); die;

      if(!$data->is_active){
            $update_perusahaan = $this->model_perusahaan->update($id, array('is_active' => TRUE));
            if($update_perusahaan){
            $this->model_users->update_where(array('username' => $user), array('id_perusahaan' => $id));
            $this->session->set_flashdata('validasi_pemohon', 
            ['message' => "Berhasil Validasi perusahaan, Terima Kasih", 'status' => TRUE]);
            return redirect('admin-pemohon');
            }else{
            $this->session->set_flashdata('validasi_pemohon', 
            ['message' => "Kesalahan jaringan, coba lagi ya", 'status' => FALSE]);
            return redirect('admin-pemohon');
            };
      }else{
            $update_user =$this->model_users->update_where(array('username' => $user), array('id_perusahaan' => $id));
            if($update_user){
            $this->session->set_flashdata('validasi_pemohon', 
            ['message' => "Berhasil Validasi perusahaan, Terima Kasih", 'status' => TRUE]);
            return redirect('admin-pemohon');
          }else{
            $this->session->set_flashdata('validasi_pemohon', 
            ['message' => "Kesalahan jaringan, coba lagi ya", 'status' => FALSE]);
            return redirect('admin-pemohon');
          }

       }

  }
  
}