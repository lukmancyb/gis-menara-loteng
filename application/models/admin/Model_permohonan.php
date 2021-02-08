<?php defined('BASEPATH') or exit('No direct script access allowed');


class Model_permohonan extends CI_Model
{
    public $table = 'tbl_permohonan';


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
    public function insert_batch($data)
    {
        // Jalankan query
        $query = $this->db->insert_batch($this->table, $data);

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

    public function join_syarat($id)
    {
        $query = $this->db
        ->select('a.*, b.nama, b.slug')
        ->from('tbl_permohonan a')
        ->join('tbl_syarat b', 'a.id_syarat = b.id')
        ->where('a.id_pengajuan', $id)
        ->get();

        return $query;
        
    }

}