<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('m_pembeli');
        $this->load->model('m_sales');
        $this->load->model('m_user');
        check_not_login();
    }

    public function index()
    {
        $cari = $this->input->post('cari');
        $data['row'] = $this->m_pembeli->carivoucher($cari);
        $this->template->load('templates/templates_pembeli', 'pembeli/home', $data);
    }

    public function editprof()
    {
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');
        $id = $this->fungsi->user_login()->id_user;
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('templates/templates_pembeli2', 'pembeli/editprof');
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
            redirect('pembeli/editprof');
        }
    }

    public function carivoucher()
    {
        $cari = $this->input->post('cari');
        $data['row'] = $this->m_pembeli->carivoucher($cari);
        $this->template->load('templates/templates_pembeli2', 'pembeli/cari', $data);
    }

    public function lihatdetail($id)
    {
        $this->form_validation->set_rules('voucher', 'Voucher', 'required');
        if ($this->form_validation->run() == false) {
            $kategori = $this->m_sales->getkategori($id);
            $data['kategori'] = $kategori->row();
            $data['harga']  = $this->m_pembeli->ambilharga($id);
            $this->template->load('templates/templates_pembeli2', 'pembeli/lihatdetail', $data);
        } else {
            $harga = $this->input->post('voucher');
            $id_kategori = $this->input->post('id_kategori');
            redirect('pembeli/konfirmasipembayaran/' . $harga . "/" . $id_kategori);
        }
    }

    public function konfirmasipembayaran($id, $id_kategori)
    {
        $this->form_validation->set_rules('metode', 'Metode', 'required');
        if ($this->form_validation->run() == false) {
            $this->template->load('templates/templates_pembeli2', 'pembeli/konfirmasipembayaran1');
        } else {
            $nota['id_user'] = $this->fungsi->user_login()->id_user;
            $nota['id_voucher'] = $id;
            $nota['id_kategori'] = $id_kategori;
            $nota['metode'] = $this->input->post('metode');
            $this->m_pembeli->buatnota($nota);
            redirect('pembeli/tampilnota');
        }
    }

    public function tampilnota()
    {
        $id = $this->fungsi->user_login()->id_user;
        $nota = $this->m_pembeli->getnota($id);
        $data['nota'] = $nota->row();
        $this->template->load('templates/templates_pembeli2', 'pembeli/konfirmasipembayaran2', $data);
    }

    public function riwayatpembelian()
    {
        $id = $this->fungsi->user_login()->id_user;
        $data['voucher'] = $this->m_pembeli->riwayatpembelian($id);
        $this->template->load('templates/templates_pembeli2', 'pembeli/riwayatpembelian', $data);
    }
}
