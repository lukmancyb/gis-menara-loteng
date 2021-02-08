<?php
  class Model_pengajuan extends CI_Model {

    public $table = 'tbl_pengajuan_permohonan';

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

    public function join_perusahaan()
    {
        $query = $this->db
        ->select('a.id, a.nomor_pengajuan, a.keterangan, a.created_at, a.file_url, a.status, a.telepon_pemohon, a.keterangan, b.nama_perusahaan')
        ->from('tbl_pengajuan_permohonan a')
        ->join('ref_perusahaan b', 'a.id_perusahaan = b.id_perusahaan')
        ->get();

        return $query;
        
    }
    public function join_perusahaan_where($id)
    {
        $query = $this->db
        ->select('a.id, a.nomor_pengajuan, a.keterangan, a.created_at, a.file_url, a.status, a.telepon_pemohon, a.email_pemohon, a.keterangan, b.nama_perusahaan, b.alamat_perusahaan')
        ->from('tbl_pengajuan_permohonan a')
        ->join('ref_perusahaan b', 'a.id_perusahaan = b.id_perusahaan')
        ->where('a.id', $id)
        ->get();

        return $query;
        
    }
    
  }