<?php
  class Model_blankspot extends CI_Model {

    public $table = 'tbl_area_blankspot';


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
        ->where('id_area_blankspot', $id)
        ->update($this->table, $data);
      
      // Return hasil query
      return $query;
    }
    public function read($id)
    {
        $this->db->where('id_area_blankspot', $id); //mengambil data koordinat tower berdasarkan id_tower
        $query = $this->db->get('tbl_area_blankspot');
        return $query;
    }

    public function delete($id)
    {
      // Jalankan query
      $query = $this->db
        ->where('id_area_blankspot', $id)
        ->delete($this->table);
      
      // Return hasil query
      return $query;
    }

    public function getAllWhere($where)
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_area_blankspot a')
        ->join('ref_desa c', 'c.id_desa = a.id_desa', 'right')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan', 'right')
        ->where($where)
        ->get();
   
      return $query;
    }

    public function getAllJoin()
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_area_blankspot a')
        ->join('ref_desa c', 'c.id_desa = a.id_desa')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan')
        ->get();

      return $query;
    }
    
  }