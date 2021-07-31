<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/pembeli/editprof.css">
</head>

<div class="container input-voucher ">
    <h3 class="text-center">Riwayat Pembelian</h3>
    <?php
    foreach ($voucher->result() as $admin => $data) { ?>
        <div class="row buy">
            <div class="col ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h6>Top Up <?= $data->nama_kategori ?></h6>
                            <p><?= $data->nama_voucher ?></p>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
                                <div class="p-2 bd-highlight " style="color: green;"><?= $data->status ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>