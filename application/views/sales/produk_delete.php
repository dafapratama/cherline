<main>
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('sales/list_produk') ?>">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hapus Produk</li>
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
                        <input type="text" class="form-control" placeholder="<?= $row->harga ?>" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Nama Voucher</label>
                        <input type="text" class="form-control" placeholder="<?= $row->nama_voucher ?>" readonly>
                    </div>
                    <div class="col">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="nama" placeholder="<?= $row->stock ?>" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" placeholder="<?= $row->nama_kategori ?>" readonly>
                    </div>
                    <div class="col">
                        <div class="form">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <input type="text" class="form-control" name="nama" placeholder="<?= $row->keterangan ?>" readonly>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="radio" <?= ($row->publish_voucher == 1 ? 'checked' : '') ?> name="publish" value="1" id="defaultCheck1" disabled>
                        <label class="form-check-label" for="defaultCheck1">
                            Publish
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input type="radio" <?= ($row->publish_voucher == 0 ? 'checked' : '') ?> name="publish" value="0" id="defaultCheck1" disabled>
                        <label class="form-check-label" for="defaultCheck1">
                            Not Publish
                        </label>
                    </div>
                </div>
                <br>
                <div class="tombol">
                    <button type="button" id="myBtn" class="btn btn-danger">Hapus Produk</button>
                    <button type="button" class="btn btn-outline-primary">Batal</button>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100">Hapus Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Ya</button>
                <button type="button" class="btn btn-outline-primary">Batal</button>
            </div>
        </div>
    </div>
</form>