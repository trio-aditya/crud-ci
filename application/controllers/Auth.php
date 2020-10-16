<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
    }

    public function check_account()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->Auth_model->check_account($username, $password);

        if ($query === 1) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            Username tidak terdaftar
        </div>'
            );
        } elseif ($query === 2) {
            $this->session->set_flashdata(
                'alert',
                '<div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            Password yang anda masukan salah
        </div>'
            );
        } else {
            $userdata = array(
                'is_login'    => true,
                'id_user'     => $query->id_user,
                'role_id'     => $query->role_id,
                'username'    => $query->username,
                'password'    => $query->password,
                'status'      => $query->status,
                'session'     => $query->session
            );
            $this->session->set_userdata($userdata);
            return true;
        }
    }

    public function login()
    {

        if ($this->session->userdata('role_id') == '1') {
            redirect('sa/mahasiswa');
        }
        if ($this->session->userdata('role_id') == '2') {
            redirect('dashboard');
        }

        if ($this->input->post('submit')) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[22]');
            $error = $this->check_account();

            if ($this->form_validation->run() && $error === true) {
                $data = $this->Auth_model->check_account($this->input->post('username'), $this->input->post('password'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
                if ($data->role_id == '1') {
                    redirect('sa/mahasiswa');
                } elseif ($data->role_id == '2') {
                    redirect('dashboard');
                }
            } else {
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('dashboard');
    }
}
