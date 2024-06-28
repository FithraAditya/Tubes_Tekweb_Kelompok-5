<?php include 'app/post/post_data_transaksi.php'; ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-comment-dollar"></i> Data Transaksi</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data Transaksi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="input_data_transaksi" class="btn btn-primary">
                    <i class="fas fa-plus-square"></i> Input Transaksi
                </a>
                <a href="app/print/data_transaksi.php" target="_BLANK" class="btn btn-success">
                    <i class="fas fa-print"></i> Print
                </a>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Data Transaksi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>ID Transaksi</th>
                                        <th>Nama Menu</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php tampil_data($mysqli); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>