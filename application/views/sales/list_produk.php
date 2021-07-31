<div class="mx-4">
    <section class="content">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= base_url('sales/produk_tambah') ?> "><button class="btn btn-primary me-md-4" type="button">+ Tambah Produk </button></a>
        </div>
        <br>
        <div class="box">
            <div class="box-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50px">No</th>
                            <th width="300px">Nama Produk</th>
                            <th width="250px">Kategori</th>
                            <th width="250px">Harga</th>
                            <th width="100px">Edit</th>
                            <th width="100px">Hapus</th>
                            <th width="50px">Publish</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $admin => $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nama_kategori ?> <?= $data->nama_voucher ?></td>
                                <td><?= $data->nama_kategori ?></td>
                                <td>Rp. <?= $data->harga ?></td>
                                <td>
                                    <a class="xs-auto fa fa-edit" href="<?= base_url('sales/produk_edit/' . $data->id_voucher) ?> "></a>
                                </td>
                                <td>
                                    <a class="xs-auto fa fa-trash-alt" href="<?= base_url('sales/produk_delete/' . $data->id_voucher) ?>">
                                    </a>
                                </td>
                                <td>
                                    <?php if ($data->publish_voucher == 1) { ?>
                                        <button type="button" class="btn btn-success btn-sm">Ya</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-danger btn-sm">Tidak</button>
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