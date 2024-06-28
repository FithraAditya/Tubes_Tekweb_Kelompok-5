<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus-square"></i> Input Data Transaksi</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Data_Transaksi">Data Transaksi</a></li>
                    <li class="breadcrumb-item active">Input Data Transaksi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <form action="data_transaksi" method="POST">
        <a href="data_transaksi" class="btn text-light" style="background-color: #042165;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>

        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Transaksi</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" name="id_transaksi" class="form-control" id="" placeholder="ID" readonly>
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
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="int" name="jumlah" class="form-control" id="jumlahInput" placeholder="Masukkan Jumlah">
                        </div>
                        <div>
                            <label for="">Harga</label>
                            <input type="int" name="total_harga" class="form-control" id="totalHargaInput" placeholder="Total Harga">
                        </div>
                        <div>
                            <label for="">Tanggal</label>
                            <input type="date" name="tgl" class="form-control" id="">
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
                <button type="submit" name="simpan_data" class="btn btn-block btn-success float-right"><i class="fas fa-save"></i> Simpan Data</button>
            </div>
        </div>
    </form>
</section>