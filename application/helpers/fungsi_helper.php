<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    $user_role = $ci->session->userdata('role');
    if ($user_session) {
        if ($user_role == 1) {
            redirect('pembeli');
        } elseif ($user_role == 2) {
            redirect('sales');
        } else {
            redirect('admin');
        }
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if (!$user_session) {
        redirect('auth');
    }
}
