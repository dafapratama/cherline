<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">CHERLINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <button type="button" class="btn btn-secondary">Registrasi</button>
            </div>
        </div>
    </div>
</nav>
<div class="container-custom w-100">
    <div class="row">
        <div class="col">
            <div class="left-side-content w-500">
                <img src="<?= base_url('assets/'); ?>/img/jett.png" alt="" width="600px" height="500px">
            </div>
        </div>
        <div class="col-8 right-side">
            <form class="form" method="post" action="<?= base_url('auth/registrasi') ?>">
                <h3 class="text-center">Registrasi</h3>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" required value="<?= set_value('name') ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" required value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Handphone</label>
                    <input type="text" name="nohp" class="form-control" required value="<?= set_value('nohp') ?>">
                </div>
                <button class="btn btn-primary w-100" type="submit" name="btnLogin">Masuk</button>
                <p>Sudah punya akun? <a href="<?= base_url('auth/login'); ?>">Masuk</a> </p>
            </form>
        </div>
    </div>
</div>