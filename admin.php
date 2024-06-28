<?php
session_start();
// mengecek admin login atau tidak
if (!isset($_SESSION['username'])) {
?>
    <script>
        alert('Anda harus login untuk mengakses halaman ini!');
        window.location.href = 'login';
    </script>
<?php
    return false;
}

$base_url = 'http://localhost/terascafe/';
include 'app/koneksi.php';

include 'views/layout/header.php';
include 'views/layout/navbar.php';
include 'views/layout/sidebar.php';
?>
<div class="content-wrapper">
    <?php
    if (isset($_GET['views']) && $_GET['views'] == "dashboard") {
        include 'views/pages/dashboard.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "data_menu") {
        include 'views/pages/data_menu.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "input_data_menu") {
        include 'views/pages/input_data_menu.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "edit_data_menu") {
        include 'views/pages/edit_data_menu.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "data_transaksi") {
        include 'views/pages/data_transaksi.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "input_data_transaksi") {
        include 'views/pages/input_data_transaksi.php';
    } else if (isset($_GET['views']) && $_GET['views'] == "edit_data_transaksi") {
        include 'views/pages/edit_data_transaksi.php';
    } else {
        include 'views/pages/dashboard.php';
    }
    ?>
</div>
<?php include 'views/layout/footer.php'; ?>