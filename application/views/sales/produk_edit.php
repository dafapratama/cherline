<main>
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('sales/list_produk') ?>">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
            </ol>
        </nav>
    </div>
</main>
<form class="row" action="" method="post">
    <div class="container">
        <div class="card mb-4">
            <div class="card-body">
                <h4>Informasi Produk</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label for="">ID Voucher</label>
                        <input type="text" class="form-control" name="id_voucher" value="<?= $row->id_voucher ?>" readonly>
                    </div>
                    <div class="col">
                        <label for="">Harga</label>
                        <input type="text" class="form-control" name="harga" placeholder="<?= $row->harga ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Nama Voucher</label>
                        <input type="text" class="form-control" name="nama" placeholder="<?= $row->nama_voucher ?>">
                    </div>
                    <div class="col">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="stock" placeholder="<?= $row->stock ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlTextarea1">Kategori</label>
                        <select name="id_kategori" class="form-control" required>
                            <?php foreach ($kategori->result() as $admin => $data) { ?>
                                <option <?= $row->id_kategori == $data->id_kategori ? 'selected' : null ?> value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <div class="form">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="<?= $row->keterangan ?>">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="radio" <?= ($row->publish_voucher == 1 ? 'checked' : '') ?> name="publish_voucher" value="1" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Publish
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input type="radio" <?= ($row->publish_voucher == 0 ? 'checked' : '') ?> name="publish_voucher" value="0" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Not Publish
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" id="myBtn" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-outline-primary">Batal</button>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>