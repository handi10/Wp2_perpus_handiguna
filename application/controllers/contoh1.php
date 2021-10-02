<?php
class contoh1 extends CI_controller
{
    public function index()
    {
        echo "Selamat Datang... selamat belajar web programing";
        //$this->load->view('view-latihan1');
    }
    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
       
        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->Model_latihan->jumlah($nil1, $nil2);

        $this->load->view('view-latihan', $data);
    }
}