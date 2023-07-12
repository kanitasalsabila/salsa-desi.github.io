<?php 
class Mahasiswa extends CI_Controller
{
    function index()
    {
        $data['mahasiswa'] = $this->ModelMahasiswa->tampilData()->result();
        $this->load->view('data-mahasiswa', $data);
    }

    function tambah()
    {
        $this->load->view('input-mahasiswa');
    }

    function tambah_aksi()
    {
        $NIM = $this->input->post('nim');
        $Nama = $this->input->post('nama');
        $Alamat = $this->input->post('alamat');
        $Telepon = $this->input->post('telepon');

        $data = array(
            'NIM' =>$NIM,
            'Nama' =>$Nama,
            'Alamat' => $alamat,
            'Telepon' => $telepon
        );
        $this->ModelMahasiswa->simpanMahasiswa($data);
        redirect('mahasiswa/index');
    }
}