<head>
    <link href="<?= base_url('assets/'); ?>css/sales/editprofile.css" rel="stylesheet">
</head>

</div>
<?= form_open_multipart('pembeli/editprof'); ?>
<div class="text-center">
    <img src="<?= base_url('assets/img/user/') . $this->fungsi->user_login()->gambar ?>" class="rounded-circle" alt="Cinque Terre" width="112" height="112">
    <input type="hidden" class="form-control" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
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
<div class="container">
    <div class="input-profile">

        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="name" class="form-control" id="name" name="nama" placeholder="<?= $this->fungsi->user_login()->nama ?> ">
        </div>
        <div class="form-group">
            <label for="email">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="<?= $this->fungsi->user_login()->email ?> ">
        </div>
        <div class="form-group">
            <label for="notelp">No Telepon</label>
            <input type="number" class="form-control" id="notelp" name="notelp" placeholder="<?= $this->fungsi->user_login()->notelp ?> " pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jeniskelamin" name="jeniskelamin">
            <?php $jeniskelamin = $this->fungsi->user_login()->jeniskelamin ? $this->fungsi->user_login()->jeniskelamin : $row->jeniskelamin ?>
            <option value="">Pilih</option>
            <option value="Pria" <?= $jeniskelamin == 'Pria' ? 'selected' : null ?>>Pria</option>
            <option value="Wanita" <?= $jeniskelamin == 'Wanita' ? 'selected' : null ?>>Wanita</option>
        </select>
    </div>
</div>

<div class="container">
    <div class="d-flex flex-row-reverse bd-highlight">
        <div class="p-2 bd-highlight"><button type="submit" class="tombol btn btn-dark">Simpan</button></div>
        <div class="p-2 bd-highlight"><button type="button" class="tombol btn btn-dark">Batal</button></div>
    </div>


</div>
</form>