<?php
include 'app/function/function_data_transaksi.php';

if (isset($_POST['simpan_data'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_menu = $_POST['id_menu'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total_harga'];
    $tgl = $_POST['tgl'];
    $sql = $mysqli->query("INSERT INTO data_transaksi (id_transaksi, id_menu, jumlah, total_harga, tgl) VALUES ('$id_transaksi','$id_menu','$jumlah','$total_harga','$tgl')");

    if ($sql) {
?>
        <script>
            alert('Data Berhasil Disimpan.');
            document.location.href = 'data_transaksi';
        </script>
    <?php
    }
}

if (isset($_POST['hapus_data'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $sql = $mysqli->query("DELETE FROM data_transaksi WHERE id_transaksi='$id_transaksi'");

    if ($sql) {
    ?>
        <script>
            alert("Data Berhasil Dihapus.");
            document.location.href = "data_transaksi";
        </script>
<?php
    }
}
