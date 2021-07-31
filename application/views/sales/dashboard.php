<head>
    <link href="<?= base_url('assets/'); ?>css/sales/dashboardsales.css" rel="stylesheet">
</head>

<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Selamat Datang, <?= $this->fungsi->user_login()->nama ?>!</h3>
    </div>
</main>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="gambarnih">
                        <img src="<?= base_url('assets/img/shopicon.svg') ?>" alt="gambar" width="50" height="50" class="float-left">
                    </div>
                    <h5 class="card-title">Sedang Diproses</h5>
                    <p class="card-text"><?= $transaksigoing->total ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="gambarnih">
                        <img src="<?= base_url('assets/img/shopicon.svg') ?>" alt="gambar" width="50" height="50" class="float-left">
                    </div>
                    <h5 class="card-title">Selesai</h5>
                    <p class="card-text"><?= $transaksidone->total ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="gambarnih">
                        <img src="<?= base_url('assets/img/shopicon.svg') ?>" alt="gambar" width="50" height="50" class="float-left">
                    </div>
                    <h5 class="card-title">Total Pesanan</h5>
                    <p class="card-text"><?= $ttltransaksi->total ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaksi Bulanan</h5>
                    <canvas id="myChart"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [
                                    'Jan',
                                    'Feb',
                                    'Mar',
                                    'Apr',
                                    'May',
                                    'Jun',
                                    'Jul',
                                    'Aug',
                                    'Sep',
                                    'Oct',
                                    'Nov',
                                    'Dec'
                                ],
                                datasets: [{
                                    label: 'Jumlah Transaksi',
                                    backgroundColor: [
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)',
                                        'rgb(54, 162, 235)'
                                    ],
                                    borderColor: '##93C3D2',
                                    data: [
                                        <?php
                                        if (count($graph) > 0) {
                                            for ($x = 0; $x <= 11; $x++) {
                                                echo $graph[$x] . ",";
                                            }
                                        }
                                        ?>
                                    ]
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tabel Transaksi</h5>
                    <!--https://www.npmjs.com/package/simple-datatables-classic buat tabel-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Nama Voucher </th>
                                <th>Kategori</th>
                                <th>Status Transaksi</th>
                                <th>Harga</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($transaksi->result() as $admin => $data) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->id_pembayaran ?></td>
                                    <td><?= $data->nama_kategori ?> <?= $data->nama_voucher ?></td>
                                    <td><?= $data->nama_kategori ?></td>
                                    <td><?= $data->status ?></td>
                                    <td>Rp. <?= $data->harga ?></td>
                                    <td><?= $data->tgl_pembayaran ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Statistik</h5>
                    <br>
                    <p style="text-align:left;">
                        Jumlah Produk
                        <span style="float:right;color: blue;">
                            <?= $voucher->total ?>
                        </span>
                    </p>
                    <p style="text-align:left;">
                        Jumlah Kategori
                        <span style="float:right;color: #90ee90;">
                            <?= $kategori->total ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produk Paling banyak Dibeli</h5>
                    <br>
                    <p style="text-align:left;">
                        <?php $no = 1;
                        foreach ($toptransaksi->result() as $admin => $data) { ?>
                            <?= $no++ ?>. <?= $data->nama_kategori ?> dibeli sebanyak <?= $data->terjual ?> voucher
                            <br><br>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>