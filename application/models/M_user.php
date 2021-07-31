<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function login($post)
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    redirect('pembeli');
                } elseif ($user['role'] == 2) {
                    redirect('sales');
                } else {
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda inputkan salah!</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email yang anda inputkan salah!</div>');
            redirect('auth/login');
        }
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_alluser($role)
    {
        $this->db->from('user');
        $this->db->where('role', $role);
        $query = $this->db->get();
        return $query;
    }

    public function user_delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function user_ed($post, $id, $image)
    {
        $data = $this->db->get_where('user', ['id_user' => $id])->row_array();
        if (!empty($post['nama'])) {
            $data['nama'] = $this->input->post('nama');
        }
        if (!empty($post['email'])) {
            $data['email'] = $this->input->post('email');
        }
        if (!empty($post['notelp'])) {
            $data['notelp'] = $this->input->post('notelp');
        }
        if (!empty($post['password'])) {
            $data['password'] = sha1($this->input->post('password'));
        }
        if (!empty($post['role'])) {
            $data['role'] = $this->input->post('role');
        }
        if (!empty($image)) {
            $data['gambar'] = $image;
        }
        if (!empty($post['jeniskelamin'])) {
            $data['jeniskelamin'] = $this->input->post('jeniskelamin');
        }
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }

    function jml_user()
    {
        $this->db->group_by('role');
        $this->db->select('role, count(*) as total');
        return $this->db->from('user')
            ->get()
            ->result();
    }
}
