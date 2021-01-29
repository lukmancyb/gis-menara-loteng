<?php
  class Model_permohonan extends CI_Model {

    public $table = 'tbl_permohonan';



    public function get_select($select)
    {
        $query = $this->db
        ->select($select)
        ->from($this->table)
        ->get();

        return $query;
    }

    public function get_select_where($select, $where)
    {
        $query = $this->db
        ->select($select)
        ->from($this->table)
        ->where($where)
        ->get();

        return $query;
    }

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

    public function get_by_pengajuan($id_pengajuan)
    {
        $query = $this->db
        ->select('a.*,b.*')
        ->from(''.$this->table.' b')
        ->join('tbl_syarat a', 'a.id=b.id_syarat')
        ->where('b.id_pengajuan', $id_pengajuan)
        ->get();

        return $query;

    }
    
  }