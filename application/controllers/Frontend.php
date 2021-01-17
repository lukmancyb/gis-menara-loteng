<?php defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();

    // Cek apakah user sudah login
    // $this->cekLogin();
    $this->load->model(array('model_menaraseluler'));
    $this->load->model(array('model_bakti'));
    $this->load->model(array('model_perusahaan'));
    $this->load->model(array('model_kecamatan'));
    $this->load->model(array('model_blankspot'));
  }

  public function index()
  {
    // $kecamatan = $this->model_kecamatan->get()->result();
    // // echo json_decode($kecamatan);
    // var_dump($kecamatan); die;
    $data = array(
      'title' => "Sistem Informasi Geografis Pemetaan Menara",
      'perusahaan' => $this->model_perusahaan->get(),
      'kecamatan' => $this->model_kecamatan->get(),
      'tower' => $this->model_menaraseluler->getAll(),
      'men_bakti' => $this->db->query('select * from tbl_menara_bakti  group by kategori'),
      'jml_menara_seluler' => $this->db->get('tbl_menara_seluler')->num_rows()
    );
    $this->load->view('frontend/index', $data);
  }


  // AJAX REQUEST

    public function get_data_tower()
  {
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {
      $perusahaan = $this->input->post('perusahaan');
      $kecamatan = $this->input->post('kecamatan');
      $query = $this->model_menaraseluler->fetch_data($perusahaan, $kecamatan);

      // var_dump($query); die;
   
      if ($query->num_rows() > 0) {
        echo json_encode(array(
          'success' => true,
          'msg' => "Berhasil",
          'data' => $query->result()
        ));
      } else {
        echo json_encode(array(
          'success' => false,
          'msg' => "Data yang anda cari belum ada"
        ));
      }
    }
  }

  
  public function get_data_bakti()
  {
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {
      $kat = $this->input->post('category');      

      $query = $this->model_bakti->make_query($kat);
   
      if ($query->num_rows() > 0) {
        echo json_encode(array(
          'success' => true,
          'msg' => "Berhasil",
          'data' => $query->result()
        ));
      } else {
        echo json_encode(array(
          'success' => false,
          'msg' => "Data yang anda cari belum ada"
        ));
      }
    }
  }

  public function get_data_blankspot()
  {
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {   

      $query = $this->model_blankspot->getAllJoin();
   
      if ($query->num_rows() > 0) {
        echo json_encode(array(
          'success' => true,
          'msg' => "Berhasil",
          'data' => $query->result()
        ));
      } else {
        echo json_encode(array(
          'success' => false,
          'msg' => "Data yang anda cari belum ada"
        ));
      }
    }
  }



  public function get_data_tower_by_id()
  {
    $id = $this->input->post('id');
    // echo json_encode($id);
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {
      $query = $this->model_menaraseluler->getAllJoinWhere($id)->result();
      if ($query) {
        echo json_encode(array(
          'success' => true,
          'msg' => "Berhasil",
          'data' => $query
        ));
      } else {
        echo json_encode(array(
          'success' => false,
          'msg' => "Data tidak ditemukan"
        ));
      }
    }
  }
}
