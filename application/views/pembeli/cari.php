<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/pembeli/cari.css">
</head>

<?php
foreach ($row->result() as $admin => $data) { ?>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <a href="<?= base_url('pembeli/lihatdetail/' . $data->id_kategori) ?> ">
                <img class="card-img-top" src="<?= base_url('assets/img/kategori/') . $data->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center"><?= $data->nama_kategori ?></p>
                </div>
            </a>
        </div>
    </div>
<?php } ?>