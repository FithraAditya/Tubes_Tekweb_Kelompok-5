<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-bread-slice"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Menu</span>
                        <span class="info-box-number">
                            <?php
                            $sql_total = $mysqli->query("SELECT * FROM tabel_menu");
                            echo mysqli_num_rows($sql_total);
                            ?>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <!-- End Info boxes -->

        <!-- start info boxes -->
        <div class="row">
            <div class="col">
                <!-- small box Minuman -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>
                            <?php
                            $mysqli = new mysqli("localhost", "root", "", "cafe");
                            $sql_total = $mysqli->query("SELECT * FROM tabel_menu WHERE jenis_menu IN ('minuman')");
                            echo mysqli_num_rows($sql_total);
                            ?>
                        </h3>
                        <p>Minuman</p>
                    </div>
                    <div class="icon text-indigo">
                        <i class="ion ion-spoon"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- small box Makanan -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>
                            <?php
                            $sql_total = $mysqli->query("SELECT * FROM tabel_menu WHERE jenis_menu IN ('makanan')");
                            echo mysqli_num_rows($sql_total);
                            ?>
                        </h3>
                        <p>Makanan</p>
                    </div>
                    <div class="icon text-indigo">
                        <i class="ion ion-coffee"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- end info boxes -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card card-light">
                <div class="card-header">
                    <h3 class="card-title">Grafik Menu</h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="rekomPB" width="400" height="400"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</section>

<script src="<?= $base_url; ?>plugins/newChart.js"></script>

<?php

$menu = $mysqli->query("SELECT * FROM tabel_menu WHERE jenis_menu='makanan'");
$rows_menu = mysqli_num_rows($menu);
$menu2 = $mysqli->query("SELECT * FROM tabel_menu WHERE jenis_menu='minuman'");
$rows_menu2 = mysqli_num_rows($menu2);
?>
<script>
    var rekompb = document.getElementById('rekomPB');
    var rekomPB = new Chart(rekompb, {
        type: 'doughnut',
        data: {
            labels: [
                'makanan',
                'minuman'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [<?= $rows_menu; ?>, <?= $rows_menu2; ?>],
                backgroundColor: [
                    '#e83e8c',
                    '#20c997'
                ],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
</script>