<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sales extends CI_Model
{
    function jml_transaksi($bln)
    {
        return $this->db
            ->from('nota_pembayaran')
            ->where('month(tgl_pembayaran)', $bln)
            ->get();
    }

    public function detailvoucher($id)
    {
        $this->db->from('voucher');
        $this->db->join('kategori', 'voucher.id_kategori=kategori.id_kategori');
        $this->db->where('id_voucher', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getallvoucher()
    {
        return $this->db
            ->from('voucher')
            ->join('kategori', 'voucher.id_kategori=kategori.id_kategori')
            ->order_by('nama_kategori', 'ASC')
            ->order_by('nama_voucher', 'ASC')
            ->get();
    }

    public function gettransaksi()
    {
        return $this->db
            ->from('nota_pembayaran')
            ->join('kategori', 'nota_pembayaran.id_kategori=kategori.id_kategori')
            ->join('user', 'nota_pembayaran.id_user=user.id_user')
            ->join('voucher', 'nota_pembayaran.id_voucher=voucher.id_voucher')
            ->order_by('tgl_pembayaran', 'DESC')
            ->get();
    }

    public function gettransaksi1()
    {
        return $this->db
            ->from('nota_pembayaran')
            ->join('kategori', 'nota_pembayaran.id_kategori=kategori.id_kategori')
            ->join('user', 'nota_pembayaran.id_user=user.id_user')
            ->join('voucher', 'nota_pembayaran.id_voucher=voucher.id_voucher')
            ->order_by('tgl_pembayaran', 'DESC')
            ->limit(5)
            ->get();
    }

    public function produk_tambah($post)
    {
        $data['nama_voucher'] = $this->input->post('nama');
        $data['harga'] = $this->input->post('harga');
        $data['stock'] = $this->input->post('stock');
        $data['keterangan'] = $this->input->post('keterangan');
        $data['id_kategori'] = $this->input->post('id_kategori');
        $data['publish_voucher'] = $this->input->post('publish_voucher');

        $this->db->insert('voucher', $data);
    }

    public function produk_edit($post, $id)
    {
        $data = $this->db->get_where('voucher', ['id_voucher' => $id])->row_array();
        if (!empty($post['harga'])) {
            $data['harga'] = $this->input->post('harga');
        }
        if (!empty($post['nama'])) {
            $data['nama_voucher'] = $this->input->post('nama');
        }
        if (!empty($post['stock'])) {
            $data['stock'] = $this->input->post('stock');
        }
        if (!empty($post['keterangan'])) {
            $data['keterangan'] = $this->input->post('keterangan');
        }
        if (!empty($post['id_kategori'])) {
            $data['id_kategori'] = $this->input->post('id_kategori');
        }
        $data['publish_voucher'] = $this->input->post('publish_voucher');
        $this->db->where('id_voucher', $id);
        $this->db->update('voucher', $data);
    }

    public function produk_delete($id)
    {
        $this->db->where('id_voucher', $id);
        $this->db->delete('voucher');
    }

    public function getkategori($id = null)
    {
        $this->db->from('kategori');
        if ($id != null) {
            $this->db->where('id_kategori', $id);
        }
        $this->db->order_by('nama_kategori', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function kategori_tambah($post, $image)
    {
        $data['nama_kategori'] = $this->input->post('nama');
        if (empty($image) or ($image == " ")) {
            $data['gambar'] = "default.png";
        }
        $data['publish'] = $this->input->post('publish');
        $this->db->insert('kategori', $data);
    }

    public function kategori_edit($post, $id, $image)
    {
        $data = $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
        if (!empty($post['nama'])) {
            $data['nama_kategori'] = $this->input->post('nama');
        }
        if (!empty($image)) {
            $data['gambar'] = $image;
        }
        $data['publish'] = $this->input->post('publish');
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }

    public function kategori_delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    public function selesaitransaksi($id)
    {
        $data = $this->db->get_where('nota_pembayaran', ['id_pembayaran' => $id])->row_array();
        $data['status'] = "Pembayaran Selesai";

        $voucher = $this->db->get_where('voucher', ['id_voucher' => $data['id_voucher']])->row_array();
        $voucher['stock'] = $voucher['stock'] - 1;
        $kategori = $this->db->get_where('kategori', ['id_kategori' => $data['id_kategori']])->row_array();
        $kategori['terjual'] = $kategori['terjual'] + 1;
        if ($voucher['stock'] == 0) {
            $voucher['publish_voucher'] = 0;
        }

        $this->db->where('id_pembayaran', $id);
        $this->db->update('nota_pembayaran', $data);
        $this->db->where('id_voucher', $data['id_voucher']);
        $this->db->update('voucher', $voucher);
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('kategori', $kategori);
    }

    function jml_kategori()
    {
        $this->db->from('kategori');
        $this->db->select("count(*) as total");
        $query = $this->db->get();
        return $query;
    }

    function jml_voucher()
    {
        $this->db->from('voucher');
        $this->db->select("count(*) as total");
        $query = $this->db->get();
        return $query;
    }

    function ttltransaksi()
    {
        $this->db->from('nota_Pembayaran');
        $this->db->select("count(*) as total");
        $query = $this->db->get();
        return $query;
    }

    function ttltransselesai()
    {
        $this->db->select("count(*) as total");
        $this->db->from('nota_Pembayaran');
        $this->db->where('status', 'Pembayaran selesai');
        $query = $this->db->get();
        return $query;
    }

    function ttltransdiproses()
    {
        $this->db->from('nota_Pembayaran');
        $this->db->select("count(*) as total");
        $this->db->where('status', 'Menyelesaikan pembayaran');
        $query = $this->db->get();
        return $query;
    }

    function topterjual()
    {
        $this->db->from('kategori');
        $this->db->where('terjual >=', 1);
        $this->db->order_by('terjual', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query;
    }
}
