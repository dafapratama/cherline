<main>
    <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-4 mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('sales/list_kategori') ?>">Kategori</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
            </ol>
        </nav>
    </div>
</main>
<?= form_open_multipart('sales/kategori_edit/' . $row->id_kategori); ?>
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
                <div class="col-sm-4">
                    <input type="file" class="form-control" id="image" name="image" />
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <input class="form-check-input" type="radio" <?= ($row->publish == 0 ? 'checked' : '') ?> name="publish" value="0" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Not Publish
                    </label>
                </div>
                <div class="col-sm-2">
                    <input class="form-check-input" type="radio" <?= ($row->publish == 1 ? 'checked' : '') ?> name="publish" value="1" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Publish
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="tombol">
        <button type="sumbit" class="btn btn-outline-primary">Edit Kategori</button>
    </div>
    <br>
</div>
</form>