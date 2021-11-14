<?php
defined('BASEPATH') or exit('No direct script access allowed');

class review extends CI_Controller
{
    function __construct()
     {
          parent::__construct();
        $this->load->model('review_model');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama','Nama pembeli','required');
        $this->form_validation->set_rules('nhp','Nomor HP','required');

        if($this->form_validation->run() == false){
        $data['merek'] = ['Nike', 'Adidas' ,'Kickers', 'Eiger', 'Bucherri'];
        $this->load->view('tokosepatu/v_input', $data);
        } else {
            $data = [
                'nama'=> $this->input->post('nama'),
                'nhp' => $this->input->post('nhp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->review_model->proses($this->input->post
                ('merek'))
            ];

            $this->load->view('tokosepatu/v_output', $data);
        }
    }
}