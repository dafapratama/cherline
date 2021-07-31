<main>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mt-4 mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('sales/list_produk') ?>">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
        </ol>
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
                        <div class="form">
                            <label for="">Nama Voucher</label>
                            <input type="text" class="form-control " required name="nama" placeholder="Masukan Nama Voucher">
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label for="">Harga</label>
                            <input type="number" class="form-control " name="harga" placeholder="Masukan Harga">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="form">
                            <label for="">Pilih Kategori</label>
                            <select name="id_kategori" class="form-control" required>
                                <option selected>Masukan kategori voucher</option>
                                <?php foreach ($row->result() as $admin => $data) { ?>
                                    <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form">
                            <label for="">Stock</label>
                            <input type="number" class="form-control " name="stock" placeholder="Masukan Stock">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="radio" name="publish_voucher" value="1" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Publish
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input type="radio" name="publish_voucher" value="0" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Not Publish
                        </label>
                    </div>
                </div>
                <br>
                <div class="tombol">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>