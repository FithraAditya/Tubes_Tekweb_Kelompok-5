<?php
include 'app/koneksi.php';
$id_transaksi = $_GET['id'];
$sql = $mysqli->query("SELECT * FROM data_transaksi WHERE id_transaksi = '$id_transaksi'");
$row = $sql->fetch_assoc();

if (isset($_POST['edit_data'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_menu = $_POST['id_menu'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total_harga'];
    $tgl = $_POST['tgl'];

    $sql_update = $mysqli->query("UPDATE data_transaksi SET id_transaksi='$id_transaksi', 
                                    id_menu='$id_menu', jumlah='$jumlah', 
                                    total_harga='$total_harga', tgl='$tgl'
                                    WHERE id_transaksi='$id_transaksi'");
    if ($sql_update) {
?>
        <script>
            alert("Data Berhasil Diedit.");
            document.location.href = "../data_transaksi";
        </script>
<?php
    }
}
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Data Transaksi</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="data_transaksi">Data Transaksi</a></li>
                    <li class="breadcrumb-item active">Edit Data Transaksi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="" method="POST">
        <a href="../data_transaksi" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>

        <!-- Default box -->
        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Transaksi</h3>
            </div>

            <!-- form start -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" name="id_transaksi" class="form-control" value="<?= $row['id_transaksi']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="dropdown">Pilih Data Menu:</label>
                            <select name="id_menu" id="menuSelect" class="form-control">
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "cafe";

                                // Membuat koneksi
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Memeriksa koneksi
                                if ($conn->connect_error) {
                                    die("Koneksi gagal: " . $conn->connect_error);
                                }
                                $sql = "SELECT id_menu, nama, harga FROM tabel_menu";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // Output data untuk setiap baris
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row["id_menu"] . '" data-harga="' . $row["harga"] . '">' . $row["nama"] . ' - ' . $row["harga"] . '</option>';
                                    }
                                } else {
                                    echo '<option value="">Tidak ada data</option>';
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlahInput">
                        </div>
                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input type="text" name="total_harga" class="form-control" id="totalHargaInput">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tgl" class="form-control" value="<?= $row['tgl']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const menuSelect = document.getElementById('menuSelect');
                const jumlahInput = document.getElementById('jumlahInput');
                const totalHargaInput = document.getElementById('totalHargaInput');

                function calculateTotalHarga() {
                    const selectedOption = menuSelect.options[menuSelect.selectedIndex];
                    const harga = parseFloat(selectedOption.getAttribute('data-harga'));
                    const jumlah = parseInt(jumlahInput.value) || 0;
                    const totalHarga = harga * jumlah;
                    totalHargaInput.value = totalHarga.toFixed(2);
                }

                menuSelect.addEventListener('change', calculateTotalHarga);
                jumlahInput.addEventListener('input', calculateTotalHarga);
            });
        </script>
        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" name="edit_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Perubahan Data</button>
            </div>
        </div>
    </form>
</section>