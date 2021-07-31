<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_user');
    }

    public function index()
    {
        $this->load->view('auth/landing');
    }

    public function login()
    {
        check_already_login();
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/masuk');
            $this->load->view('templates/auth_footer');
        } else {
            $this->m_user->login($this);
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email ini sudah terpakai!']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'role' => 1,
                'gambar' => 'profile.jfif',
                'notelp' => ($this->input->post('nohp'))
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan login menggunakan akun yang baru anda buat!</div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah Logout!</div>');
        redirect('auth');
    }
}
