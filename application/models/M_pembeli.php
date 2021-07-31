<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pembeli extends CI_Model
{
    public function carivoucher($cari)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('publish', 1);
        $this->db->like('nama_kategori', $cari);
        $query = $this->db->get();
        return $query;
    }

    public function ambilharga($id)
    {
        $this->db->from('voucher');
        $this->db->where('id_kategori', $id);
        $this->db->where('publish_voucher', 1);
        $this->db->order_by('harga', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function riwayatpembelian($id)
    {
        return $this->db->select('nama_voucher, nama_kategori, status')
            ->from('nota_pembayaran')
            ->join('voucher', 'voucher.id_voucher=nota_pembayaran.id_voucher')
            ->join('kategori', 'kategori.id_kategori=nota_pembayaran.id_kategori')
            ->where('nota_pembayaran.id_user', $id)
            ->order_by('tgl_pembayaran', 'DESC')
            ->get();
    }

    public function buatnota($nota)
    {
        $data['metode_pembayaran'] = $nota['metode'];
        $data['id_user'] = $nota['id_user'];
        $data['id_kategori'] = $nota['id_kategori'];
        $data['id_voucher'] = $nota['id_voucher'];
        $data['tgl_pembayaran'] = date("y/m/d");
        $data['status'] = "Menyelesaikan pembayaran";

        $this->db->insert('nota_pembayaran', $data);
    }

    public function getnota($id = null)
    {
        $this->db->from('nota_pembayaran');
        $this->db->where('id_user', $id);
        $this->db->join('voucher', 'voucher.id_voucher=nota_pembayaran.id_voucher');
        $this->db->limit(1);
        $this->db->order_by('tgl_pembayaran', 'ASC');
        $query = $this->db->get();
        return $query;
    }
}
