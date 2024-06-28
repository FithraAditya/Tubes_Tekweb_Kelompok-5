<?php
error_reporting(0);
include 'app/koneksi.php';
$id_menu = $_GET['id'];
$sql = $mysqli->query("SELECT * FROM tabel_menu WHERE tabel_menu.id_menu = '$id_menu'");
$row = $sql->fetch_assoc();

if (isset($_POST['edit_data'])) {
    $id_menu = $_POST['id_menu'];

    $id_menu = $_POST['id_menu'];
    $jenis_menu = $_POST['jenis_menu'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql_menu = $mysqli->query("UPDATE tabel_menu
                                        SET id_menu='$id_menu', jenis_menu='$jenis_menu', nama='$nama', harga='$harga' WHERE id_menu = '$id_menu'");
?>
    <script>
        alert("Data Berhasil Diedit.");
        document.location.href = "../data_menu";
    </script>
<?php
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Data Menu</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../data_menu">Data Menu</a></li>
                    <li class="breadcrumb-item active">Edit Data Menu</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form action="" method="POST">
        <a href="../data_menu" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Menu</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" name="id_menu" class="form-control" id="" value="<?= $row['id_menu']; ?>" placeholder="Masukkan ID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Menu</label>
                            <input type="text" name="jenis_menu" class="form-control" id="" value="<?= $row['jenis_menu']; ?>" placeholder="Masukkan jenis menu">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" id="" value="<?= $row['nama']; ?>" placeholder="Masukkan Nama Menu">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" id="" value="<?= $row['harga']; ?>" placeholder="Masukkan Tempat Lahir">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Perubahan Data</button>
                </div>
            </div>
    </form>
</section>

<script src="<?= $base_url; ?>plugins/jquery/jquery.min.js"></script>