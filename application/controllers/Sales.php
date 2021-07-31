<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('m_sales');
        $this->load->model('m_user');
        check_not_login();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $kategori = $this->m_sales->jml_kategori();
        $data['kategori'] = $kategori->row();
        $voucher = $this->m_sales->jml_voucher();
        $data['voucher'] = $voucher->row();
        $ttltransaksi = $this->m_sales->ttltransaksi();
        $data['ttltransaksi'] = $ttltransaksi->row();
        $transaksidone = $this->m_sales->ttltransselesai();
        $data['transaksidone'] = $transaksidone->row();
        $transaksigoing = $this->m_sales->ttltransdiproses();
        $data['transaksigoing'] = $transaksigoing->row();
        $data['transaksi'] = $this->m_sales->gettransaksi1();
        $data['toptransaksi'] = $this->m_sales->topterjual();

        $a = array();
        for ($x = 1; $x <= 12; $x++) {
            $qyt = $this->m_sales->jml_transaksi($x);
            $hasil = $qyt->num_rows();
            array_push($a, $hasil);
        }
        $data['graph'] = $a;

        $this->template->load('templates/templates_sales', 'sales/dashboard', $data);
    }

    public function editprof()
    {
        $data['title'] = 'Edit Profile';
        $this->form_validation->set_rules('id_user', 'Id_user', 'required');
        $id = $this->fungsi->user_login()->id_user;
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('templates/templates_sales', 'sales/editprofile', $data);
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
            redirect('sales/editprof/');
        }
    }

    public function list_produk()
    {
        $data['title'] = 'List Produk';
        $data['row'] = $this->m_sales->getallvoucher();
        $this->template->load('templates/templates_sales', 'sales/list_produk', $data);
    }

    public function produk_tambah()
    {
        $data['title'] = 'Produk';
        $data['row'] = $this->m_sales->getkategori();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('templates/templates_sales', 'sales/produk_tambah', $data);
        } else {
            $post = $this->input->post();
            $this->m_sales->produk_tambah($post);
            redirect('sales/list_produk/');
        }
    }

    public function produk_edit($id)
    {
        $data['title'] = 'Data';
        $this->form_validation->set_rules('id_voucher', 'Id_voucher', 'required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_sales->detailvoucher($id);
            $data['row'] = $query->row();
            $data['kategori'] = $this->m_sales->getkategori();
            $this->template->load('templates/templates_sales', 'sales/produk_edit', $data);
        } else {
            $post = $this->input->post();
            $this->m_sales->produk_edit($post, $id);
            redirect('sales/list_produk');
        }
    }

    public function produk_delete($id)
    {
        $data['title'] = 'Produk';
        $this->form_validation->set_rules('id_voucher', 'Id_voucher', 'required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_sales->detailvoucher($id);
            $data['row'] = $query->row();
            $this->template->load('templates/templates_sales', 'sales/produk_delete', $data);
        } else {
            $this->m_sales->produk_delete($id);
            redirect('sales/list_produk');
        }
    }

    public function list_kategori()
    {
        $data['title'] = 'List Kategori';
        $data['row'] = $this->m_sales->getkategori();
        $this->template->load('templates/templates_sales', 'sales/list_kategori', $data);
    }

    public function kategori_tambah()
    {
        $data['title'] = 'List Kategori';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('templates/templates_sales', 'sales/kategori_tambah', $data);
        } else {
            $post = $this->input->post();
            $image_kategori = $_FILES['image'];

            if ($image_kategori['name'] != null) {
                $config['upload_path']          = './assets/img/kategori/';
                $config['allowed_types']        = 'gif|jpg|png|jfif';
                $config['max_size']             = '2048';
            }

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
            }

            $this->m_sales->kategori_tambah($post, $new_image);
            redirect('sales/list_kategori/');
        }
    }

    public function kategori_edit($id)
    {
        $data['title'] = 'List Kategori';
        $this->form_validation->set_rules('id_kategori', 'Id_kategori', 'required');
        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_sales->getkategori($id);
            $data['row'] = $query->row();
            $this->template->load('templates/templates_sales', 'sales/kategori_edit', $data);
        } else {
            $post = $this->input->post();
            $image_kategori = $_FILES['image'];
            if ($image_kategori['name'] != null) {
                $config['upload_path']          = './assets/img/kategori/';
                $config['allowed_types']        = 'gif|jpg|png|jfif';
                $config['max_size']             = '2048';
            }

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
            }
            $this->m_sales->kategori_edit($post, $id, $new_image);
            redirect('sales/list_kategori/');
        }
    }

    public function kategori_delete($id)
    {
        $data['title'] = 'List Kategori';
        $this->form_validation->set_rules('id_kategori', 'Id_kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->m_sales->getkategori($id);
            $data['row'] = $query->row();
            $this->template->load('templates/templates_sales', 'sales/kategori_delete', $data);
        } else {
            $this->m_sales->kategori_delete($id);
            redirect('sales/list_kategori');
        }
    }

    public function lihat_transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['row'] = $this->m_sales->gettransaksi();
        $this->template->load('templates/templates_sales', 'sales/list_transaksi', $data);
    }

    public function selesaitransaksi($id)
    {
        $this->m_sales->selesaitransaksi($id);
        redirect('sales/lihat_transaksi');
    }
}
