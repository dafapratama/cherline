<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('m_user');
        $this->load->model('m_sales');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['graph'] = $this->m_user->jml_user();
        $a = array();
        for ($x = 1; $x <= 12; $x++) {
            $qyt = $this->m_sales->jml_transaksi($x);
            $hasil = $qyt->num_rows();
            array_push($a, $hasil);
        }
        $data['transaksi'] = $a;
        $this->template->load('templates/templates_admin', 'admin/dashboard', $data);
    }

    public function editprof()
    {
        $data['title'] = 'Edit Profile';
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');
        $id = $this->fungsi->user_login()->id_user;
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('templates/templates_admin', 'admin/editprofile', $data);
        } else {
            $post = $this->input->post();
            $image_user = $_FILES['image'];

            if ($image_user['name'] != null) {
                $config['upload_path']          = './assets/img/user/';
                $config['allowed_types']        = 'gif|jpg|png|jfif';
                $config['max_size']             = '2048';
            }

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
            }

            $this->m_user->user_ed($post, $id, $new_image);
            redirect('admin/editprof/');
        }
    }

    public function v_user()
    {
        $data['row'] = $this->m_user->get();

        $data['title'] = 'Data';
        $this->template->load('templates/templates_admin', 'admin/v_userdata.php', $data);
    }

    public function v_admin()
    {
        $role = "3";
        $data['row'] = $this->m_user->get_alluser($role);

        $data['title'] = 'System Admin';
        $this->template->load('templates/templates_admin', 'admin/v_userdata.php', $data);
    }

    public function v_sales()
    {
        $role = "2";
        $data['row'] = $this->m_user->get_alluser($role);

        $data['title'] = 'Sales';
        $this->template->load('templates/templates_admin', 'admin/v_userdata.php', $data);
    }

    public function v_pembeli()
    {
        $role = "1";
        $data['row'] = $this->m_user->get_alluser($role);

        $data['title'] = 'Pembeli';
        $this->template->load('templates/templates_admin', 'admin/v_userdata.php', $data);
    }

    public function user_del($id)
    {
        $data['title'] = 'Data';
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_user->get($id);
            $data['row'] = $query->row();
            $this->template->load('templates/templates_admin', 'admin/user_delete', $data);
        } else {
            $this->m_user->user_delete($id);
            redirect('admin/v_user');
        }
    }

    public function user_edit($id)
    {
        $data['title'] = 'Data';
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_user->get($id);
            $data['row'] = $query->row();
            $this->template->load('templates/templates_admin', 'admin/user_edit', $data);
        } else {
            $post = $this->input->post();
            $image = null;
            $this->m_user->user_ed($post, $id, $image);
            redirect('admin/v_user');
        }
    }
}
