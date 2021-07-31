<head>
    <link href="<?= base_url('assets/'); ?>css/sales/editprofile.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/sales/styles.css" rel="stylesheet" />
</head>

<?= form_open_multipart('admin/editprof'); ?>
<div class="container">
    <div class="card mb-4">
        <div class="container">
            <div class="text-center">
                <img src="<?= base_url('assets/img/user/') . $this->fungsi->user_login()->gambar ?>" class="rounded-circle" alt="Cinque Terre" width="112" height="112">
            </div>
            <div class="text-center ubah">
                <div>
                    <div id="display" class="aplod display">
                        <h5>Upload Foto</h5>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">upload foto disini</label>
                            <input class="form-control form-control-sm" name="image" type="file">
                            <button id="save" class="save">save</button>
                        </div>
                    </div>
                </div>
                <a href="" id="ganti" class="ganti">Ubah Foto Profile</a>
            </div>
            <div class="input-profile">
                <form>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                        <label for=" nama">Nama Lengkap</label>
                        <input type="name" class="form-control" name="nama" placeholder="<?= $this->fungsi->user_login()->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="<?= $this->fungsi->user_login()->email ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="name">No Telepon</label>
                        <input type="number" class="form-control" name="nohp" placeholder="<?= $this->fungsi->user_login()->notelp ?>" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex flex-row-reverse bd-highlight">
        <div class="p-2 bd-highlight"><button type="submit" class="tombol btn btn-dark">Simpan</button></div>
        <div class="p-2 bd-highlight"><button type="cancel" class="tombol btn btn-dark">Batal</button></div>
    </div>
</div>
</form>