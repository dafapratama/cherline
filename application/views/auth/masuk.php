<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('auth'); ?>">CHERLINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('auth/registrasi') ?>'">Registrasi</button>
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
            <form class="form" method="post" action="<?= base_url('auth/login'); ?>">
                <h3 class="text-center">Masuk</h3>
                <?= $this->session->flashdata('message') ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" required value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" required>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <button class="btn btn-primary w-100" type="submit" name="btnLogin">Masuk</button>
                <p>Belum punya akun? <a href="<?= base_url('auth/registrasi') ?>">Buat Akunmu Disini.</a> </p>
            </form>
        </div>
    </div>
</div>