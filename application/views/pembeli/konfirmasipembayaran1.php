<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/pembeli/konfirmasipembayaran.css">
</head>
<form class="row" action="" method="post">
    <div class="container">
        <h1 class="text-center">Konfirmasi Pembayaran</h1>
        <div class="box mx-auto ">
            <h5>Pembayaran</h5>
            <select class="form-control" name="metode" required>
                <option value="" disabled selected style="color: #999;">Pilih metode pembayaran</option>
                <option value="Gopay">Gopay - 085523786041 a/n Cherline</option>
                <option value="Ovo">OVO - 085523786041 a/n Cherline</option>
                <option value="ShoopePay">ShoopePay - 085523786041 a/n Cherline</option>
                <option value="Alfamart">Alfamart - 085523786041 a/n Cherline</option>
                <option value="Indomaret">Indomaret - 085523786041 a/n Cherline</option>
            </select>
            <button type="submit" class="acc btn btn-secondary">Ok</button>
        </div>
    </div>
</form>