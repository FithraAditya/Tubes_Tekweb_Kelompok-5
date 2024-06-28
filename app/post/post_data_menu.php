<?php
include 'app/function/function_data_menu.php';

if (isset($_POST['simpan_data'])) {
    // data individu
    $id_menu = $_POST['id_menu'];
    $jenis_menu = $_POST['jenis_menu'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = $mysqli->query("INSERT INTO tabel_menu (id_menu, jenis_menu, nama, harga) VALUES ('$id_menu','$jenis_menu','$nama','$harga')");
?>
    <script>
        alert("Data Berhasil Disimpan.");
        document.location.href = "data_menu";
    </script>
<?php
}

if (isset($_POST['hapus_data'])) {
    $id_menu = $_POST['id_menu'];
    $sql = $mysqli->query("DELETE FROM tabel_menu WHERE id_menu='$id_menu'");
?>
    <script>
        alert("Data Berhasil Dihapus.");
        document.location.href = "data_menu";
    </script>
<?php
}
