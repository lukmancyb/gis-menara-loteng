<?php
  class Model_izinmenara extends CI_Model {

    public $table = 'tbl_izin_menara';


    public function get()
    {
      // Jalankan query
      $query = $this->db->get($this->table);

      // Return hasil query
      return $query;
    }

    public function get_where($where)
    {
      // Jalankan query
      $query = $this->db
        ->where($where)
        ->get($this->table);

      // Return hasil query
      return $query;
    }

    public function insert($data)
    {
      // Jalankan query
      $query = $this->db->insert($this->table, $data);

      // Return hasil query
      return $query;
    }

    public function update($id, $data)
    {
      // Jalankan query
      $query = $this->db
        ->where('id', $id)
        ->update($this->table, $data);
      
      // Return hasil query
      return $query;
    }

    public function delete($id)
    {
      // Jalankan query
      $query = $this->db
        ->where('id', $id)
        ->delete($this->table);
      
      // Return hasil query
      return $query;
    }

    public function getAllJoin()
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, b.nama_perusahaan')
        ->from('tbl_izin_menara a')
        ->join('ref_perusahaan b', 'b.id_perusahaan = a.id_perusahaan')
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
    
  }