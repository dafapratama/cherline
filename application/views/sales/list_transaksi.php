<div class="mx-4">
    <section class="content">
        <h5 class="breadcrumb-item active" aria-current="page">Transaksi</h5>
        <br>
        <div class="box">
            <div class="box-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50px">No</th>
                            <th width="50px">Kode Transaksi</th>
                            <th width="100px">Nama Pembeli</th>
                            <th width="100px">Nama Voucher</th>
                            <th width="100px">Harga</th>
                            <th width="100px">Metode Pembayaran</th>
                            <th width="100px">Tanggal Dibeli</th>
                            <th width="50px">Status</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $admin => $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->id_pembayaran ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->nama_kategori ?> <?= $data->nama_voucher ?></td>
                                <td>Rp. <?= $data->harga ?></td>
                                <td><?= $data->metode_pembayaran ?></td>
                                <td><?= $data->tgl_pembayaran ?></td>
                                <td><?= $data->status ?></td>
                                <td>
                                    <?php if ($data->status == "Menyelesaikan pembayaran") { ?>
                                        <a href="<?= base_url('sales/selesaitransaksi/' . $data->id_pembayaran) ?> "><button type="button" class="btn btn-success btn-sm">Sudah dibayar</button></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>