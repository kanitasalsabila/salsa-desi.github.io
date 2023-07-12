<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class ModelMahasiswa extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('mahasiswa');
    }

    public function simpanMahasiswa($data = null)
    {
    $this->db->insert('mahasiswa', $data);
    }
}
