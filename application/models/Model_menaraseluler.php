<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_menaraseluler extends CI_Model
{


    public $table = 'tbl_menara_seluler';


    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->table, $data);

        // Return hasil query
        return $query;
    }

    public function create()
    {
        $data = array(
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'nama_site' => $this->input->post('nama_site'),
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'tahun_kontrak' => $this->input->post('tahun_kontrak'),
            'tahun_pembangunan' => $this->input->post('tahun_pembangunan'),
            'alamat_tower' => $this->input->post('alamat_tower'),
            'luas_lahan' => $this->input->post('luas_lahan'),
            'tinggi_menara' => $this->input->post('tinggi_menara'),
            'imb' => $this->input->post('imb'),
            'id_kecamatan' => $this->input->post('id_kecamatan'),
            'ijin_operasi' => $this->input->post('ijin_operasi')
        );
        $query = $this->db->insert('tbl_menara_seluler', $data);
        return $query;
    }
    public function getAll()
    {
        $query = $this->db->get('tbl_menara_seluler'); //mengambil semua data koordinat tower
        return $query;
    }
    public function getbyidtower($id)
    {
        $this->db->where('id_tower', $id);
        $query = $this->db->get('tbl_menara_seluler');
        return $query;
    }
    public function read($id)
    {
        $this->db->where('id_tower', $id); //mengambil data koordinat tower berdasarkan id_tower
        $query = $this->db->get('tbl_menara_seluler');
        return $query;
    }
    public function update($where, $data)
    {
        // Jalankan query
        $query = $this->db
            ->where($where)
            ->update($this->table, $data);

        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        $this->db->where('id_tower', $id); //menghapus berdasarkan id_tower
        $query = $this->db->delete('tbl_menara_seluler');
        return $query;
    }
    public function deletebyidtower($id)
    {
        $this->db->where('id_tower', $id);
        $query = $this->db->delete('tbl_menara_seluler');
        return $query;
    }

    public function getAllWhere($where)
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, b.nama_perusahaan, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_menara_seluler a')
        ->join('ref_perusahaan b', 'b.id_perusahaan = a.id_perusahaan', 'right')
        ->join('ref_desa c', 'c.id_desa = a.id_desa', 'right')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan', 'right')
        ->where($where)
        ->get();
      // $query = $this->db
      // ->select('a.*, b.nama_jabatan.*')
      // ->from('$table a')
      // ->join('ref_satuan_pendidikan b', 'b.id_npsn = a.id_satuan_pendidikan', 'left')
      // ->where($where)
      // ->get();
      // Return hasil query
      return $query;
    }

    public function getAllJoin()
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, b.nama_perusahaan, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_menara_seluler a')
        ->join('ref_perusahaan b', 'b.id_perusahaan = a.id_perusahaan','left')
        ->join('ref_desa c', 'c.id_desa = a.id_desa','left')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan','left')
        ->get();
      // $query = $this->db
      // ->select('a.*, b.nama_jabatan.*')
      // ->from('$table a')
      // ->join('ref_satuan_pendidikan b', 'b.id_npsn = a.id_satuan_pendidikan', 'left')
      // ->where($where)
      // ->get();
      // Return hasil query
      return $query;
    }
    
    public function getAllJoinWhere($id)
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, b.nama_perusahaan, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_menara_seluler a')
        ->join('ref_perusahaan b', 'b.id_perusahaan = a.id_perusahaan')
        ->join('ref_desa c', 'c.id_desa = a.id_desa', 'right')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan')
        ->where('a.id_perusahaan', $id)
        ->get();
      // $query = $this->db
      // ->select('a.*, b.nama_jabatan.*')
      // ->from('$table a')
      // ->join('ref_satuan_pendidikan b', 'b.id_npsn = a.id_satuan_pendidikan', 'left')
      // ->where($where)
      // ->get();
      // Return hasil query
      return $query;
    }

    public function fetch_data($perusahaan, $kecamatan){

      $query = $this->make_query($perusahaan, $kecamatan);
      $data = $this->db->query($query);

      return $data;

    }

    public function make_query($perusahaan, $kecamatan){
      // $query = "SELECT tbl_menara_seluler.*, ref_perusahaan.nama_perusahaan, ref_kecamatan.nama_kecamatan 
      // FROM tbl_menara_seluler WHERE id_tower !=''";

      $query = "SELECT tbl_menara_seluler.*, ref_perusahaan.nama_perusahaan, ref_kecamatan.nama_kecamatan, ref_desa.nama_desa
      FROM tbl_menara_seluler 
      INNER JOIN ref_perusahaan ON tbl_menara_seluler.id_perusahaan = ref_perusahaan.id_perusahaan
      INNER JOIN ref_kecamatan ON tbl_menara_seluler.id_kecamatan = ref_kecamatan.id_kecamatan
      INNER JOIN ref_desa ON tbl_menara_seluler.id_desa = ref_desa.id_desa
      WHERE id_tower !='' ";

      if(isset($perusahaan)){
        $p = implode("','", $perusahaan);
        $query .= " AND tbl_menara_seluler.id_perusahaan IN('".$p."')";
      }

      if(isset($kecamatan)){
        $kec = implode("','", $kecamatan);
        $query .= " AND tbl_menara_seluler.id_kecamatan IN('".$kec."')";
      }
      if($perusahaan == "" || $kecamatan ==""){
        $query .= "";
      }

      

      return $query;
  }
}

/* End of file model_koordinattower.php */
/* Location: ./application/models/model_koordinattower.php */