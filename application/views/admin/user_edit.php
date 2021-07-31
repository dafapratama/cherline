<div>
    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Informasi User</h5>
                <hr>
                <form class="row" action="" method="post">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">ID User</label>
                        <input type="text" class="form-control" name="id_user" value="<?= $this->input->post('id_user') ?? $row->id_user ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="1" <?= $row->role == '1' ? 'selected' : null ?>>Pembeli</option>
                            <option value="2" <?= $row->role == '2' ? 'selected' : null ?>>Sales Admin</option>
                            <option value="3" <?= $row->role == '3' ? 'selected' : null ?>>System Admin</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="<?= $this->input->post('nama') ?? $row->nama ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="notelp" placeholder="<?= $this->input->post('notelp') ?? $row->notelp ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder=" <?= $this->input->post('email') ?? $row->email ?>">
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="col-md-6">
                    </div>
                    <br></br>
                    <br></br>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary">Simpan</button>
                        <!-- <button type="reset " class="btn btn-primary">Batal</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>