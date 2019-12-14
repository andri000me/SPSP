<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Input_model', 'model');
    }

    public function inputdatasiswa()
    {
        $data['title'] = "Sistem Pendataan Siswa PKL";
        $data['index'] = 2;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('input/inputdatasiswa');
        $this->load->view('templates/footer');
    }

    public function inputdatanilai()
    {
        $data['title'] = "Sistem Pendataan Siswa PKL";
        $data['index'] = 3;

        $data['data'] = $this->model->getdata();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar');
        $this->load->view('input/inputdatanilai');
        $this->load->view('templates/footer');
    }

    public function tambahsiswa()
    {
        $this->model->tambahsiswa();
    }
}
