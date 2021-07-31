<div class="mx-4">
    <h3>Selamat datang, <?= $this->fungsi->user_login()->nama ?>!</h3>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengguna</h5>
                    <hr>
                    <canvas id="myChart"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: [
                                    'Pembeli',
                                    'Sales',
                                    'Admin'
                                ],
                                datasets: [{
                                    label: 'Jumlah User',
                                    backgroundColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(54, 162, 235)',
                                        'rgb(255, 205, 86)'
                                    ],
                                    borderColor: '##93C3D2',
                                    data: [
                                        <?php
                                        if (count($graph) > 0) {
                                            foreach ($graph as $data) {
                                                echo $data->total . ", ";
                                            }
                                        }
                                        ?>
                                    ]
                                }]
                            },
                            options: {
                                cutoutPercentage: 92,
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaksi Bulanan</h5>
                    <hr>
                    <canvas id="transaksi"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById('transaksi').getContext('2d');
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
                                        if (count($transaksi) > 0) {
                                            for ($x = 0; $x <= 11; $x++) {
                                                echo $transaksi[$x] . ",";
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
</div>
</div>