<body>
    <section id="jumbotron">
        <div class="jumbotron jumbotron-fluid text-center">

            <div class="container">
                <h3>TOP UP Valorant Points di Sini</h3>
                <h4>Dapatkan bonus pulsa</h4>
                <h6>Periode 1-5 Mei 2021 </h6>

            </div>

        </div>
        <img class="jett-bg" src="<?= base_url('assets/'); ?>img/jett.png" alt="">
    </section>

    <section id="topup">
        <div class="container">
            <div class="title ">Top-Up Game</div>

            <!--gambar -->

            <div class="row">
                <?php
                foreach ($row->result() as $admin => $data) { ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="<?= base_url('pembeli/lihatdetail/' . $data->id_kategori) ?> ">
                                <img class="card-img-top" src="<?= base_url('assets/img/kategori/') . $data->gambar ?>" alt="Card image cap">
                        </div>
                        <div class="nama">
                            <p class="card-text text-center"><?= $data->nama_kategori ?></p>
                            <a>
                        </div>
                    </div>
                <?php } ?>


            </div>

        </div>
    </section>
    <div class="container beli">
        <div class="row">
            <div class="col">
                <h5 style="padding: 10px; color: Red;">Beli voucher game? <br> ya di CHERLINE ~</h5>
                <h6>Cherline adalah website yang membantu kamu </h6>
                <h6>topup voucher game online</h6>
            </div>
            <div class="col alasan">
                <div class="">
                    <h5>Alasan kenapa kamu harus topup Voucher game di CHERLINE</h5>
                    <div style="padding: 10px; font-size: 15px; color: Red;"><img src="<?= base_url('assets/img/jam.png') ?>" height="30px" border="1" />Bayar dalam hitungan detik</div>
                    <h6 style="padding: 1   px; font-size: 15px; margin-left: 20px;">Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran</h6>
                    <div style="padding: 10px; font-size: 15px; color: Red;"><img src="<?= base_url('assets/img/wallet.png') ?>" height="30px" border="1" />Metode Pembayaran Terbaik </div>
                    <h6 style="padding: 1px; font-size: 15px; margin-left: 20px;">Hanya kami yang menawarkan begitu banyak pilihan metode pembayaran</h6>
                    <div style="padding: 10px; font-size: 15px; color: Red;"><img src="<?= base_url('assets/img/diskon.png') ?>" height="30px" border="1" />Promosi Promosi Menarik</div>
                    <h6 style="padding: 1px; font-size: 15px; margin-left: 20px;">Penggemar game dapat bergantung pada CHERLINE karena kami memberikan penawaran menarik</h6>
                </div>
            </div>
        </div>
    </div>
</body>