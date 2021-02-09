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

  public function showSyarat($id)
  {
     $data_permohonan = $this->model_permohonan->join_syarat_by_id($id)->row();

    //  var_dump($data_permohonan); die;

     if($data_permohonan) {
      $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('data' => $data_permohonan)));
     }   
     else {
      $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('data' => null, 'msg' => 'Data tidak ditemukan')));
     }
    }

    public function updateSyarat()
    {
      $post = $this->input->post();

      $path = $post['id_pengajuan'].'/';
      if (!is_dir('./assets/files/permohonan/'.$path)) {
          mkdir('./assets/files/permohonan/'.$path, 0777, TRUE);
      };
      $config['upload_path'] = './assets/files/permohonan/'.$path; //path folder
      $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
      $config['max_size']     = 2048;
      $this->upload->initialize($config);
        if(!empty($_FILES['nama_file']['name'])){
          if($this->upload->do_upload('nama_file')){
              $file = $this->upload->data();
              $file_name = $file['file_name'];
              $data = [
                'source' => $path.$file_name,
                'status' => 1,
                'created_at' => Carbon\Carbon::now(),
              ];

              $query = $this->model_permohonan->update( $post['id'], $data);

                if ($query){
                  if($post['source']){
                    $oldSource = './assets/files/permohonan/'.$post['source'];
                    // var_dump($oldSource); die;
                    unlink($oldSource);
                  }
                  $this->session->set_flashdata('session_permohonan',
                  [
                   'status' => true,
                   'message' => "Berkas Sudah di unggah, Terima kasih."
                  ]);
                  redirect('detail-permohonan/'.$post['id_pengajuan'], 'refresh');
              }else{
                  $this->session->set_flashdata('session_permohonan',
                      [
                          'status' => false,
                          'message' => "Terjadi kesalahan jaringan, coba lagi"
                      ]);
                      redirect('detail-permohonan/'.$post['id_pengajuan'], 'refresh');
              }

              // var_dump($file['file_type']); die;
          }else{
              // var_dump($this->upload->display_errors());die;
              $this->session->set_flashdata('session_permohonan',
              [
                  'status' => false,
                  'message' => "Gagal : ".$this->upload->display_errors()
              ]);
              redirect('detail-permohonan/'.$post['id_pengajuan'], 'refresh');
          }
      }
    }
    
}