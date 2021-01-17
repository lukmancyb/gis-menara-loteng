<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cek apakah user sudah login
        $this->isAdmin();
        $this->cekLogin();
        $this->load->model(array('model_menaraseluler'));

    }

    public function index()
    {
        $stats_perusahaan = $this->db->query("SELECT a.id_perusahaan, b.id_perusahaan, b.nama_perusahaan, count(a.id_tower) as jml_menara_seluler FROM ref_perusahaan b LEFT  JOIN tbl_menara_seluler a ON a.id_perusahaan = b.id_perusahaan GROUP BY b.id_perusahaan")->result();
        $stats_kecamatan = $this->db->query("SELECT a.id_kecamatan, b.nama_kecamatan, count(a.id_tower) as jml_menara_seluler FROM ref_kecamatan b LEFT  JOIN tbl_menara_seluler a ON a.id_kecamatan= b.id_kecamatan GROUP BY b.id_kecamatan")->result();
        $data = array(
            'title' => "Dashboard",
            'jml_menara_seluler' => $this->db->get('tbl_menara_seluler')->num_rows(),
            'jml_menara_bakti' => $this->db->get('tbl_menara_bakti')->num_rows(),
            'jml_area_blankspot' => $this->db->get('tbl_area_blankspot')->num_rows(),
            'jml_perusahaan' => $this->db->get('ref_perusahaan')->num_rows(),
            'statistik_perusahaan' => json_encode($stats_perusahaan),
            'statistik_kec' => json_encode($stats_kecamatan),
        );
        $this->load->view('admin/dashboard', $data);
    }

    public function data_all()
    {
        if (!$this->input->is_ajax_request()) {
            show_404();
        } else {

            $query = $this->model_menaraseluler->getAllJoin();

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
}