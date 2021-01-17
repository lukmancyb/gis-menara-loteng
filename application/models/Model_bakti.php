<?php
  class Model_bakti extends CI_Model {

    public $table = 'tbl_menara_bakti';


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

    public function get_Join_where($where)
    {
      $query = $this->db
        ->select('a.*, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_menara_bakti a')
        ->join('ref_desa c', 'c.id_desa = a.id_desa')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan')
        ->where($where)
        ->get();
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
        ->where('id_menara_bakti', $id)
        ->update($this->table, $data);
      
      // Return hasil query
      return $query;
    }
    public function read($id)
    {
        $this->db->where('id_menara_bakti', $id); //mengambil data koordinat tower berdasarkan id_tower
        $query = $this->db->get('tbl_menara_bakti');
        return $query;
    }

    public function delete($id)
    {
      // Jalankan query
      $query = $this->db
        ->where('id_menara_bakti', $id)
        ->delete($this->table);
      
      // Return hasil query
      return $query;
    }

    public function fetch_data($kat){
      $query = $this->make_query($kat);
      $data = $this->db->query($query);

      return $data;
    }

    public function make_query($kat)
    {
      // Jalankan query
  
      // $query = $this->db
      //   ->select('a.*, c.nama_desa, d.nama_kecamatan')
      //   ->from('tbl_menara_bakti a')
      //   ->join('ref_desa c', 'c.id_desa = a.id_desa')
      //   ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan')
      //   ->where_in("a.kategori", $kat)
      //   ->get();
      $query = "SELECT a.*, c.nama_desa, d.nama_kecamatan
      FROM tbl_menara_bakti a 
      INNER JOIN ref_desa c ON c.id_desa = a.id_desa
      INNER JOIN ref_kecamatan d ON d.id_kecamatan = a.id_kecamatan 
      WHERE a.id_menara_bakti !='' ";

      if(isset($kat)){
        $k = implode("','", $kat);
        $query .= "AND a.kategori IN('".$k."')";
      }
      // $query = $this->db
      // ->select('a.*, b.nama_jabatan.*')
      // ->from('$table a')
      // ->join('ref_satuan_pendidikan b', 'b.id_npsn = a.id_satuan_pendidikan', 'left')
      // ->where($where)
      // ->get();
      // Return hasil query
      return $this->db->query($query);
    }

    public function getAllJoin()
    {
      // Jalankan query
  
      $query = $this->db
        ->select('a.*, c.nama_desa, d.nama_kecamatan')
        ->from('tbl_menara_bakti a')
        ->join('ref_desa c', 'c.id_desa = a.id_desa')
        ->join('ref_kecamatan d', 'd.id_kecamatan = a.id_kecamatan')
        ->get();
      return $query;
    }
    
  }