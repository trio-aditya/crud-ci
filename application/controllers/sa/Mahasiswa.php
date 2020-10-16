<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $x['mahasiswa'] = $this->Mahasiswa_model->get_data();
        $this->template->load('layouts/template', 'content/sa/mahasiswa', $x);
    }

    //Proses Tambah Data
    public function proses_tambah_data()
    {
        $this->Mahasiswa_model->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil ditambahkan!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('sa/mahasiswa');
    }

    //Proses Edit Data
    public function proses_edit_data()
    {
        $this->Mahasiswa_model->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil diubah!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('sa/mahasiswa');
    }

    //Proses Hapus Data
    public function hapus_data($id)
    {
        $this->Mahasiswa_model->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('sa/mahasiswa');
    }
}
