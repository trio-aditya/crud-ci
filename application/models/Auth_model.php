<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'user';
    public $id          = 'user.id_user';

    public function __construct()
    {
        parent::__construct();
    }


    public function login($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

    public function cek_user($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();

        return $query->num_rows();
        # code...
    }

    public function check_account($username)
    {
        //cari username lalu lakukan validasi
        $this->db->where('username', $username);
        $query = $this->db->get($this->table)->row();

        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }
        //jika bernilai 2 maka password salah
        if (!hash_verified($this->input->post('password'), $query->password)) {
            return 3;
        }

        return $query;
    }

    public function logout($date, $id)
    {
        $this->db->where('user.id_user', $id);
        $this->db->update('user', $date);
    }
}
