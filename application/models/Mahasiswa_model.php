<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->order_by('npm', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    //Proses Tambah Data
    public function proses_tambah_data()
    {
        $user_id = $this->session->userdata('id_user');
        $data = [
            "user_id" => $user_id,
            "npm" => $this->input->post('npm'),
            "nama" => $this->input->post('nama'),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    //Proses Edit Data
    public function proses_edit_data()
    {
        $data = [
            "npm" => $this->input->post('npm'),
            "nama" => $this->input->post('nama'),
        ];

        $this->db->where('id_mahasiswa', $this->input->post('id_mahasiswa'));
        $this->db->update('mahasiswa', $data);
    }

    //Proses Hapus Data
    public function hapus_data($id)
    {
        $this->db->where('id_mahasiswa', $id);
        $this->db->delete('mahasiswa');
    }
}
