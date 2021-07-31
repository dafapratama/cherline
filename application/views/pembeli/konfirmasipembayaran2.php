<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/pembeli/konfirmasipembayaran.css">
</head>

<div class="container">
    <h1 class="text-center">Konfirmasi Pembayaran</h1>
    <div class="box2 mx-auto ">
        <span class="right"><?= $nota->id_pembayaran ?></span><span class="left">ID Pembayaran</span>
        <br>
        <span class="right"><?= $nota->id_user ?></span><span class="left">ID Pembeli</span>
        <br>
        <span class="right"><?= $nota->tgl_pembayaran ?></span><span class="left">Tanggal</span>
        <br>
        <span class="right">Rp. <?= $nota->harga ?></span><span class="left">Nominal</span>
        <br>
        <span class="right"><?= $nota->metode_pembayaran ?></span><span class="left">Metode Pembayaran</span>
        <br>
        <form action="" class="text-center">
            <a href="<?= base_url('pembeli/'); ?>"><button type="button" class="acc btn btn-secondary">Ok</button></a>
        </form>
    </div>
</div>