<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_model extends CI_Model
{
    public function getdata()
    {
        $query = "SELECT * FROM data";
        return $this->db->query($query)->result_array();
    }

    public function tambahsiswa()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'tempat_magang' => $this->input->post('tempat_magang'),
            'tahun' => $this->input->post('tahun')

        ];

        $this->db->insert('data', $data);
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New sub menu added!</div>');
        redirect('http://localhost/SPSP/input/inputdatanilai');
    }
}
