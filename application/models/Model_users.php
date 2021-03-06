<?php

class Model_users extends CI_Model
{

    public $table = 'users';


    public function cekAkun($username, $password)
    {
        // Get data user yang mempunyai username == $username dan active == 1
        $this->db->where('username', $username);

        // Jalankan query
        $query = $this->db->get($this->table)->row();

        // Jika query gagal atau tidak menemukan username yang sesuai
        // maka return false
        if (!$query) return false;

        // Ambil data password dari database
        $hash = $query->password;

        // Jika $hash tidak sama dengan $password maka return false
        if (!password_verify($password, $hash)) return false;

        // Update last_login user
        $last_login = $this->update($query->id, array('last_login' => date('Y-m-d H:i:s')));

        // Jika username dan password benar maka return data user
        return $query;
    }

    public function cekPasswordLama($id, $password)
    {
        // Get data user yang mempunyai id == $id dan active == 1
        $this->db->where('id', $id);
        $this->db->where('active', '1');

        // Jalankan query
        $query = $this->db->get($this->table)->row();

        // Jika query gagal atau tidak menemukan data yang sesuai
        // maka return false
        if (!$query) return false;

        // Ambil data password dari database
        $hash = $query->password;

        // Jika $hash tidak sama dengan $password maka return false
        if (!password_verify($password, $hash)) return false;

        // Jika username dan password benar maka return data user
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

    public function join_perusahaan($id_perusahaan)
    {
        $query = $this->db
            ->select('a.*', 'b.nama_perusahaan')
            ->from('users a')
            ->join('ref_perusahaan b', 'b.id_perusahaan = a.id_perusahaan', 'left')
            ->where('a.id_perusahaan', $id_perusahaan)
            ->get();

        return $query;
    }

    public function update_where($where, $data)     
    {
        $query = $this->db
        ->where($where)
        ->update($this->table, $data);

    // Return hasil query
    return $query;
    }

}