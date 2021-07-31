<main>
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('sales/list_kategori') ?>">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hapus Kategori</li>
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
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" value="<?= $row->nama_kategori ?>">
                        <input type="hidden" class="form-control" name="id_kategori" value="<?= $row->id_kategori ?>" readonly>
                    </div>
                </div>
                <br>
                <label for="">Gambar Kategori</label>
                <div class="row">
                    <div class="col-sm-2">
                        <img src="<?= base_url('assets/img/kategori/') . $row->gambar ?>" class="img-fluid rounded" alt="" width="200px" height="200px" />
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <input type="radio" <?= ($row->publish == 1 ? 'checked' : '') ?> name="publish" value="1" id="defaultCheck1" disabled>
                        <label class="form-check-label" for="defaultCheck1">
                            Publish
                        </label>
                    </div>
                    <div class="col-sm-2">
                        <input type="radio" <?= ($row->publish == 0 ? 'checked' : '') ?> name="publish" value="0" id="defaultCheck1" disabled>
                        <label class="form-check-label" for="defaultCheck1">
                            Not Publish
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="tombol">
            <button type="button" id="myBtn" class="btn btn-danger">Hapus Kategori</button>
            <button type="button" class="btn btn-outline-primary">Batal</button>
        </div>
        <br>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100">Hapus Kategori</h5>
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