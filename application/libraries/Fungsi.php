<?php

class Fungsi
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('m_user');
        $id_user = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->m_user->get($id_user)->row();
        return $user_data;
    }
}
