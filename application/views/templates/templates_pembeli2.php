<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/pembeli/home.css">

    <title>Cherline</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CHERLINE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse show" id="navbarNavAltMarkup">
                <?php echo form_open('pembeli/carivoucher') ?>
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Voucher" aria-label="Search" name="cari">
                <?php echo form_close() ?>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= base_url('pembeli/'); ?>">Beranda <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= base_url('pembeli/riwayatpembelian'); ?>">Riwayat</a>
                    <a class="nav-item nav-link" href="<?= base_url('pembeli/editprof'); ?>">Profile</a>
                    <a class="nav-item nav-link" href="<?= base_url('auth/logout') ?>">Keluar</a>
                </div>
            </div>
        </div>
    </nav>

    <?= $contents ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?>js/aplod.js"></script>
</body>

</html>