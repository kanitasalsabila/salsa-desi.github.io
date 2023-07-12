>?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $hasil1 = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hail Penjumlahan dari ". $n1 ." + ". $n2 ." = " .$hasil;
    }
}